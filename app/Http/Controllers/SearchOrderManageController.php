<?php

namespace App\Http\Controllers;

use App\Models\OrderManagement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SearchOrderManageController extends Controller
{
    public function index(Request $request)
    {
        $code      = $request->code;
        $order     = OrderManagement::where('om_awb', $code);
        if($request->name_shop)
            $order->where('om_shop_id', $request->name_shop);

        $order = $order->first();

        $getStatus = (new OrderManagement())->setStatus;

        $viewData = [
            'order'     => $order,
            'getStatus' => $getStatus
        ];

        return view('pages.search.index', $viewData);
    }

    public function searchOrderManage(Request $request)
    {
        if ($request->ajax()) {
            $code      = $request->code;
            $order     = OrderManagement::where('om_awb', $code)->first();
            $getStatus = (new OrderManagement())->setStatus;
            $html      = view('components.result_search', [
                'order'     => $order,
                'getStatus' => $getStatus])
                ->render();
            return response()->json($html);
        }
    }
}
