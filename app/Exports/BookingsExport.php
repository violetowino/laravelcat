<?php

namespace App\Exports;

use App\Models\Booking;
use Maatwebsite\Excel\Concerns\FromCollection;

class BookingsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Booking::select('id_number', 'name', 'phone', 'number_plate', 'user_id', 'space_id')->get();
    }

    public function headings(): array
    {
        return [
            'ID Number',
            'Name',
            'Phone',
            'Number Plate',
            'User Id',
            'Space Id'
        ];
    }
}
