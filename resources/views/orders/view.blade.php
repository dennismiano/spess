<div>
@if( isset($orders) && $orders->isNotEmpty())
	@foreach( $orders as $value ) 
     {{$value->created_at->diffForHumans() }}<br>
	 {{$value->id}}<br>
    @endforeach
@else
	<p>No orders to display</p>
@endif

</div>