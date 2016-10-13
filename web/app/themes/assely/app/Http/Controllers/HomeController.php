<?php

namespace App\Http\Controllers;

use App\Posttypes\Docs;
use App\Posttypes\Pages;
use App\Taxonomies\DocsSections;
use Assely\Asset\AssetFactory;
use Assely\Cache\Cache;
use Assely\Routing\Controller;
use View;

class HomeController extends Controller
{
    /**
     * Construct home controller.
     *
     * @param \Assely\Asset\AssetFactory $asset
     */
    public function __construct(
        Pages $pages,
        Docs $docs,
        DocsSections $sections,
        AssetFactory $asset
    ) {
        $this->pages = $pages;
        $this->docs = $docs;
        $this->sections = $sections;

        $asset->get('parsleyjs')->add();
        $asset->get('prism')->add();
        $asset->get('app-home')->add();
    }

    /**
     * Display a list of resources.
     *
     * @return void
     */
    public function index(Cache $cache)
    {
        if ( ! $cache->has('Home\Links')) {
            $cache->put('Home\Links', [
                'docs' => $this->pages->find('docs')->link,
                'fielder' => $this->docs->find('fielder-installation')->link,
            ]);
        }

        return View::make('home.index', [
            'sections' => $this->sections,
            'links' => $cache->get('Home\Links'),
        ]);
    }
}
