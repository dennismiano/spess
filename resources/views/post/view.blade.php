

	
@if(isset($up_post)  )
	<div>
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
	</div>
@else
			 post blog
				   <form class="ad_post" >
			   {{csrf_field()}}
				  <input type="text" name="title"  placeholder="title" name="title">
				  <input  type="text"  placeholder="name" name="name" />
				  <input type="text"  placeholder="body" name="body" />
				  <input type="text"  placeholder="category" name="category" />
				  <input type="file"  name="ff" />
				  <button type="submit" >Post</button>
			   
			   
			   
			   </form>
		@if( isset($post)  && $post->isNotEmpty()   )	
			
				
			   
			
				<div>
				  
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
			  </div>
			@else
				@if( ! isset($up_post)  )
					   <p>No posts to display.</p>
				@endif
				   




				
			
		@endif
@endif

 
		
  
