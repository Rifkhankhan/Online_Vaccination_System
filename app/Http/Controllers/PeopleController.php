<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function home()
    {
        return view('people.smartvaccination');
    }

    public function announcement()
    {
        return view('people.announcement');
    }

    public function smartvaccination()
    {
        return view('people.smartvaccination');
    }

}
