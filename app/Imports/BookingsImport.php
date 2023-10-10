<?php

namespace App\Imports;

use App\Models\Booking;
use Maatwebsite\Excel\Concerns\ToModel;

class BookingsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Booking([
            'id_number'     => $row[0],
            'name'    => $row[1], 
            'phone'    => $row[2],
            'number_plate' => $row[3],
            'user_id' => $row[4],
            'space_id' => $row[5],
        ]);
    }
}
