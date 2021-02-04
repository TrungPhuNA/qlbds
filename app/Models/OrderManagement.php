<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class OrderManagement extends Model
{
    use HasFactory;

    protected $table = 'orders_management';
    protected $guarded = [''];

    const STATUS_WAIT        = 1;
    const STATUS_UPLOAD      = 2;
    const STATUS_TRANSPORTED = 3;
    const STATUS_SUCCESS     = 4;
    const STATUS_COMPLETE    = 5;

    public $setStatus = [
        self::STATUS_WAIT => [
            'name' => 'Wait for entry',
            'class' => ''
        ],
        self::STATUS_UPLOAD => [
            'name' => 'Uploaded',
            'class' => ''
        ],
        self::STATUS_TRANSPORTED => [
            'name' => 'Being transported',
            'class' => ''
        ],
        self::STATUS_SUCCESS => [
            'name' => 'Success',
            'class' => ''
        ],
        self::STATUS_COMPLETE => [
            'name' => 'Complete',
            'class' => ''
        ],
    ];

    public function getStatus()
    {
        return Arr::get($this->setStatus, $this->om_status,[]);
    }
}
