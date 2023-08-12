<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;

class ManagersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'name'      => $row[0],
            'id_number'   => $row[1],
            'email'    => $row[2], 
            'phone'    => $row[3],
            'duty_station'  => $row[4],
        ]);
    }
}
