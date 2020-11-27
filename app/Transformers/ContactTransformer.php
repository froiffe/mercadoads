<?php

namespace App\Transformers;

use App\Contact;
use League\Fractal\TransformerAbstract;

class ContactTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Contact $contact)
    {
        return [
            'name' => (string) $contact->name,
            'lastname' => (string) $contact->lastname,
            'email' => (string) $contact->email,
            'created_at' => (string) $contact->created_at->format('d-m-Y H:i'),
            'actions' => [
                'show' => (string) route('contacts.show', $contact),
                'delete' => (string) route('contacts.destroy', $contact)
            ]
        ];
    }
}
