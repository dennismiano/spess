<div class="row">
		<div class="col-md-10">
			<div class="admin-messages">
				@if( isset($msg) && $msg->isNotEmpty($msg))
					@foreach( $msg as $value )

					<h3>{{$value->name}}</h3>
					<p>{{$value->phone}} | {{$value->email}}</p>

					<p>{{$value->message}}</p>
				     <p>{{$value->created_at->diffForHumans() }}</p> 
				    @endforeach

				    @else
						<p>No Messages</p>
					@endif
			</div>
		</div>
</div>