<div>
@if( isset($msg) && $msg->isNotEmpty($msg))
	@foreach( $msg as $value ) 
     {{$value->created_at->diffForHumans() }}<br>
	 {{$value->name}}<br>
	 {{$value->email}}<br>
	 {{$value->message}}<br>{{$value->name}}<br>
    @endforeach
@else
	<p>No orders to display</p>
@endif

</div>