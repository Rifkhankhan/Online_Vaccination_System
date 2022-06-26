<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Str;
use Hash;
use App\Models\User;
class UserController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function checklogin(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        $user_data = [
            'email'=>$request->get('email'),
            'password'=>$request->get('password')
        ];


        if(Auth::attempt($user_data))
        {
            if(Auth::user()->role == 'admin'){
                return view('admin.home');
            }
            else if(Auth::user()->role == 'moh')
            {
                return route('moh.home');
            }
            else if(Auth::user()->role == 'people')
            {
                return route('people.home');
            }
        }
        else
        {
            return redirect()->back()-with('error','Error');
        }
    }

    public function register()
    {
        return view('auth.register');
    }

    public function storeRegister(Request $request)
    {
        $request->validate(
            [
                'moh'=>"required",
                'firstname'=>"required|max:255",
                'lastname'=>"required|max:255",
                'dob'=>"required",
                'email'=>"required|email",
                'district'=>"required|max:255",
                'username'=>"required|max:255",
                'address'=>"required|max:255",
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
            'email'=>$request->email,
            'district'=>$request->district,
            'address'=>$request->address,
            'user_name'=>$request->username,
            'genter'=>$request->genter,
            'mobile'=>$request->mobile,
            'nic'=>$request->nic,
            'role'=>$request->role,
            'password'=>Hash::make($request->password),
        ]);

        $user_data = [
            'email'=>$request->get('email'),
            'password'=>$request->get('password')
        ];

        if(Auth::attempt($user_data))
        {
            if(Auth::user()->role == 'moh')
            {
                return route('moh.home');
            }
            else if(Auth::user()->role == 'people')
            {
                return route('people.home');
            }
        }


    }

    public function login()
    {
        return view('auth.login');
    }


}
