<?php

namespace App\Providers;

use Hook;
use Support;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any app services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any app services.
     *
     * @return void
     */
    public function boot()
    {
        // Add theme supports for Wordpress essentials.
        $this->addSupport();

        // Clean theme from unnecessary Wordpress elements.
        $this->cleanUnnecessary();

        // Add additional body classes.
        $this->addAdditionalBodyClasses();

        // Add various plugins hooks.
        $this->dispachPluginsHooks();

        // Load application components.
        $this->requireComponents();
    }

    /**
     * Add theme support for essential stuff
     * that are not included by default.
     *
     * @return void
     */
    protected function addSupport()
    {
        Support::add([
            /**
             * Add support for head <title> tag.
             *
             * @see https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
             */
            'title-tag' => true,

            /**
             * Add support for posts thumbnails.
             *
             * @see https://developer.wordpress.org/reference/functions/add_theme_support/#post-thumbnails
             */
            'post-thumbnails' => true,

            /**
             * Add support for post formats types.
             *
             * @see https://developer.wordpress.org/reference/functions/add_theme_support/#post-formats
             */
            'post-formats' => [],

            /**
             * Turn on HTML5 markup for Wordpress elements.
             *
             * @see https://developer.wordpress.org/reference/functions/add_theme_support/#html5
             */
            'html5' => [
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
            ],
        ]);
    }

    /**
     * Clean head from unnecessary WordPress stuff.
     *
     * @return void
     */
    protected function cleanUnnecessary()
    {
        // Hide which Wordpress version we have.
        Hook::action('wp_head', 'wp_generator')->detach();

        // Hide admin bar.
        Hook::filter('show_admin_bar', '__return_false')->dispatch();

        // Remove WP Emoji script and styles. In most
        // cases, we don't need this extra requests.
        Hook::action('wp_head', 'print_emoji_detection_script', ['piority' => 7])->detach();
        Hook::action('wp_print_styles', 'print_emoji_styles')->detach();

        // Moves jQuery Core scripts to the footer.
        Hook::action('wp_enqueue_scripts', function () {
            wp_scripts()->add_data('jquery', 'group', 1);
            wp_scripts()->add_data('jquery-core', 'group', 1);
            wp_scripts()->add_data('jquery-migrate', 'group', 1);
        })->dispatch();
    }

    /**
     * Adds various plugins hooks.
     *
     * @return void
     */
    public function dispachPluginsHooks()
    {
        Hook::filter('the_seo_framework_custom_post_type_support', '__return_empty_array')->dispatch();
    }

    /**
     * Adds post type name to the body classes.
     *
     * @return void
     */
    public function addAdditionalBodyClasses()
    {
        Hook::filter('body_class', function ($classes) {
            $posttype = get_query_var('post_type');

            if ($posttype) {
                $classes[] = get_query_var('post_type');
            }

            return $classes;
        })->dispatch();
    }

    /**
     * Load essential application components.
     *
     * @return void
     */
    protected function requireComponents()
    {
        require dirname(__DIR__) . '/Support/menus.php';

        require dirname(__DIR__) . '/Support/sidebars.php';

        require dirname(__DIR__) . '/Support/thumbnails.php';
    }
}
