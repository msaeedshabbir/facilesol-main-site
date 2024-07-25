<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\TeamModel;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        return view('frontend.team', ['team'=>TeamModel::get()]);
    }
}
