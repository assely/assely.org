<?php

namespace App\Console\Commands;

use App\Posttypes\Docs;
use App\Services\Docs\DocsFetcher;
use Assely\Console\Command;

class DocsClearCacheCommand extends Command
{
    /**
     * Command singnature.
     *
     * @var string
     */
    public $signature = 'docs:clear';

    /**
     * Command description.
     *
     * @var string
     */
    public $description = "Easy clearing cache for single documentation page.";

    /**
     * Construct command.
     *
     * @param \App\Posttypes\Docs $docs
     */
    public function __construct(Docs $docs)
    {
        $this->docs = $docs;
    }

    /**
     * Clears cache for specific documentation post.
     *
     * ## OPTIONS
     *
     * cache
     * : Command argument.
     *
     * [--slug=<slug>]
     * : Documentation page slug.
     *
     * ## EXAMPLE
     *
     *     wp docs:clear cache --slug="installation"
     *
     */
    public function cache()
    {
        if (! $this->getOption('slug')) {
            $this->error('You must provide documentation page slug [--slug=<slug>].');
        }

        $docs = $this->docs->findOrFail($this->getOption('slug'));

        $this->call('transient delete ' . DocsFetcher::CACHE_PREFIX."/{$docs->id}");
    }
}
