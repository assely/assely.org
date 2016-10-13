<?php

namespace App\Http\Controllers;

use App\Posttypes\Docs;
use App\Services\Docs\DocsFetcher;
use App\Taxonomies\DocsSections;
use Assely\Asset\AssetFactory;
use Assely\Routing\Controller;
use View;

class DocsController extends Controller
{
    /**
     * Documentation posttype.
     *
     * @var \App\Posttypes\Docs
     */
    protected $docs;

    /**
     * Documentation sections taxonomy.
     *
     * @var \App\Taxonomies\Documentation
     */
    protected $sections;

    /**
     * Documentation file fetcher.
     *
     * @var \App\Services\Docs\DocsFetcher
     */
    protected $fetcher;

    /**
     * Construct documentation conroller.
     *
     * @param \App\Posttypes\Docs $docs
     * @param \App\Taxonomies\DocsSections $sections
     * @param \App\Services\Docs\DocsFetcher $fetcher
     * @param \Assely\Asset\AssetsFactory $asset
     */
    public function __construct(
        Docs $docs,
        DocsSections $sections,
        DocsFetcher $fetcher,
        AssetFactory $asset
    ) {
        $this->docs = $docs;
        $this->sections = $sections;
        $this->fetcher = $fetcher;

        $asset->get('prism')->add();
        $asset->get('app-docs')->add();
    }

    /**
     * Display a list of resources.
     *
     * @return void
     */
    public function index()
    {
        return $this->show('installation');
    }

    /**
     * Display the specifed resource.
     *
     * @return void
     */
    public function show($name)
    {
        return View::make('docs.index', [
            'sections' => $this->sections,
            'doc' => $this->fetchDoc($name),
        ]);
    }

    /**
     * Fetch documentation content.
     *
     * @param  string $name
     *
     * @return \Assely\Adapters\PostAdapter
     */
    protected function fetchDoc($name)
    {
        $documentation = $this->docs->find($name);

        return $this->fetcher->grab($documentation);
    }
}
