<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index()
    {
        return view('user.home.index', [
            'doctors' => Doctor::all(),
            'allnews' => News::where('status',1)->get()
        ]);
    }
    public function about()
    {
        return view('user.includes.about',[
            'doctors' => Doctor::all(),
            'allnews' => News::where('status',1)->get()
        ]);
    }
    public function doctors()
    {
        return view('user.includes.doctors',[
            'doctors' => Doctor::all(),
            'allnews' => News::where('status',1)->get()
        ]);
    }
    public function news()
    {
        return view('user.news.blog',[
            'allnews' => News::where('status',1)->get()
        ]);
    }
    public function blogdetails($id)
    {
        return view('user.news.details',[
            'news' => News::find($id)
        ]);
    }
    public function contact()
    {
        return view('user.includes.contact');
    }
    public function dashboard()
    {
        return view('admin.dashboard.home');
    }

    public function redirect()
    {
        if (Auth::id())
        {
            if (Auth::user()->usertype=='0')
            {
                return view('user.home.index',[
                    'doctors' => Doctor::all(),
                    'allnews' => News::where('status',1)->get()
                ]);
            }

            else
            {
                return view('admin.dashboard.home');
            }
        }
        else
        {
            return redirect()->back();
        }
    }




}
