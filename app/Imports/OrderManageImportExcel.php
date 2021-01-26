<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class OrderManageImportExcel implements ToCollection
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $key => $row)
        {
            if($key == 0 ) continue;
            $this->processOrderManage($row);
        }
    }

    protected function processOrderManage($orderManage)
    {
        dd($orderManage);
    }

    protected function getByCode($code)
    {

    }
}
