

	<div class="col-md-6">
		<div class="blogform-section">
				@if(isset($up_post)  )
						update blog
					
						<form class="up_post">
						   {{csrf_field()}}
							  <input type="text" name="title"  value="{{ $up_post->title  }}">
							  <input type="hidden"  value="{{ $up_post->id}}" name="id"/>
							  <input  type="text"  name="name" value="{{ $up_post->name  }}" />
							  <input type="text"   name="category"  value="{{ $up_post->category  }}" />
							  <input type="text"  name="body"  value="{{ $up_post->body  }}"  />
							  <input type="text"  name="cat"  value="{{ $up_post->category  }}"  />
							  <img  class="img-responsive blog-image"  src="data:image/jpeg;base64,<?php echo base64_encode( $up_post->files); ?>" /><br>
							  
							  Replace with:<input type="file"  name="ff" /><br>
							  <button type="submit" >Update</button>
							  <button type="button" href="/view/post" class="load_ajax" cl="admin_content">Cancel</button>
						   
						 </form>

				@else
							 <h3><span class="blue"><i class="fa fa-plus-circle"></i> Create a new article</span></h3>
							<form class="ad_post" >
							   {{csrf_field()}}

							   <div class="form-group">
							   		<label for="blogtitle">Blog Title:</label>
								  <input type="text" class="form-control" name="title"  placeholder="blog title" id="blogtitle">
							   </div>

							   <div class="form-group">
							   		<label for="blogauthor">Blog Author:</label>
								  <input  type="text" class="form-control"  placeholder="author" name="name" id="blogauthor" />
							   </div>

							   <div class="form-group">
							   		<label for="blogbody">Blog Article:</label>
								  <textarea name="body" class="form-control" id="blogbody" placeholder="your blog..." rows="6"></textarea>
								</div>

								<div class="form-group">
							   		<label for="blogcat">Blog Category:</label>
								  		<input type="text"  class="form-control" placeholder="category" name="category" id="blogcat" />
								 </div>

								 <div class="form-group">
							   		<label for="blogimage">Upload image:</label>
								  		<i class="fa fa-cloud-upload"></i><input type="file" name="ff" id="blogimage"/>
								  </div>
								  <button type="submit" class="publish-btn" >Publish blog <i class="fa fa-plus-circle"></i></button>
								
							   
							   
							   
							 </form>
			</div>
	</div>
	
	<div class="col-md-6">
	@if( isset($post)  && $post->isNotEmpty()   )	
		
					   @foreach( $post as $value)
							<div class="post_div">
							{{$value->created_at->diffForHumans()}}<br>
							{{$value->title}}<br>
							{{$value->name}}<br>
							{{$value->category}}<br>
							{{$value->body}}<br>
							image:<img  class="img-responsive blog-image"  src="data:image/jpeg;base64,<?php echo base64_encode( $value->files); ?>" /><br>
							<button type="button"  class="del_post" id="{{$value->id}}">Delete</button> &nbsp;
							<button type="button" class="view_cmt" id="{{$value->id}}">Comments({{$value->comments()->count()}})</button> &nbsp;
							<button type="button" class="edit_post" id="{{$value->id}}">Edit</button><br>
							
							
							
							</div>
					   @endforeach
			  
			@else
				@if( ! isset($up_post)  )
					   <p>No posts to display.</p>
				@endif
				   
			</div>



				
			
		@endif
@endif

 
		
  
