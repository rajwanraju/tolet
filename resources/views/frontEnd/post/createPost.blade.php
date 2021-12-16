@extends('frontEnd.master')
@section('title')

  To-Let Sheba

@endsection

@section('mainContent')

</hr>
<div class="row">
<div class="col-lg-12">
<h3 class="text-center text-success">{{Session::get('message')}}</h3>
</hr>
<div class="well">
<!--<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">-->

	
{!!Form::open(['url'=>'post/save','method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data'])!!}

   <input type="hidden" name="_token" value="{{ csrf_token() }}">
	 <div class="form-group">
<label for="" class="col-sm-2 control-label">Title</label>
<div class="col-sm-10">
<input type="text" class="form-control" name="title">



                                 <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>

</div>
</div>

  <div class="form-group">
<label for="" class="col-sm-2 control-label">Flat No</label>
<div class="col-sm-4">
<input type="text" class="form-control" name="flatNo">



                                 <span class="help-block">
                                        <strong>{{ $errors->first('flatNo') }}</strong>
                                    </span>

</div>
<label for="" class="col-sm-2 control-label">House No</label>
<div class="col-sm-4">
<input type="text" class="form-control" name="houseNo">

                                    <span class="help-block">
                                        <strong>{{ $errors->first('houseNo') }}</strong>
                                    </span>
                              
</div>
</div>




<div class="form-group">
<label for="" class="col-sm-2 control-label">Road No</label>
<div class="col-sm-4">
<input type="text" class="form-control" name="roadNo">



                                 <span class="help-block">
                                        <strong>{{ $errors->first('roadNo') }}</strong>
                                    </span>

</div>
<label for="" class="col-sm-2 control-label">Block</label>
<div class="col-sm-4">
<input type="text" class="form-control" name="block">

                                    <span class="help-block">
                                        <strong>{{ $errors->first('block') }}</strong>
                                    </span>
                              
</div>
</div>
<div class="form-group">
<label for="" class="col-sm-2 control-label">Sub Area</label>
<div class="col-sm-4">
<input type="text" class="form-control" name="SubArea">



                                 <span class="help-block">
                                        <strong>{{ $errors->first('SubArea') }}</strong>
                                    </span>

</div>
<label for="" class="col-sm-2 control-label">Area</label>
<div class="col-sm-4">
<input type="text" class="form-control" name="area">

                                    <span class="help-block">
                                        <strong>{{ $errors->first('area') }}</strong>
                                    </span>
                              
</div>
</div>



<div class="form-group">
<label for="" class="col-sm-2 control-label">Phone</label>
<div class="col-sm-4">
<input type="number" class="form-control" name="phone">



                                 <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>

</div>
<label for="" class="col-sm-2 control-label">Rent</label>
<div class="col-sm-4">
<input type="number" class="form-control" name="rent">

                                    <span class="help-block">
                                        <strong>{{ $errors->first('rent') }}</strong>
                                    </span>
                              
</div>
</div>

	

<div class="form-group">
  <label for="sel1" class="col-sm-2 control-label" >Category</label>
 <div class="col-sm-4">
   <select class="form-control" name="category">
                        <option>---Select Category Name---</option>
                       


 @foreach($categories as $category) 
    <option value="{{$category->id}}">{{$category->categoryName}}</option>
  
   @endforeach


                      
                    </select>
</div>
  <label for="sel1" class="col-sm-2 control-label" >Flat Type</label>
 <div class="col-sm-4">
  <select class="form-control" name="flatType">
     <option>---Select Flat Type ---</option>


                         @foreach($FlatTypes as $FlatType) 
    <option value="{{$FlatType->id}}">{{$FlatType->FlatType}}</option>
  
   @endforeach
  </select>
</div>
</div>



<div class="form-group">
  <label for="sel1" class="col-sm-2 control-label" >Gas Line</label>
 <div class="col-sm-4">
  <select class="form-control" name="gasLine">
    <option>Select Your Option</option>
    <option value="1">Yes</option>
    <option value="0">No</option>
  </select>
</div>
  <label for="sel1" class="col-sm-2 control-label" >Parking</label>
 <div class="col-sm-4">
  <select class="form-control" name="parking">
    <option>Select Your Option</option>
    <option value="1">Yes</option>
    <option value="0">No</option>
  </select>
</div>
</div>

<div class="form-group">
  <label for="sel1" class="col-sm-2 control-label" >Lift</label>
 <div class="col-sm-4">
  <select class="form-control" name="lift">
    <option>Select Your Option</option>
    <option value="1">Yes</option>
    <option value="0">No</option>
  </select>
</div>
  <label for="sel1" class="col-sm-2 control-label" >Generator</label>
 <div class="col-sm-4">
  <select class="form-control" name="generator">
    <option>Select Your Option</option>
    <option value="1">Yes</option>
    <option value="0">No</option>
  </select>
</div>
</div>


<div class="form-group">
<label for="" class="col-sm-2 control-label">Flat Description</label>
<div class="col-sm-10">
<textarea class="form-control" name="flatDescription" rows="6"></textarea>

                                    <span class="help-block">
                                        <strong>{{ $errors->first('flatDescription') }}</strong>
                                    </span>
                               
</div>
</div>


  <div class="form-group">
<label for="" class="col-sm-2 control-label">Flat Image</label>
<div class="col-sm-10">
<input type="file" name="flatImage" accept="image/*">
</div>
</div> 



<div class="hidden">
  <label for="sel1" class="col-sm-2 control-label" >Publication Status</label>
 <div class="col-sm-10">
  <select class="form-control" name="publicationStatus">
    <option value="1">Publish</option>
  </select>
</div>
</div>






<div class="form-group">

<div class="col-sm-offset-2 col-sm-10">
<button type="submit" name="btn" class="btn btn-success btn-block">Add Post</button>
</div>
</div>
{!!Form::close()!!}

	
</div>
</div>
</div>

@endsection

