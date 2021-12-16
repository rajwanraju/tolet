<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\post;

class SearchController extends Controller
{


    public function search(Request $request){

 $search = \Request::get('search');




    $searchFlats = post::where('SubArea','like','%'.$search.'%')
                        -> orwhere('rent','LIKE','%'.$request->search.'%')
	                               ->orwhere('area','LIKE','%'.$request->search.'%')
	                               ->orwhere('category','LIKE','%'.$request->search.'%')
	                               ->orwhere('flatType','LIKE','%'.$request->search.'%')
	                               ->orwhere('title','LIKE','%'.$request->search.'%')

        ->paginate(9);
 
    return view('frontEnd.search.searchContant',compact('searchFlats'));

}

/*


	$searchFlats=post::where('SubArea','LIKE','%',$request->search,'%')
	                               ->orwhere('area','LIKE','%',$request->search,'%')
	                               ->orwhere('category','LIKE','%',$request->search,'%')
	                               ->orwhere('flatType','LIKE','%',$request->search,'%')
	                               ->orwhere('title','LIKE','%',$request->search,'%')->get();



 



return view('frontEnd.search.searchContent', ['searchFlats' => $searchFlats]);









public function searchPost(Request $request){


$search = $request->search;
$searchFlats = DB::table('posts')->where('SubArea','LIKE','%'.$search.'%');
  return view('frontEnd.search.searchContent',  ['name'=>'Result: '.$search],compact('searchFlats'));

	
}


*/



}
