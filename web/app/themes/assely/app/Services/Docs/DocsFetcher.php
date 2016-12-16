<?php

namespace App\Services\Docs;

use Assely\Adapter\Post;
use Assely\Cache\Cache;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Parsedown;

class DocsFetcher
{
    /**
     * Cache key prefix.
     *
     * @var string
     */
    const CACHE_PREFIX = 'Docs\\Content';

    /**
     * Construct documentation fetcher.
     *
     * @param \GuzzleHttp\Client $client
     * @param \Parsedown $parser
     * @param \Assely\Cache\Cache $cache
     */
    public function __construct(
        Client $client,
        Parsedown $parser,
        Cache $cache
    ) {
        $this->client = $client;
        $this->parser = $parser;
        $this->cache = $cache;
    }

    /**
     * Grab documentation content.
     *
     * @param \Assely\Adapter\Post $doc
     *
     * @return \Assely\Adapter\Post
     */
    public function grab(Post $doc)
    {
        $key = self::CACHE_PREFIX."/{$doc->id}";

        if ( ! $cached = $this->cache->get($key)) {
            $url = $doc->meta('docs_file')->get('url');

            // Fetch content of the markdown document from the url.
            // If downloading was successful, update doc content
            // with fetched content and put into the cache.
            if ($content = $this->fetch($url)) {
                $doc->content = $content;

                $doc->save();

                $this->cache->put($key, $doc);
            }

            // Return updated doc.
            return $doc;
        }

        // Return cached doc.
        return $cached;
    }

    /**
     * Fetch content of the url.
     *
     * @param string $url
     *
     * @return string|boolean
     */
    public function fetch($url)
    {
        try {
            $response = $this->client->request('GET', $url);

            if ($response->getStatusCode() === 200) {
                return $this->parser->text($response->getBody());
            }
        } catch (ClientException $e) {
            return;
        }
    }
}
