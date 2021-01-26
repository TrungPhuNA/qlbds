<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $admins = Admin::all();
        $viewData = [
            'admins' => $admins
        ];
        return view('pages.admin.index', $viewData);
    }

    public function create()
    {
        return view('pages.admin.create');
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');
        $data['password'] = bcrypt($request->password);
        $data['created_at'] = Carbon::now();
        $id = Admin::insertGetId($data);
        return redirect()->route('get.admin.index');
    }

    public function edit($id)
    {
        $admin = Admin::find($id);
        return view('pages.admin.update', compact('admin'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->except('_token', 'password');
        if($request->password)
            $data['password'] = bcrypt($request->password);

        $data['updated_at'] = Carbon::now();
        Admin::find($id)->update($data);
        return redirect()->route('get.admin.index');
    }
}
