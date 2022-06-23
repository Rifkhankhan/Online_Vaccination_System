<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

class MOHController extends Controller
{
    public function home()
    {
        return view('moh.body.smartvaccination');
    }

    public function personHistory()
    {
        return view('moh.body.personhistory');
    }

    public function announcement()
    {
        return view('moh.body.announcement');
    }


    public function reports()
    {
        return view('moh.body.report');
    }
}
