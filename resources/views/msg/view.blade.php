<div>
@if( isset($msg) && $msg->isNotEmpty($msg))
	@foreach( $msg as $value ) 
     {{$value->created_at->diffForHumans() }}<br>
	 {{$value->name}}<br>
	 {{$value->email}}<br>
	 {{$value->message}}<br>
	 {{$value->phone}}<br>
	 <button tyepe="button" id="{{$value->id}}" class="del_msg">Delete</button>
    @endforeach
@else
	<p>No messages to display</p>
@endif

</div>