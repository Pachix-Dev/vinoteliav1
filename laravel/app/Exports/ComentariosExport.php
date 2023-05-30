<?php

namespace App\Exports;

use App\Models\Comentario;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ComentariosExport implements FromCollection, WithHeadings
{

    public function headings(): array
    {
        return [
            '#',
            'Nombre',
            'Email',
            'Teléfono',
            'Comentario',
            'Created At',
            'Deleted At',
        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Comentario::all();
    }
}
