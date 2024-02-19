<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\Admins;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{

    public function index()
    {
        return view('backend.login');
    }

    public function onLogin(Request $request)
    {

        $admin = Admins::where('email', $request->input('email'))->where('password', $request->input('password'))->first();
        if($admin){
            session()->put('id', $admin->id);
            session()->put('id', $admin->id);
            return redirect('admin/')->with('succes', 'Login Success');

        } else {
            return redirect('login')->with('error', 'Invalid Credentials.')
        }

    }



}
