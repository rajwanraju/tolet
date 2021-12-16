<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
Use DB;

class HomeController extends Controller
{
    public function index(){


    	  $publishedFlats = post::orderBy('id', 'desc')
          ->Paginate(9);
          $slideShows = post::orderBy('id', 'desc')->take(5)->get();


    	 return view('frontEnd.home.homeContent', ['publishedFlats' => $publishedFlats, 'slideShows' => $slideShows]);
    }




public function slideshow(Request $request){

$slideShows = posts::orderBy('id', 'desc')->take(5)->get();
 return view('frontEnd.home.slideView', ['slideShows' => $slideShows]);
}
  
    

 public function category($id) {

        $publishedCategoryFlats = post::where('category',$id)
                ->where('publicationStatus', 1)
                ->get();

       //  dd($publishedCategoryFlats);
        return view('frontEnd.category.categoryContent', ['publishedCategoryFlats' => $publishedCategoryFlats]);
    }



 public function type($id) {

        $publishedFlatTypes = post::where('flatType',$id)
                ->where('publicationStatus', 1)
                ->get();

      // dd($publishedFlatTypes);
    return view('frontEnd.type.typeContent', ['publishedFlatTypes' => $publishedFlatTypes]);
    }



    public function flatDetails($id) {


      //  $flatById = post::where('id', $id)->first();


      



     $flatById = DB::table('posts')
                ->join('categories', 'posts.category', '=', 'categories.id')
                ->join('flat_types', 'posts.flatType', '=', 'flat_types.id')
                ->select('posts.id', 'posts.title', 'posts.flatNo', 'posts.houseNo', 'posts.roadNo', 'posts.block', 'posts.SubArea', 'posts.area','posts.phone', 'posts.rent', 'posts.gasLine', 'posts.parking', 'posts.lift', 'posts.generator', 'posts.flatDescription', 'posts.flatImage', 'posts.created_at','categories.categoryName', 'flat_types.FlatType')
                ->where('posts.id', $id)
                ->first();

  return view('frontEnd.flat.flatContent', ['flatById' => $flatById]);



        
    }
}
