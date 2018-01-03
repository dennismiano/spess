<!DOCTYPE html5>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="{{ URL::asset('/js/jquery-3.2.1.min.js')}}"></script>
        <title>Confirmation email</title>
     
<script src="{{ URL::asset('/js/jquery-ui.min.js')}}"></script> 
		
    </head>

    <body>
	 @If(isset($name) )
		 <p>Hello {{$name}}</p>
     @endif  
       @if(isset($msg))
        <div class="message_div">
	         <p>{{$msg}}</p>
		</div>
       @endif
    </body>
</html>
