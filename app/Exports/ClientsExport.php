<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ClientsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::where('role', 'user')->select('name', 'id_number', 'email', 'phone', 'address')->get();
    }

    public function headings(): array
    {
        return [
            'Name',
            'ID Number',
            'Email',
            'Phone',
            'Address',
            
        ];
    }
}
