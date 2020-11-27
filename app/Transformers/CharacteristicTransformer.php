<?php

namespace App\Transformers;

use App\Characteristic;
use League\Fractal\TransformerAbstract;

class CharacteristicTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Characteristic $characteristic)
    {
        return [
            'key' => (string) $characteristic->key,
            'title_es' => (string) $characteristic->{'title:es'},
            'title_pt' => (string) $characteristic->{'title:pt'},
            'position' => (string) $characteristic->position,
            'actions' => [
                'edit' => (string) route('characteristics.edit', $characteristic),
                'delete' => (string) route('characteristics.destroy', $characteristic)
            ]
        ];
    }
}
