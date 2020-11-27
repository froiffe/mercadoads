<?php

namespace App\Transformers;

use App\Page;
use League\Fractal\TransformerAbstract;

class PageTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Page $page)
    {
        return [
            'name' => (string) $page->name,
            'actions' => [
                'edit' => (string) route('pages.edit', $page),
                'delete' => (string) route('pages.destroy', $page)
            ]
        ];
    }
}
