<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function Illuminate\Session\userId;

class AppointmentController extends Controller
{
    public function add()
    {
        return view('user.home.index');
    }
    public function create(Request $request)
    {
        Appointment::createAppointment($request);
        return back()->with('success','Appointment Successfull');
    }
    public function myappointment()
    {
        if (Auth::id())
        {

            return view('user.home.myappointment',[
                'appoints' => Appointment::all()
            ]);
        }
        else
        {
            return redirect()->back();
        }

    }
}
