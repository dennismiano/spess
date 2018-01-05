@if(isset($post_id))
		   <div class="cmt_div"> 
			   <form class="create_comment" >
				 {{csrf_field()}}
					<input type="hidden" name="post_id" value="{{$post_id}}"  />
					<input type="text" name="name" placeholder="name"/>
					<input type="email" name="email" placeholder="email not made public"/>
					<input type="text" name="message" placeholder="type comment"/>
					<button type="submit">comment</button>
			   </form>
			  
			   @if( isset($cmt)  && $cmt->isNotEmpty()  )
				   @foreach( $cmt as $value)
						<div class="comments">
						{{$value->created_at->diffForHumans()}}<br>
						{{$value->name}}<br>
                        {{$value->message}}<br>
						</div>
				   @endforeach
			   @else
				   <p>No comments to display.</p>
		    @endif
			
       </div>
 @endif
