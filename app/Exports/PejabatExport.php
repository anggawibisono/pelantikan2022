<?php

namespace App\Exports;

use App\Models\Pejabat;
use Maatwebsite\Excel\Concerns\FromCollection;

class PejabatExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pejabat::all();
    }
}
