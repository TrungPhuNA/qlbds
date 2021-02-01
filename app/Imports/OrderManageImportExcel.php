<?php

namespace App\Imports;

use App\Models\OrderManagement;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\ToCollection;

class OrderManageImportExcel implements ToCollection
{
    protected $code = null;
    public function collection(Collection $rows)
    {
        foreach ($rows as $key => $row) {
            if ($key == 0) continue;
            $this->setCode($row);
            $this->processOrderManage($row);
        }
    }

    protected function processOrderManage($orderManage)
    {
        try{
            $orderManage = $this->mapColumn($orderManage);
            OrderManagement::updateOrCreate($orderManage);
        }catch (\Exception $exception)
        {
            Log::error($exception->getMessage());
        }
    }

    protected function setCode($orderManage)
    {
        $this->code = $orderManage[8];
    }

    protected function mapColumn($orderManage)
    {
        return [
            'om_name'                      => $orderManage[0],
            'om_phone'                     => $orderManage[1],
            'om_receiver_address'          => $orderManage[2],
            'om_receiver_province_address' => $orderManage[3],
            'om_receiver_city_address'     => $orderManage[4],
            'om_receiver_barangay'         => $orderManage[5],
            'om_product_description'       => $orderManage[6],
            'om_price'                     => $orderManage[7],
            'om_status'                    => $orderManage[11],
            'om_status_text'               => $orderManage[10],
            'om_awb'                       => $orderManage[8],
            'om_name_shop'                 => $orderManage[9],
            'om_admin_id'                  => 1,
        ];
    }

    protected function getByCode($code)
    {

    }
}
