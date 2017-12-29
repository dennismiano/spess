<div>
<div>
post blog
   <form class="ad_post">
      <input type="text" name="title"  placeholder="title" name="title">
	  <input  type="text"  placeholder="name" name="name" >
	  <input type="text"  placeholder="body" name="body" >
	  <input type="file" placeholder="upload image" name="image" multiple>
	  <button type="submit" >Post</button>
   
   
   
   </form>




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
				<button type="button"  class="del_post">Delete</button><br>
				<button type="button" class="view_cmt">Comments</button><br>
				
				
				</div>
		   @endforeach
	   @else
		   <p>No posts to display.</p>
	   @endif




	</div>
</div>