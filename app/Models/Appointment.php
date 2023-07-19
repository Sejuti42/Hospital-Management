<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Appointment extends Model
{
    use HasFactory;

    public static $appointment;

    public static function createAppointment($request)
    {
        self::$appointment = new Appointment();
        self::$appointment->name = $request->name;
        self::$appointment->email = $request->email;
        self::$appointment->date = $request->date;
        self::$appointment->doctor = $request->doctor;
        self::$appointment->phone = $request->phone;
        self::$appointment->message = $request->message;
        self::$appointment->status = 'In Progress';

        if (Auth::id())
        {
            self::$appointment->user_id = Auth::user()->id;
        }
        self::$appointment->save();


    }
}
