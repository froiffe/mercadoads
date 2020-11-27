<?php

namespace App\Transformers;

use App\Solution;
use League\Fractal\TransformerAbstract;

class SolutionTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Solution $solution)
    {
        return [
            'category' => (string) $solution->category,
            'slug_es' => (string) $solution->{'slug:es'},
            'slug_pt' => (string) $solution->{'slug:pt'},
            'title_es' => (string) $solution->{'title:es'},
            'title_pt' => (string) $solution->{'title:pt'},
            'actions' => [
                'edit' => (string) route('solutions.edit', $solution),
                'delete' => (string) route('solutions.destroy', $solution)
            ]
        ];
    }
}
