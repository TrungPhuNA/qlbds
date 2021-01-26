<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estate extends Model
{
    use HasFactory;

    protected $table = 'estates';
    protected $guarded = [''];

    // vị trí
    protected $position = [
        1 => 'Mặt tiền',
        2 => 'Hẻm / ngõ ',
        3 => 'đường nội bộ',
    ];

    // Đặc điểm vị trí
    protected $positionType = [
        1 => 'mặt đường',
        2 => 'góc mặt đường',
        3 => 'mặt đường',
        4 => 'mặt đường trước sau',
        5 => 'ngay vòng xoay',
    ];

    // Đường trước nhà Road in front of the house
    protected $roadInFrontOfTheHouse = [
        1 => 'hẻm xe máy',
        2 => 'hẻm xe ba gác',
        3 => 'hẻm xe hơi',
        4 => 'hẻm xe tải',
        5 => 'hẻm 2 oto tránh nhau',
    ];

    // Đặc điểm tuyến đường
    protected $routeCharacteristics = [
        1 => 'Phố đi bộ',
        2 => 'chuyên thời trang',
        3 => 'trục đường chính',
        4 => 'chuyên ăn uống',
        5 => 'studio áo cưới',
        6 => 'đường 1 chiều',
        7 => 'đường 2 chiều'
    ];
}
