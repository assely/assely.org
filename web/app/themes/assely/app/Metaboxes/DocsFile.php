<?php

namespace App\Metaboxes;

use Assely\Metabox\Metabox;
use Field;

class DocsFile extends Metabox
{
    /**
     * Metabox slug.
     *
     * @var string
     */
    public $slug = 'docs_file';

    /**
     * Describe metabox relationships.
     *
     * @return self
     */
    public function relation()
    {
        return $this->belongsTo(['App\Posttypes\Docs']);
    }

    /**
     * Metabox arguments.
     *
     * @return array
     */
    public function arguments()
    {
        return [
            'title' => ['Documentation file'],
        ];
    }

    /**
     * Register metabox custom fields.
     *
     * @return \Assely\Field\Field[]
     */
    public function fields()
    {
        return [
            Field::text('url', [
                'description' => 'Url should points to the Markdown file.',
            ])->validate(['required', 'type:url']),
        ];
    }
}
