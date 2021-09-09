<?php

namespace App\Exports;

use App\Models\Fichepaie;
use Maatwebsite\Excel\Concerns\FromCollection;

class FichepaieExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Fichepaie::all();
    }
}
