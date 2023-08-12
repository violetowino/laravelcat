<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ManagersExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::where('role', 'manager')->select('name', 'id_number', 'email', 'phone', 'duty_station')->get();
    }

    public function headings(): array
    {
        return [
            'Name',
            'ID Number',
            'Email',
            'Phone',
            'Duty Station',
            
        ];
    }
}
