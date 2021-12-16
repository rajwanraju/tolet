<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\FlatType;

class AddPostController extends Controller
{
   public function createPost(){

   	 $categories = Category::where('publicationStatus', 1)->get();
        $FlatTypes = FlatType::where('publicationStatus', 1)->get();

     return view('post.createPost', ['categories' => $categories, 'FlatTypes' => $FlatTypes]);
    }
}
