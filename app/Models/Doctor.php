<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    public static $doctor , $imageFile , $imageName, $imageDirectory, $imageUrl;

    public static function createDoctor($request)
    {
        self::$imageFile = $request->File('image');
        if (self::$imageFile)
        {

            self::$imageName        = rand(10, 1000).self::$imageFile->getClientOriginalName();
            self::$imageDirectory   = 'backend/img/upload/';
            self::$imageFile->move(self::$imageDirectory, self::$imageName);
            self::$imageUrl         = self::$imageDirectory.self::$imageName;

        }


        self::$doctor                      = new Doctor();
        self::$doctor->name                = $request->name;
        self::$doctor->number              = $request->number;
        self::$doctor->speciality          = $request->speciality;
        self::$doctor->room                = $request->room;
        self::$doctor->image               = self::$imageUrl;
        self::$doctor->save();
    }
    public static function updateDoctor($request, $id)
    {
        self::$doctor                      = Doctor::find($id);

        self::$imageFile = $request->File('image');
        if (self::$imageFile)
        {
            if (file_exists(self::$doctor->image))
            {
                unlink(self::$doctor->image);
            }

            self::$imageName                = rand(10, 1000).self::$imageFile->getClientOriginalName();
            self::$imageDirectory           = 'backend/img/upload/';
            self::$imageFile->move(self::$imageDirectory, self::$imageName);
            self::$imageUrl                 = self::$imageDirectory.self::$imageName;

        }else{
           self::$imageUrl = self::$doctor->image;
        }


        self::$doctor->name                = $request->name;
        self::$doctor->number              = $request->number;
        self::$doctor->speciality          = $request->speciality;
        self::$doctor->room                = $request->room;
        self::$doctor->image               = self::$imageUrl;
        self::$doctor->save();
    }
}
