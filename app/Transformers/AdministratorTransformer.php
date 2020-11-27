<?php

namespace App\Transformers;

use App\Administrator;
use League\Fractal\TransformerAbstract;

class AdministratorTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Administrator $administrator)
    {
        return [
            'name' => (string) $administrator->name,
            'email' => (string) $administrator->email,
            'role' => (string) $administrator->roles()->first()->display_name,
            'actions' => [
                'edit' => (string) route('administrators.edit', $administrator),
                'delete' => (string) route('administrators.destroy', $administrator)
            ]
        ];
    }
}
