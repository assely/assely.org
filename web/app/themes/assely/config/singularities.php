<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Post Types
    |--------------------------------------------------------------------------
    |
    | The post types on the list will be automatically loaded at application
    | bootstrap. Add to this array your own custom post types. By default,
    | WordPress comes with posts and pages, so these are on the list.
    |
     */

    'posttypes' => [
        // App\Posttypes\Posts::class,
        App\Posttypes\Pages::class,
        App\Posttypes\Docs::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Application Taxonomies
    |--------------------------------------------------------------------------
    |
    | The taxonomies on the list will be automatically loaded at application
    | bootstrap. Add to this array your own custom taxonomies. By default,
    | WordPress comes with categories and tags, so these are on the list.
    |
     */

    'taxonomies' => [
        // App\Taxonomies\Categories::class,
        // App\Taxonomies\Tags::class,
        App\Taxonomies\DocsSections::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Application Metaboxes
    |--------------------------------------------------------------------------
    |
    | The metaboxes on the list will be automatically loaded at application
    | bootstrap. Add to this array your own custom metaboxes. You can
    | quickly scafford new metabox with `assely:make` command.
    |
     */

    'metaboxes' => [
        App\Metaboxes\DocsFile::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Application Custom User Profiles
    |--------------------------------------------------------------------------
    |
    | The profiles on the list will be automatically loaded at application
    | bootstrap. Add to this array your own custom profiles. You can
    | quickly scafford new widget with `assely:make` command.
    |
     */

    'profiles' => [
        //
    ],

];
