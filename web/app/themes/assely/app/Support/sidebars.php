<?php

use function Assely\Helpers\config;

/*
|--------------------------------------------------------------------------
| Application Sidebars Areas
|--------------------------------------------------------------------------
|
| Here is where you can register all of the theme sidebars areas.
| This will create widgetized area in "Appearance > Widgets",
| where you can assign any widget, even your custom ones.
|
 */

Sidebar::create('docs', [
    'title' => [__('Documentation'), __('Documentations'), config('app.textdomain')],
    'description' => __('Area below documentation sections menu.', config('app.textdomain')),
]);
