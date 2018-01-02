
	<div class="cmt_div">
	@if(isset($post_id))
		    
			   <form class="create_comment" >
				 {{csrf_field()}}
					<input type="hidden" name="post_id" value="{{$post_id}}"  />
					<input type="text" name="name" placeholder="name"/>
					<input type="text" name="message" placeholder="type comment"/>
					<button type="submit">comment</button>
			   </form>
			  
			   @if( isset($cmt)  && $cmt->isNotEmpty() &&  isset($post_id) )
				   @foreach( $cmt as $value)
						<div class="comments">
						{{$value->created_at->diffForHumans()}}<br>
						{{$value->name}}<br>
						@if( $value->email )
							{{$value->email}}<br>
						@endif
						
						{{$value->message}}<br>
						<button type="button"  class="del_cmt" id="{{$value->id}}">Delete</button>
						</div>
				   @endforeach
			   @else
				   <p>No comments to display.</p>
		    @endif
			

      @endif

</div>
	
