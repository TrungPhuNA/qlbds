<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class UpdateInfoController extends Controller
{
    public function edit(Request $request, $id)
    {
        $admin = Admin::find(get_data_user('admins'));
        $viewData = [
            'admin' => $admin
        ];
        return view('pages.profile.update', $viewData);
    }

    public function update(Request $request, $id)
    {
        $admin = Admin::find(get_data_user('admins'));
        $admin->phone = $request->phone;
        $admin->save();
        return redirect()->back();
    }
}
