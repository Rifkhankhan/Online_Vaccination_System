<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Validator;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Hash;
class AdminController extends Controller
{
    public function home()
    {

        $mohUsers = User::where('role','moh')->get();
        // $mohUsers = User::all();
        return view('admin.listmoh',compact('mohUsers'));
    }

    public function createmoh()
    {
        return view('admin.createmoh');
    }

    public function store(Request $request)
    {
        $request->validate(
            [

                'moh'=>"required",
                'firstname'=>"required|max:255",
                'lastname'=>"required|max:255",
                'dob'=>"required",
                'district'=>"required|max:255",
                'username'=>"required|max:255",
                'genter'=>"required|max:255",
                'mobile'=>"required|max:11",
                'nic'=>"required|max:11",
                'password'=>"required|max:255",
            ]
        );

        User::insert([
            'moh_id'=> Str::random(20),
            'moh'=>$request->moh,
            'first_name'=>$request->firstname,
            'last_name'=>$request->lastname,
            'DOB'=>$request->dob,
            'district'=>$request->district,
            'address'=>$request->address,
            'user_name'=>$request->username,
            'genter'=>$request->genter,
            'mobile'=>$request->mobile,
            'nic'=>$request->nic,
            'role'=>$request->role,
            'password'=>Hash::make($request->password),
        ]);


        return redirect()->route('admin.home')->with('success','MOH Inserted Successfully');

    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return view('welcome');
    }
}
