<div>

     <form class="create_comment" >
	    <input type="text" name="name" placeholder="name"/>
		<input type="email" name="email" placeholder="email" />
		<input type="text" name="name" placeholder="name"/>
		<input type="text" name="message" placeholder="type comment"/>
		<button type="submit">post</button>
	 </form>
	<div>
		   @if( isset($cmt)  && $cmt->isNotEmpty()   )
			   @foreach( $cmt as $value)
					<div>
					{{$value->created_at->diffForHumans()}}<br>
					{{$value->name}}<br>
					{{$value->email}}<br>
					{{$value->message}}<br>
					<button type="button"  class="del_post">Delete</button>&nbsp;
					<button type="button"  class="del_post">Reply</button><br>
					
					
					
					</div>
			   @endforeach
		   @else
			   <p>No comments to display.</p>
		   @endif




	</div>
</div>