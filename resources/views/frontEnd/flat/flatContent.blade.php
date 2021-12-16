@extends('frontEnd.master')

@section('title')
    Flat Details
@endsection

@section('mainContent')
  <div class="clearfix"></div>

<div class="about_top">
    <div class="container">



   
                <div class="standards">
						<ul class="selectors_wrapper">
							<li class="selector active" data-selector="1">Picture</li>
							<li class="selector" data-selector="2"><a href="{{ url('map/'.$flatById->id)}}">Location</a></li>
							<li class="selector" data-selector="3">Video</li>
					    </ul>
					   
						<div class="standard_content" style="height: 439px;">
							<div class="standard active" data-selector="1">
						 	    <img src=" {{ asset($flatById->flatImage) }}" class="img-responsive" alt="" height="100%" width="100%"/>
							</div>
							<div class="standard" data-selector="2">
							   <div class="map">
			                     <iframe> </iframe>
			                   </div>
			                </div>
							<div class="standard video" data-selector="3">
							   <iframe width="100%" height="350" src="https://www.youtube.com/embed/lSXGxOiRp7A" frameborder="0" allowfullscreen></iframe>
							</div>
					   </div>
					   <div class="clearfix"> </div>
			    </div>
		<div class="col-md-9 single_box1">
			<ul class="single_box">
		     <li>Bed:{{$flatById->FlatType}}</li>
		     <li>Lift:{{$flatById->lift==1?'Yes': 'No'}}</li>
		     <li>Parking:{{$flatById->parking==1?'Yes': 'No'}}</li>
		      <li>Genaretor:{{$flatById->generator==1?'Yes': 'No'}}</li>	
		      <li>Gas Line:{{$flatById->gasLine==1?'Yes': 'No'}}</li>	
		      <li>Rent: BDT.{{$flatById->rent}} TK.</li>
		    </ul>
		    <p>{{$flatById->flatDescription}}</p>	
	    </div>
	  
	<div class="col-md-3">
			<div class="blog_list2">
				 <h3>Publisher Details</h3>
					 <ul class="blog-list3 list_1">
					 	<li class="blog-list3-desc">
					 	  <h4>Contact</h4>
					 	    <ul class="admin_desc">
							    <li class="list_top"><i class="fa fa-phone-square ph"></i>
								{{$flatById->phone}}</li>
								
								
								<li class="list_top"><i class="fa fa-home ph"> </i>
								{{$flatById->flatNo}}/{{$flatById->houseNo}}</li>
								

								<li class="list_top"><i class="fa fa-share"></i>
								{{$flatById->roadNo}}</li>
								
	
								<li class="list_top"><i class="fa fa-location-arrow ph"> </i>
								{{$flatById->SubArea}},{{$flatById->area}}</li>

								<li class="list_top"><i class="fa fa-calendar"> </i>
								{{$flatById->created_at}}</li>

								
								
					        </ul>
		                 </li>
					 	<div class="clearfix"> </div>
					 </ul>
					
			    </div>
		</div>

	
		  </div>
		  </div>
@endsection