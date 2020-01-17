<?php

namespace App\Exports;

use App\Horse;
use Maatwebsite\Excel\Concerns\FromCollection;

class HorsesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Horse::all();
    }
}
