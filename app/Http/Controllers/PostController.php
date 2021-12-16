<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\post;
use App\Category;
use App\FlatType;
use App\PostDetails;
use DB;

class PostController extends Controller
{
    public function index(){

         $categories = Category::where('publicationStatus', 1)->get();
        $FlatTypes = FlatType::where('publicationStatus', 1)->get();


    	return view ('frontEnd.post.createPost', ['categories' => $categories, 'FlatTypes' => $FlatTypes]);
    }



public function storePost(Request $request){
	$this->validate($request,['title'=>'required','flatNo'=>'required',
		'houseNo'=>'required','roadNo'=>'required',
		'block'=>'required','SubArea'=>'required',
		'area'=>'required','phone'=>'required',
		]);

   $flatImage = $request->file('flatImage');
        $name = $flatImage->getClientOriginalName();
        $uploadPath = 'public/flatImage/';
        $flatImage->move($uploadPath, $name);
        $imageUrl = $uploadPath . $name;
       // $this->saveFlatInfo($request, $imageUrl);
       


        $flat = new post();
        $flat->title = $request->title;
        $flat->flatNo = $request->flatNo;
        $flat->houseNo = $request->houseNo;
        $flat->roadNo = $request->roadNo;
        $flat->block = $request->block;
        $flat->SubArea = $request->SubArea;
        $flat->area = $request->area;
        $flat->phone = $request->phone;
        $flat->rent = $request->rent;
        $flat->category = $request->category;
        $flat->flatType = $request->flatType;
        $flat->gasLine = $request->gasLine;
        $flat->parking = $request->parking;
        $flat->lift = $request->lift;
        $flat->generator = $request->generator;
        $flat->flatDescription = $request->flatDescription;
        $flat->flatImage = $imageUrl;
        $flat->publicationStatus = $request->publicationStatus;
       
        $flat->save();

//return View::make('profile')->with($data);

        return view('frontEnd.map.setMap', ['flat' => $flat]);


       // return view('Country.List')->with('flat', json_decode($flat));


     //  $id = post::find($flat->id);

      // $this-> createLocationView($id);
       //  return view('frontEndmap.setMap',['flat'];

         // Redirect::route('addMap',array('flat' => $flat));
    }

//return redirect()->back();




public function postDetails(Request $request){

$postDetails =  new PostDetails();
        $postDetails->postId = $request->postId;
        $postDetails->place = $request->place;
        $postDetails->lat = $request->lat;
        $postDetails->lng = $request->lng;
        $postDetails->save();

        return view("frontEnd.home.homeContent")->with('message', 'Post Save successfully');



}













public function slideshow(Request $request){

$slideShows = posts::orderBy('id', 'desc')->take(5)->get();
 return view('frontEnd.home.slideView', ['slideShows' => $slideShows]);
}
  
  public function getLocation($id)
  {

$SubAreas = post::where( 'id',$id)
                ->get();
return view('laramap',['SubAreas' => $SubAreas]);



  }


  public function createLocationView(){

//$postId = post::where( 'id',$id);
return view('frontEnd.map.setMap');

  }


}
