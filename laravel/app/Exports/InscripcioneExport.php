<?php

namespace App\Exports;

use App\Models\Inscripcione;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class InscripcioneExport implements FromCollection, WithHeadings
{

    public function headings(): array
    {
        return [
            '#',
            'Curso',
            'Nombre',
            'Edad',
            'Direccion',
            '¿Cómo te enteraste de nosotros?',
            'Email',
            'Teléfono',
        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Inscripcione::all();
    }
}
