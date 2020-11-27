<?php

namespace App\Exports;

use App\Contact;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ContactsExport implements FromQuery, WithHeadings
{
    public function query()
    {
        return Contact::query()->orderBy('created_at', 'ASC')->select('locale','form','name','email','business','country','investment','message','created_at');
    }

    public function headings(): array
    {
        return ['Página', 'Formulario', 'Nombre', 'Email', 'Empresa', 'País', 'Inversión', 'Mensaje', 'Fecha y hora'];
    }
}
