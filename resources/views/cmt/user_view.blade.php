<div class="cmt_div"> 
@if(isset($post_id))
		   
			   <form class="create_comment" >
				 {{csrf_field()}}

				<div class="form-group">
					<input type="hidden" name="post_id"  class="form-control spess-text" value="{{$post_id}}"  />
				</div>
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
			
      
 @endif
 </div>