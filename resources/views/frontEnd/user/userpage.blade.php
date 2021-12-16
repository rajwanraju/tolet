@extends('frontEnd.master')
@section('title')

  To-Let Sheba

@endsection

@section('mainContent')




<div class="content_top">


   

<form>
	

			 <div class="form-group">

<div class="col-sm-offset-10 col-sm-2">
<button type="submit" name="btn" class="btn btn-success btn-block" style="padding: 10% 0;"><a href="{{ url('/post-details/'.$flat->id)}}"><h2>Add Post Details</h2></button>
</div>
</div>




</form>
</div>



@endsection