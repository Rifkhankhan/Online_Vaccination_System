<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequestCertificate;
use App\Models\User;
use App\Models\VaccinationAnnouncment;
use Auth;
class PeopleController extends Controller
{
    public function home()
    {
        return view('people.profile' );
    }

    public function announcement()
    {
        $lists = VaccinationAnnouncment::all();
        return view('people.announcement',compact('lists'));
    }

    public function smartvaccination()
    {
        return view('people.smartvaccination');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nic'=>'required|max:10',
            'name'=>'required|max:255',
            'age'=>'required',
            'email'=>'required|email'
        ]);


        // $brand_image = $request->file('file');
        // $name_gen = hexdec(uniqid());
        // $image_extendtion = strtolower($brand_image->getClientOriginalExtension());
        // $image_name = $name_gen.'.'.$image_extendtion;
        // $up_location = 'public/image/';
        // $last_img = $up_location.($name_gen.'.'.$image_extendtion);
        // // $brand_image->move($up_location,$image_name);

        $list = RequestCertificate::find($request->nic);

        RequestCertificate::insert([
            'user_id'=>$list->user_id,
            'nic'=>$request->nic,
            'status'=>'request',
            'name'=>$request->name,
            'age'=>$request->age,
            'email'=>$request->email
        ]);


        return redirect()->route('people.smartvaccination')->with('success','Request Sent Successfully');
    }

}
