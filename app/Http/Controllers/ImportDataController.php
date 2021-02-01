<?php

namespace App\Http\Controllers;

use App\Imports\OrderManageImportExcel;
use App\Imports\UserImportExcel;
use App\Models\OrderManagement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ImportDataController extends Controller
{
    /**
     * @return
     * Form  hiển thị import data
     */
    public function formImport()
    {
        return view('pages.import.index');
    }

    public function processImport(Request $request)
    {
        \Excel::import(new OrderManageImportExcel(), request()->file('file'));
    }
}
