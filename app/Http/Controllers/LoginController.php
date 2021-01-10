<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminLoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * @return
     * form login admin
     */
    public function login()
    {
        return view('pages.auth.login');
    }

    /**
     * @param AdminLoginRequest $request
     * @return \Illuminate\Http\RedirectResponse
     * Đăng nhập
     */
    public function postLogin(AdminLoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (\Auth::guard('admins')->attempt($credentials)) {
            return redirect()->route('get.home');
        }

        return  redirect()->back();
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     * Đăng xuất
     */
    public function logout()
    {
        \Auth::logout();
        return redirect()->route('get.login');
    }
}
