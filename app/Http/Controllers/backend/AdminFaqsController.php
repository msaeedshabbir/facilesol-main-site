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
        return view('backend.faq', ['faqs'=>FAQs::get()]);

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


    public function showFAQs()
    {

         $faqs = FAQs::all();
            dd($faqs);

    //     echo "<pre>";
    //     print_r($admins->toArray()); //toArry runs only when we have some data in DB
    //    echo  "</pre>";
    //     die;
        // $data = compact('admins');
        // return view('backend/admins-list')->with($data);

    }

    public function deleteFAQ($id)
    {
        $team = FAQs::where('id', $id)->first();
        $team->delete();
        return back()->withSuccess('Member Record Deleted Successfully');
    }

    public function updateFAQ(){


    }

}
