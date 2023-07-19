<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    private $doctor;
    public function add ()
    {
        return view('admin.doctor.add');
    }
    public function create (Request $request)
    {
        Doctor::createDoctor($request);
        return back()->with('success', 'Doctor Added Successfully');

    }
    public function manage ()
    {
        return view('admin.doctor.manage',[
            'doctors' => Doctor::all()
        ]);
    }
    public function manageappointments()
    {
        return view('admin.appointments.manage',[
            'appoints' => Appointment::all()
        ]);
    }
    public function delete($id)
    {
        $this->doctor = Doctor::find($id);
        if (file_exists($this->doctor->image))
        {
            unlink($this->doctor->image);
        }
        $this->doctor->delete();
        return redirect()->back()->with('success', 'Delete');
    }
    public function edit ($id)
    {
        $this->doctor = Doctor::find($id);
        return view('admin.doctor.edit', [
            'doctor' =>$this->doctor
            ]);
    }
    public function update (Request $request, $id)
    {
        Doctor::updateDoctor($request, $id);
        return redirect()->route('doctor.add')->with('success', 'Doctor Updated Successfully');

    }
}
