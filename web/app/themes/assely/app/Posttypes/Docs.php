<?php

namespace App\Posttypes;

use Assely\Posttype\Posttype;
use Column;
use Hook;
use View;
use Post;

class Docs extends Posttype
{
    /**
     * Posttype slug.
     *
     * @var string
     */
    public $slug = 'docs';

    /**
     * Construct posttype.
     */
    public function __construct()
    {
        $this->disableAutoParagraphs();

        $this->registerAlertShortcode();
        $this->registerAttachmentShortcode();
    }

    /**
     * Posttype arguments.
     *
     * @return array
     */
    public function arguments()
    {
        return [
            'title' => ['Documentation', 'Documentations'],
            'supports' => ['title', 'page-attributes'],
        ];
    }

    /**
     * Specify columns of the posttype posts list.
     *
     * @return \Assely\Column\Column[]
     */
    public function columns()
    {
        return [
            Column::metabox('App\Metaboxes\DocsFile', 'url'),
        ];
    }

    /**
     * @return mixed
     */
    public function disableAutoParagraphs()
    {
        Hook::filter('the_content', function ($content) {
            if (get_post_type() == $this->slug) {
                Hook::filter('the_content', 'wpautop')->detach();
            }

            return $content;
        })->dispatch();
    }

    /**
     * @return mixed
     */
    public function registerAlertShortcode()
    {
        add_shortcode('alert', function ($attributes, $content) {
            $atts = shortcode_atts([
                'type' => 'info',
            ], $attributes);

            ob_start();

            echo View::make('shortcode.alert', [
                'type' => esc_attr(str_replace('&quot;', '', $atts['type'])),
                'content' => $content,
            ]);

            return ob_get_clean();
        });
    }

    /**
     * @return mixed
     */
    public function registerAttachmentShortcode()
    {
        add_shortcode('attachment', function ($attributes, $content) {
            $atts = shortcode_atts([
                'slug' => null,
                'alt' => ''
            ], $attributes);

            $attachments = Post::type('attachment')->query([
                'name' => sanitize_title($atts['slug']),
                'posts_per_page' => 1,
            ]);
            if (! $attachments->isEmpty()) {
                $attachment_id = $attachments->first()->id;

                ob_start();

                echo View::make('shortcode.attachment', [
                    'link' => wp_get_attachment_url($attachment_id),
                    'alt' => htmlspecialchars($atts['alt'])
                ]);

                return ob_get_clean();
            }
        });
    }
}
