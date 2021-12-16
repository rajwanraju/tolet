<div class="header">
	<div class="col-xs-4">
	  <div class="logo">
		<a href={{url('/')}}><img src="{{asset('public/frontEnd/images/logo1.png')}}" alt=""/></a>
	  </div>
	</div>

	{!!Form::open(['url'=>'/search','method'=>'POST','class'=>'form-horizontal'])!!}
	<div class="col-xs-8 header_right">
	 <div class="form-group">

	<div class="col-sm-4">
	 <input type="text" class="form-control" id="search" name="search">
</input> 
</div>
<div class="col-sm-2">
<button type="submit" name="btn" class="btn btn-info btn-block"><i class="fa fa-search icon1"> </i>Search</button>
</div>
</div>
{!!Form::close()!!}
	<div class="clearfix"> </div>
</div>

