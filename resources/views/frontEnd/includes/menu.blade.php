	<div class="col-md-2">
			<div class="widget">
                <div class="title"><h3><i class="fa fa-meh-o men"> </i>Sort By Category</h3></div>
                  <ul class="real-widget">
                   @foreach($publishedCategories as $publishedCategory)
                	<li><a href="{{ url('/category-view/'.$publishedCategory->id) }}"><i class="fa fa-sign-in "> </i>{{ $publishedCategory->categoryName }}</a></li>
                	 @endforeach
                	<ul>
                  </ul></li>
                </ul>
             </div>
      



             <div class="widget">
                <div class="title"><h3><i class="fa fa-meh-o men"> </i> Sort By Type</h3></div>
                  <ul class="real-widget">
                	 @foreach($publishedFlatTypes as $publishedFlatType)
                	<li><a href="{{ url('/type-view/'.$publishedFlatType->id) }}"><i class="fa fa-sign-in "> </i> {{ $publishedFlatType->FlatType }}</a></li>
                	 @endforeach
                  </ul></li>
                </ul>
             </div>
		</div>

    
