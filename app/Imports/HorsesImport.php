<?php

namespace App\Imports;

use App\Horse;
use Maatwebsite\Excel\Concerns\ToModel;

class HorsesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Horse([
            'breed_id'      => $row[1],
            'horse_name'    => $row[2] ,
            'gender'        => $row[3],
            'birthday'      => $row[4],
            'color'         => $row[5],
            'sire'          => $row[6],
            'dam'           => $row[7],
            'broodmare_sire'=> $row[8],
            'breeding_farm' => $row[9],
        ]);
    }
}
