<?php

namespace App\Transformers;

use App\LandingContact;
use League\Fractal\TransformerAbstract;

class LandingContactTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(LandingContact $contact)
    {
        return [
            'name' => (string) $contact->name,
            'lastname' => (string) $contact->lastname,
            'email' => (string) $contact->email,
            'created_at' => (string) $contact->created_at->format('d-m-Y H:i'),
            'actions' => [
                'show' => (string) route('landing_contacts.show', $contact),
                'delete' => (string) route('landing_contacts.destroy', $contact)
            ]
        ];
    }
}
