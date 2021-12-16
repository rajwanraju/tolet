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
                   @foreach($publishedCategoryFlats as $publishedCategoryFlat)
							    
									  <li>
										<div class="client_box1" >
					       				    <a href="{{ url('/flat-details/'.$publishedCategoryFlat->id)}}"><img src=" {{asset($publishedCategoryFlat->flatImage)}}" class="img-responsive" alt="" height="240" width="320"></a>
					       				   
					       				    <h3 class="m_1"><a href="{{ url('/flat-details/'.$publishedCategoryFlat->id)}}">{{$publishedCategoryFlat->title}}</a></h3>
					       				     <div class="info-flat-price">
                                                            <span class="item_price">BDT.{{$publishedCategoryFlat->rent}}</span>

                                                        </div>
					       				    <div class="boxed_mini_details clearfix">
			                                    <span class="area first"><strong>Garage</strong><i class="fa fa-plane icon1">{{$publishedCategoryFlat->parking==1?'Yes': 'No'}}</i>
			                                    </span>
			                                    <span class="status"><strong>Lift</strong><i class="fa fa-retweet icon1">{{$publishedCategoryFlat->lift==1?'Yes': 'No'}} </i>
			                                    </span>
			                                    <span class="bedrooms last"><strong>Phone</strong><i class="fa fa-phone-square ph">{{$publishedCategoryFlat->phone}}</i>
			                                    </span>
                                                        </div>
					       				 </div>
										</li>

										 @endforeach
										</ul>
                                                           <div class="clearfix"></div>
										
							     </div>

							          



							          <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
									 <ul class="tab_img tab_1">
									  @foreach($publishedCategoryFlats as $publishedCategoryFlat)
							    
									  <li>
										<div class="client_box1" >
					       				    <a href="{{ url('/flat-details/'.$publishedCategoryFlat->id)}}"><img src=" {{$publishedCategoryFlat->flatImage}}" class="img-responsive" alt="" height="240" width="320"></a>
					       				   
					       				    <h3 class="m_1"><a href="{{ url('/flat-details/'.$publishedCategoryFlat->id)}}">{{$publishedCategoryFlat->title}}</a></h3>
					       				     <div class="info-flat-price">
                                                            <span class="item_price">BDT.{{$publishedCategoryFlat->rent}}</span>

                                                        </div>
					       				    <div class="boxed_mini_details clearfix">
			                                    <span class="area first"><strong>Garage</strong><i class="fa fa-plane icon1">{{$publishedCategoryFlat->parking==1?'Yes': 'No'}}</i>
			                                    </span>
			                                    <span class="status"><strong>Lift</strong><i class="fa fa-retweet icon1">{{$publishedCategoryFlat->lift==1?'Yes': 'No'}} </i>
			                                    </span>
			                                    <span class="bedrooms last"><strong>Beds & Bath</strong><i class="fa fa-building-o icon1">{{$publishedCategoryFlat->flatType}}</i>
			                                    </span>
                                                        </div>
					       				 </div>
										</li>

										 @endforeach
										 </ul>
							         </div>	

							        


							     <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
							     	<ul class="tab_img tab_1">
							     	  @foreach($publishedCategoryFlats as $publishedCategoryFlat)
							    
									  <li>
										<div class="client_box1" >
					       				    <a href="{{ url('/flat-details/'.$publishedCategoryFlat->id)}}"><img src=" {{$publishedCategoryFlat->flatImage}}" class="img-responsive" alt="" height="240" width="320"></a>
					       				   
					       				    <h3 class="m_1"><a href="{{ url('/flat-details/'.$publishedCategoryFlat->id)}}">{{$publishedCategoryFlat->title}}</a></h3>
					       				     <div class="info-flat-price">
                                                            <span class="item_price">BDT.{{$publishedCategoryFlat->rent}}</span>

                                                        </div>
					       				    <div class="boxed_mini_details clearfix">
			                                    <span class="area first"><strong>Garage</strong><i class="fa fa-plane icon1">{{$publishedCategoryFlat->parking==1?'Yes': 'No'}}</i>
			                                    </span>
			                                    <span class="status"><strong>Lift</strong><i class="fa fa-retweet icon1">{{$publishedCategoryFlat->lift==1?'Yes': 'No'}} </i>
			                                    </span>
			                                    <span class="bedrooms last"><strong>Beds & Bath</strong><i class="fa fa-building-o icon1">{{$publishedCategoryFlat->flatType}}</i>
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

        

        @endsection

