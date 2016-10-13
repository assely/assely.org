<?php

namespace App\Taxonomies;

use Assely\Taxonomy\Taxonomy;

class DocsSections extends Taxonomy
{
    /**
     * Taxonomy slug.
     *
     * @var string
     */
    public $slug = 'docs_sections';

    /**
     * Describe taxonomy relationships.
     *
     * @return self
     */
    public function relation()
    {
        return $this->belongsTo(['App\Posttypes\Docs']);
    }

    /**
     * Taxonomy arguments.
     *
     * @return array
     */
    public function arguments()
    {
        return [
            'title' => ['Section', 'Sections'],
            'rewrite' => false,
        ];
    }

    /**
     * Register taxonomy custom fields.
     *
     * @return \Assely\Field\Field[]
     */
    public function fields()
    {
        return [
            //
        ];
    }

    /**
     * Specify columns of the taxonomy terms list.
     *
     * @return \Assely\Column\Column[]
     */
    public function columns()
    {
        return [
            //
        ];
    }
}
