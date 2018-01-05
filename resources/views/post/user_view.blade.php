 	
<div class="row">
	<div class="container">
	
		<div class="col-md-8">
		 	@if( isset($post)  && $post->isNotEmpty($post)   )
				
			     
				    <div class="post_div">

						 <h1 class="red most-recent-h1"> Most Recent Story</h1>
							<div class="recent-blog-wrapper">

								<h2 class="blog-title">{{$post->first()->title}}</h2>
								<h4 class="gray byline">Posted {{$post->first()->created_at->diffForHumans()}} by {{$post->first()->name}}</h4>
									
									<div class="blog-image">
										<img  class="img-responsive blog-image-inner"  src="data:image/jpeg;base64,<?php echo base64_encode( $post->first()->files); ?>" />
									</div>

									<div class="recent-blog-body">
										<p>{!!$post->first()->body!!}</p>
										<a  class="view_cmt user_reply" id="{{$post->first()->id}}"><span class="blue"><i class="fa fa-commenting " ></i> comments({{$post->first()->comments()->count()}})</span></a>
									
									</div>
							</div>
						</div>
		</div>

		<div class="col-md-4">
		
				<div class="blog-list">
					   
					<div class="post_page">
						<div class="pagi_up" >

					<h2 class="moreblogs blue">More Blogs</h2>
					     @foreach( $post as $value)
									
									<div class="post_div ">
										<div class="row">
										 
										 	<div class="blog-thumbnail">
												<div class="col-md-3">
													<div class="blog-list-image">
														<img  class="img-responsive blogger-image"  src="data:image/jpeg;base64,<?php echo base64_encode( $value->files); ?>" />
													</div>
												</div>

												<div class="col-md-9">
													<h4>{{$value->title}}</h4>
													<p>Posted {{$value->created_at->diffForHumans()}} by {{$value->name}}</p>
													
													<a  class="view_cmt user_reply" id="{{$value->id}}"><span class="blue"><i class="fa fa-commenting " ></i> comments({{$value->comments()->count()}})</span></a>
													
												</div>
											</div>
										</div>
									</div>
						@endforeach
						</div>	
					 </div>
				   @else
					   <p>No posts yet.</p>
				   @endif
			</div>

			
		  </div>
		</div>
	</div>
</div>