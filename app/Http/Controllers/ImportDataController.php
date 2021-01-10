<?php

namespace App\Http\Controllers;

use App\Imports\UserImportExcel;
use Illuminate\Http\Request;

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
        \Excel::import(new UserImportExcel(), request()->file('file'));
    }
}
