<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\Projects;

class AdminProjectsController extends Controller
{
    public function index()
    {
        return view('backend.projects', ['project'=>Projects::get()]);
    }
}
