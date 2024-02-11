<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.contact');
    }

    public function submitMessage(Request $request)
    {
        // echo "<pre>";
        // print_r($request -> all());
        // echo "</pre>";

        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'subject' => 'required',
                'message' => 'required'
            ]
            );

    }
}
