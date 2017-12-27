<div>
@if( isset($orders) && $orders->isNotEmpty())
	@foreach( $orders as $value ) 
     {{$value->created_at->diffForHumans() }}<br>
	 {{$value->name }}<br>
	 {{$value->phone }}<br>
	 {{$value->email }}<br>
	 {{$value->service }}<br>
	 <button type="button" class="del_order"   id="{{$value->id}}">Delete</button><br>
    @endforeach
@else
	<p>No orders to display</p>
@endif

</div>