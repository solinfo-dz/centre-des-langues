<?php

namespace App\Exports;

use App\Models\Client;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportClient implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Client::all()->makeHidden(['created_at','updated_at' ]);
    }

    public function headings(): array

    {

        return [

            'Id',

            'N=° quittance',

            'Nom',

            'Prénom',

            'Wilaya',

            'DD naissance',
            'Commune',

            'Nationnalité',

            'Tel',

            'Email',

            'Horaire choisit',

            'Qualité condidat',
            'Faculté',

            'Département',

            'photo',

            'langue choisit',

            'Profession',

            'الاسم',
            'اللقب',

            'الولاية',

            'البلدبة',

            'الجنسية',
            'المهنة',

            'التوقيت المختار',

            


        ];

    }
}
