<?php

/*
|--------------------------------------------------------------------------
| Application Assets
|--------------------------------------------------------------------------
|
| Here is where you can register all of the application assets.
| Simply tell which ones needs to be add and you ready to go.
| Relatives paths will be searched in `public` directory.
|
 */

Asset::add('app-styles', ['path' => 'css/app.css']);

Asset::remove('algolia-autocomplete', ['type' => 'style']);

Asset::add('bootstrap', [
    'path' => 'js/bootstrap.js',
    'dependences' => ['jquery'],
]);

Asset::add('app-common', [
    'path' => 'js/common.js',
]);

Asset::queue('prism', [
    'path' => 'js/prism.js',
    'dependences' => ['jquery'],
]);

Asset::queue('app-home', [
    'path' => 'js/home.js',
    'dependences' => ['parsleyjs', 'prism'],
]);

Asset::queue('app-docs', [
    'path' => 'js/docs.js',
    'dependences' => ['prism'],
]);
