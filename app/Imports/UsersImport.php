<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
//            'name'     => $row[0],
//            'email'    => $row[1],
            'number'    => $row[2],
            'state'    => $row[3],
//            'password' => Hash::make($row[4])
        ]);
    }
    public function collection()
    {
        return User::all();
    }
}
