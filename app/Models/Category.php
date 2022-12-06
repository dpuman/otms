<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public static $image,$imagePath,$imageDirectory,$imageExtension,$category;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageExtension = self::$image->getClientOriginalExtension();
        self::$imagePath = time().'.'.self::$imageExtension;
        self::$imageDirectory = 'admin/assets/images/category-images/';
        self::$image->move(self::$imageDirectory, self::$imagePath );

        return self::$imageDirectory.self::$imagePath;
    }

    public static function createCategory($request){

        self::$category = new Category();
        self::$category->name = $request->name;
        self::$category->description = $request->description;
        self::$category->image = self::getImageUrl($request);
        self::$category->status = $request->status;

        self::$category->save();
    }

    public static function updateCategory($request,$id)
    {
        self::$category =Category::find($id);
        if($request->file('image')){
            if(file_exists(self::$category->image)){
                unlink(self::$category->image);
            }
            self::$image = self::getImageUrl($request);
        }
        else{
            self::$image = self::$category->image;
        }

        self::$category->name = $request->name;
        self::$category->description = $request->description;
        self::$category->image = self::$image;
        self::$category->status = $request->status;

        self::$category->save();
    }

    public static function deleteCategory($id)
    {
        self::$category = Category::find($id);
        if(file_exists(self::$category->image))
        {
            unlink(self::$category->image);
        }
        self::$category->delete();
    }
}
