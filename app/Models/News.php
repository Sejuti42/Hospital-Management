<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    public static $news, $imageFile, $imageDirectory, $imageName, $imageUrl, $author_imageUrl ;

    public static function createNews($request)
    {
        self::$imageFile = $request->File('image');
        if (self::$imageFile)
        {

            self::$imageName        = rand(10, 1000).self::$imageFile->getClientOriginalName();
            self::$imageDirectory   = 'backend/img/upload/';
            self::$imageFile->move(self::$imageDirectory, self::$imageName);
            self::$imageUrl         = self::$imageDirectory.self::$imageName;

        }
        self::$imageFile = $request->File('author_image');
        if (self::$imageFile)
        {

            self::$imageName        = rand(10, 1000).self::$imageFile->getClientOriginalName();
            self::$imageDirectory   = 'backend/img/upload/author';
            self::$imageFile->move(self::$imageDirectory, self::$imageName);
            self::$author_imageUrl         = self::$imageDirectory.self::$imageName;

        }
        self::$news = new News();
        self::$news->title = $request->title;
        self::$news->name = $request->name;
        self::$news->date = $request->date;
        self::$news->description = $request->description;
        self::$news->image = self::$imageUrl;
        self::$news->author_image = self::$author_imageUrl;
        self::$news->status = $request->status;
        self::$news->save();

    }
    public static function updateNews($request, $id)
    {
        self::$news = News::find($id);

        self::$imageFile = $request->File('image');
        if (self::$imageFile)
        {
            if (file_exists(self::$news->image))
            {
                unlink(self::$news->image);
            }

            self::$imageName        = rand(10, 1000).self::$imageFile->getClientOriginalName();
            self::$imageDirectory   = 'backend/img/upload/';
            self::$imageFile->move(self::$imageDirectory, self::$imageName);
            self::$imageUrl         = self::$imageDirectory.self::$imageName;

        }else{

            self::$imageUrl = self::$news->image;
        }


        self::$news->title = $request->title;
        self::$news->name = $request->name;
        self::$news->date = $request->date;
        self::$news->description = $request->description;
        self::$news->image = self::$imageUrl;
        self::$news->author_image = self::$author_imageUrl;
        self::$news->status = $request->status;
        self::$news->save();

    }

}
