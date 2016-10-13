<?php

use function Assely\Helpers\config;

/*
|--------------------------------------------------------------------------
| Application Menu Locations
|--------------------------------------------------------------------------
|
| Here is where you can register all of the theme menu locations.
| Location means place where you can assign navigation created
| inside a "Apperance > Menus > Edit Menus" admin page.
|
 */

Menu::create('primary', [
    'title' => [__('Primary', config('app.textdomain'))],
    'description' => __('Website main navigation.', config('app.textdomain')),
]);
