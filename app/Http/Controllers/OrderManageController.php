<?php

namespace App\Http\Controllers;

use App\Models\OrderManagement;
use Illuminate\Http\Request;

class OrderManageController extends Controller
{
    public function index()
    {
        $orders   = OrderManagement::orderByDesc('id')->paginate(20);

        $viewData = [
            'orders' => $orders
        ];

        return view('pages.order_manage.index', $viewData);
    }
}
