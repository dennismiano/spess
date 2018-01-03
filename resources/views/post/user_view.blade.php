<div>
   @if( isset($post)  && $post->isNotEmpty($post)   )
	   @foreach( $post as $value)
            <div>
			{{$value->created_at->diffForHumans()}}<br>
			{{$value->title}}<br>
			{{$value->name}}<br>
			{{$value->category}}<br>
			{{$value->body}}<br>
			image:<img  class="img-responsive blog-image"  src="data:image/jpeg;base64,<?php echo base64_encode( $value->files); ?>" /><br>
			<button type="button" class="user_reply">Comment</button>
			<button type="button" class="">share</button>
			<button type="button" class="">Like</button>
			
			
			</div>
       @endforeach
   @else
	   <p>No posts yet.</p>
   @endif




</div>