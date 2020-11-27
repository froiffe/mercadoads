<?php

namespace App\Exports;

use App\LandingContact;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class LandingContactsExport implements FromQuery, WithHeadings
{
    public function query()
    {
        return LandingContact::query()->orderBy('created_at', 'ASC')->select('locale','form','name','lastname','email','created_at');
    }

    public function headings(): array
    {
        return ['Página', 'Formulario', 'Nombre', 'Apellido', 'Email', 'Fecha y hora'];
    }
}
