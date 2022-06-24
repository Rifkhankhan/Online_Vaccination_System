<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use DB;

use App\Models\RequestCertificate;
use App\Models\VaccinationHistory;
use App\Models\VaccinationAnnouncment;

class MOHController extends Controller
{
    public function home()
    {
        $lists = DB::table('requestcertificate')
                    ->join('users','users.id','requestcertificate.user_id')
                    // ->select('users.nic as nic','users.first_name as first_name','users.last_name as last_name','users.address as address',
                    // 'users.mobile as mobile','requestcertificate.email as email')
                    ->get();

        return view('moh.body.smartvaccination',compact('lists'));
    }

    public function personHistory(Request $request)
    {
        return view('moh.body.personHistory');
    }

    public function storeHistory(Request $request)
    {
        $request->validate([
            'nic'=>'required|max:10',
            'vacproduct'=>'required',
            'batchnumber'=>'required',
            'vacstatus'=>'required',
            'date'=>'required'
        ]);

        // $list = DB::table('requestcertificate')->where('nic',$request->nic);
        VaccinationHistory::insert([
            'passport'=>$request->nic,
            'date'=>$request->date,
            'vac_product'=>$request->vacproduct,
            'batch_number'=>$request->batchnumber,
            'vac_status'=>$request->vacstatus,
            'user_id'=>1
        ]);

        return redirect()->back();
    }

    public function announcement()
    {
        return view('moh.body.announcement');
    }

    public function storeAnnouncement(Request $request)
    {
        $request->validate([
            'date'=>'required',
            'age'=>'required',
            'dosage'=>'required',
            'venue'=>'required',
            'vaccine'=>'required'
        ]);

        VaccinationAnnouncment::insert([
            'date'=>$request->date,
            'vaccine'=>$request->vaccine,
            'venue'=>$request->venue,
            'age'=>$request->age,
            'dosage'=>$request->dosage
        ]);
        return redirect()->back();
    }


    public function reports()
    {
        return view('moh.body.report');
    }

    public function view($id)
    {
        $list = RequestCertificate::find($id);
        $lists = DB::table('requestcertificate')
                    ->join('users','users.id','requestcertificate.user_id')
                    ->where('users.id','=',$list->user_id)
                    ->select('users.*','requestcertificate.*')
                    ->first();
        return view('moh.body.view',compact('lists'));
    }

    public function approve(Request $request,$id)
    {
        $list  = RequestCertificate::find($id)->update([
            'status'=>'approved'
        ]);


        return redirect()->route('moh.home');
    }

    public function reject($id)
    {
        RequestCertificate::find($id)->delete();

        return redirect()->back();
    }


}
