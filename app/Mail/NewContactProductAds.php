<?php

namespace App\Mail;

use App\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewContactProductAds extends Mailable
{
    use Queueable, SerializesModels;

    private $contact;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $view = ($this->data['country'] != 'Otro') ? 'emails.contacts.product-ads' : 'emails.contacts.product-ads-otros';
        return $this->view($view)
            ->from('no-reply@mercadoads.webar.net', trans('contact/general.emails.product-ads.from-name'))
            ->subject(trans('contact/general.emails.product-ads.subject'))
            ->with('data', $this->data);
    }
}
