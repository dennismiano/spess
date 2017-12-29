<div>
   @if( isset($post)  && $->isNotEmpty($post)   )
	   @foreach( $post as $value)
            <div>
			{{$value->created_at->diffForHumans()}}<br>
			{{$value->title}}<br>
			{{$value->name}}<br>
			{{$value->category}}<br>
			{{$value->body}}<br>
			<button type="button" class="user_reply">Reply</button>
			<button type="button" class="">share</button>
			<button type="button" class="">Like</button>
			
			
			</div>
       @endforeach
   @else
	   <p>No posts yet.</p>
   @endif




</div>