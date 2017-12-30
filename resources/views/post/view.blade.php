<div>
<div>
	
	@if(isset($up_post) && $up_post->isNotEmpty()  )
		<form class="up_post">
	   {{csrf_field()}}
		  <input type="text" name="title"  value="{{ $up_post->title  }}">
		  <input type="hidden"  value="{{ $up_post->id}}" name="id"/>
		  <input  type="text"  name="name" value="{{ $up_post->name  }}" />
		  <input type="text"   name="category"  value="{{ $up_post->category  }}" />
		  <input type="text"  name="body"  value="{{ $up_post->body  }}"  />
		  <img  class="img-responsive blog-image"  src="data:image/jpeg;base64,<?php echo base64_encode( $up_post->files); ?>" /><br>
		  
		  Replace with:<input type="file"  name="ff" /><br>
		  <button type="submit" >Update</button>
	   
	   
	   
	   </form>
		
		
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
		
	@endif
	




</div>
	<div>
	   @if( isset($post)  && $post->isNotEmpty()   )
		   @foreach( $post as $value)
				<div>
				{{$value->created_at->diffForHumans()}}<br>
				{{$value->title}}<br>
				{{$value->name}}<br>
				{{$value->category}}<br>
				{{$value->body}}<br>
				image:<img  class="img-responsive blog-image"  src="data:image/jpeg;base64,<?php echo base64_encode( $value->files); ?>" /><br>
				<button type="button"  class="del_post">Delete</button> &nbsp;
				<button type="button" class="view_cmt">Comments</button> &nbsp;
				<button type="button" class="view_cmt">Edit</button><br>
				
				
				</div>
		   @endforeach
	   @else
		   <p>No posts to display.</p>
	   @endif




	</div>
</div>