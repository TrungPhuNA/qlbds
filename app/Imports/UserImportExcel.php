<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;

class UserImportExcel implements ToCollection
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row)
        {
            dd($row);
        }
    }
}
