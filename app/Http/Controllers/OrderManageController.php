<?php

namespace App\Http\Controllers;

use App\Models\OrderManagement;
use Illuminate\Http\Request;

class OrderManageController extends Controller
{
    public function index(Request $request)
    {
        $ordersManage = OrderManagement::orderByDesc('id')
            ->paginate(5);

        $viewData = [
            'ordersManage' => $ordersManage
        ];

        return view('pages.order_manage.index', $viewData);
    }

    public function callDataOrderManage()
    {

    }
}
