<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    private $news;
    public function addnews()
    {
        return view('admin.news.add');
    }
    public function createnews (Request $request)
    {
        News::createNews($request);
        return back()->with('success', 'News Added Successfully');

    }
    public function managenews()
    {
        return view('admin.news.manage',[
        'allnews' => News::all()
        ]);
    }

    public function deletenews($id)
    {
       $this->news = News::find($id);
       if (file_exists($this->news->image))
       {
           unlink($this->news->image);
       }
       $this->news->delete();
       return redirect()->back()->with('success', 'Delete');
    }
    public function editnews ($id)
    {
        $this->news = News::find($id);
        return view('admin.news.edit',[ 'news' =>$this->news]);
    }
    public function updatenews (Request $request, $id)
    {
        News::updateNews($request, $id);
        return redirect()->route('add.news')->with('success', 'News Updated Successfully');

    }


}
