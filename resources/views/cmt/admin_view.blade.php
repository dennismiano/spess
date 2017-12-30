<div>

     <form class="create_comment" >
	    <input type="text" name="name" placeholder="name"/>
		<input type="email" name="email" placeholder="email" />
		<input type="text" name="name" placeholder="name"/>
		<input type="text" name="message" placeholder="type comment"/>
		<button>post</button>
	 </form>
	<div>
		   @if( isset($cmt)  && $cmt->isNotEmpty()   )
			   @foreach( $cmt as $value)
					<div>
					{{$value->created_at->diffForHumans()}}<br>
					{{$value->name}}<br>
					{{$value->email}}<br>
					{{$value->message}}<br>
					<button type="button"  class="del_post">Delete</button><br>
					
					
					
					</div>
			   @endforeach
		   @else
			   <p>No comments to display.</p>
		   @endif




	</div>
</div>