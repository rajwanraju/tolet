     <div class="widget">
                <div class="title"><h3><i class="fa fa-meh-o men"> </i> Sort By Type</h3></div>
                  <ul class="real-widget">
                	 @foreach($publishedFlatTypes as $publishedFlatType)
                	<li><a href="{{ url('/type-view/'.$publishedCategory->id) }}">{{ $publishedFlatType->flatType }}</a></li>
                	 @endforeach
                  </ul></li>
                </ul>
             </div>
		</div>