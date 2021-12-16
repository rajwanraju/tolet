@extends('frontEnd.master')
@section('title')

  To-Let Sheba

@endsection

@section('mainContent')





<div class="content_top">


{!!Form::open(['url'=>'post/add','method'=>'GET','class'=>'form-horizontal'])!!}
			 <div class="form-group">

<div class="col-sm-offset-10 col-sm-2">
<button type="submit" name="btn" class="btn btn-success btn-block" style="padding: 10% 0;"><h2>Post Add</h2></button>
</div>
</div>
{!!Form::close()!!}
   
	   <div class="content_bottom">
	@include('frontEnd.includes.menu')
	
		<div class="col-md-10">	




<div class="form-group">
 <!--
 <div class="col-sm-2">

 

   <select class="form-control" name="category">
                        <option>Short By</option>
                        <option value="1">Short By Date</option>
                        <option value="2">Short By Rent</option>
                        <option value="3">Short By Area</option>
                       
                      
                    </select>

                    <button type="submit" name="btn" class="btn btn-success btn-block" style="padding: 5% 0;"><h2>Short By</h2></button>
</div>

-->





	
<h3 class="text-center text-success">{{Session::get('message')}}</h3>



		   <div class="sap_tabs">
				<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						 <div class="tab_grid">
							  <ul class="resp-tabs-list">
							  	  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Apartment</span></li>
								  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Resort</span></li>
								  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Summer house</span></li>
								  <div class="clearfix"></div>
							  </ul>	
							</div>	
							    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
	<ul class="tab_img tab_1">
                   @foreach($publishedFlats as $publishedFlat)
							    
									  <li>
										<div class="client_box1" >
					       				    <a href="{{ url('/flat-details/'.$publishedFlat->id)}}"><img src=" {{$publishedFlat->flatImage}}"  alt="" height="240px" width="320px"></a>
					       				   
					       				    <h3 class="m_1"><a href="{{ url('/flat-details/'.$publishedFlat->id)}}">{{$publishedFlat->title}}</a></h3>
					       				     <div class="info-flat-price">
                                                            <span class="item_price">BDT.{{$publishedFlat->rent}}</span>

                                                        </div>
					       				    <div class="boxed_mini_details clearfix">
			                                    <span class="area first"><strong>Garage</strong><i class="fa fa-plane icon1">{{$publishedFlat->parking==1?'Yes': 'No'}}</i>
			                                    </span>
			                                    <span class="status"><strong>Lift</strong><i class="fa fa-retweet icon1">{{$publishedFlat->lift==1?'Yes': 'No'}} </i>
			                                    </span>
			                                    <span class="bedrooms last"><strong>Phone</strong><i class="fa fa-phone-square ph"">{{$publishedFlat->phone}}</i>
			                                    </span>
                                                        </div>
					       				 </div>
										</li>

										 @endforeach
										</ul>
                                                           <div class="clearfix"></div>
										
							     </div>

							          <div class="col-md-12">
                                                {{$publishedFlats->links()}}
                                                </div>



							          <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
									 <ul class="tab_img tab_1">
									  @foreach($publishedFlats as $publishedFlat)
							    
									  <li>
										<div class="client_box1" >
					       				    <a href="{{ url('/flat-details/'.$publishedFlat->id)}}"><img src=" {{$publishedFlat->flatImage}}" class="img-responsive" alt="" height="240" width="320"></a>
					       				   
					       				    <h3 class="m_1"><a href="{{ url('/flat-details/'.$publishedFlat->id)}}">{{$publishedFlat->title}}</a></h3>
					       				     <div class="info-flat-price">
                                                            <span class="item_price">BDT.{{$publishedFlat->rent}}</span>

                                                        </div>
					       				    <div class="boxed_mini_details clearfix">
			                                    <span class="area first"><strong>Garage</strong><i class="fa fa-plane icon1">{{$publishedFlat->parking==1?'Yes': 'No'}}</i>
			                                    </span>
			                                    <span class="status"><strong>Lift</strong><i class="fa fa-retweet icon1">{{$publishedFlat->lift==1?'Yes': 'No'}} </i>
			                                    </span>
			                                    <span class="bedrooms last"><strong>Beds & Bath</strong><i class="fa fa-building-o icon1">{{$publishedFlat->flatType}}</i>
			                                    </span>
                                                        </div>
					       				 </div>
										</li>

										 @endforeach
							         </div>	

							        


							     <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
							     	<ul class="tab_img tab_1">
							     	  @foreach($publishedFlats as $publishedFlat)
							    
									  <li>
										<div class="client_box1" >
					       				    <a href="{{ url('/flat-details/'.$publishedFlat->id)}}"><img src=" {{$publishedFlat->flatImage}}" class="img-responsive" alt="" height="240" width="320"></a>
					       				   
					       				    <h3 class="m_1"><a href="{{ url('/flat-details/'.$publishedFlat->id)}}">{{$publishedFlat->title}}</a></h3>
					       				     <div class="info-flat-price">
                                                            <span class="item_price">BDT.{{$publishedFlat->rent}}</span>

                                                        </div>
					       				    <div class="boxed_mini_details clearfix">
			                                    <span class="area first"><strong>Garage</strong><i class="fa fa-plane icon1">{{$publishedFlat->parking==1?'Yes': 'No'}}</i>
			                                    </span>
			                                    <span class="status"><strong>Lift</strong><i class="fa fa-retweet icon1">{{$publishedFlat->lift==1?'Yes': 'No'}} </i>
			                                    </span>
			                                    <span class="bedrooms last"><strong>Beds & Bath</strong><i class="fa fa-building-o icon1">{{$publishedFlat->flatType}}</i>
			                                    </span>
                                                        </div>
					       				 </div>
										</li>

										 @endforeach
									
							     </div>	

							    
				  </div>
           </div>
        </div>
        

		<div class="clearfix"> </div>
        </div>
      
                <div class="clearfix"> </div>
        </div>


	<div class="col-md-12">	

  {!!Html::style('public/frontEnd/css/style.css')!!}

<div id="myCarousel" class="carousel slide"> <!-- slider -->
				<div class="carousel-inner">
					<!-- end item -->
					@foreach($slideShows as $slideShow)
					<div class="item"> <!-- item 2 -->
						<img src="{{asset ($slideShow->flatImage) }}" alt="">
					</div> <!-- end item -->
					@endforeach
					 <!-- end item -->
				</div> <!-- end carousel inner -->
				<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
				<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
			</div>



<script type="text/javascript">


$(window).load(function() {
	$('#myCarousel').carousel({
  		interval: 3000
 		})
   	});
</script>

	<script type="text/javascript" src="{{asset('public/frontEnd/js/jquery.flexisel.js')}}"></script>
		


</div>

        

        @endsection

