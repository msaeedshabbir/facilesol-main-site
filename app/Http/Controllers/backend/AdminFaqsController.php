<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\FAQs;
use Illuminate\Http\Request;

class AdminFaqsController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.faq');
    }


    public function addFAQ()
    {
        return view('backend.faq-add');
    }


    public function submitFaqRecord(Request $request)
    {
        $request->validate(
            [
                'question' => 'required',
                'answer' => 'required'
            ]
            );
        $FAQ_STATUS = 1;
        $faqs = new FAQs();
        $faqs->question = $request->question;
        $faqs->answer = $request->answer;
        $faqs->status = $FAQ_STATUS;
        $faqs->save();
        return back()->withSuccess('FAQ Record Added Successfully');
    }


    public function showAdminRecord()
    {

        // $admins = Admins::all();

        // Calling the helper function for testing data
        // testData($admins);

    //     echo "<pre>";
    //     print_r($admins->toArray()); //toArry runs only when we have some data in DB
    //    echo  "</pre>";
    //     die;
        // $data = compact('admins');
        // return view('backend/admins-list')->with($data);

    }

        /**
     * Remove the specified resource from storage.
     */
    public function deleteAdminRecord(string $id)
    {
        // $data  = Admins::find($id);
        // if(!is_null($data)){
        //     $data->delete();
        // }
        // $data = compact('admins');
        // return view('backend/admins-list')->with($data);


    }

    public function editAdminRecord($id)
    {

        // $data  = Admins::find($id);
        // if(is_null($data)){
        //     return view('backend.admins-list');
        // } else {
        //     $url = url('/admin/update') . "/" . $id;
        //     $data = compact('admins', 'url');
        //     return view('backend.admin-add')->with($data);
        // }

    }
}
