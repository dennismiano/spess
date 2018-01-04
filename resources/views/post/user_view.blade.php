 	
<div class="row">
	<div class="container">
	
		<div class="col-md-8">
		 	@if( isset($post)  && $post->isNotEmpty($post)   )
				
			     
				     <div class="post_div">
					  Most recent
						<div class="row">
							<div class="col-md-3">
								<img  class="img-responsive blogger-image"  src="data:image/jpeg;base64,<?php echo base64_encode( $post->first()->files); ?>" />
							</div>

							<div class="col-md-9">
								<h4>{{$post->first()->title}}</h4>
								<p>Posted {{$post->first()->created_at->diffForHumans()}} by {{$post->first()->name}}</p>
								{{$post->first()->body}}
								<a  class="view_cmt user_reply" id="{{$post->first()->id}}"><span class="blue"><i class="fa fa-commenting " ></i> comments({{$post->first()->comments()->count()}})</span></a>
								
							</div>
						</div>
					</div>
			
			     <div class="poat_page">
			     list div
			     @foreach( $post as $value)
							<div class="post_div">
								<div class="row">
								  
									<div class="col-md-3">
										<img  class="img-responsive blogger-image"  src="data:image/jpeg;base64,<?php echo base64_encode( $value->files); ?>" />
									</div>

									<div class="col-md-9">
										<h4>{{$value->title}}</h4>
										<p>Posted {{$value->created_at->diffForHumans()}} by {{$value->name}}</p>
										
										<a  class="view_cmt user_reply" id="{{$value->id}}"><span class="blue"><i class="fa fa-commenting " ></i> comments({{$value->comments()->count()}})</span></a>
										
									</div>
								</div>
							</div>
				@endforeach
				@if(  null !== $post->links() )
				{{$post->links()}}
			    @endif
			    </div>

		   @else
			   <p>No posts yet.</p>
		   @endif
		</div>
	</div>
</div>