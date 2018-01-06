<!DOCTYPE html5>
<html lang="{{ app()->getLocale() }}">
    <head>
	    
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="{{ URL::asset('/js/jquery-3.2.1.min.js')}}"></script>
			{{--  <script src="https://js.pusher.com/4.1/pusher.min.js"></script>  --}}
        <title>Admin Panel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:800|Signika:300,400,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link href="{{ URL::asset('/css/spess.css')}}" rel="stylesheet">
		<script src="{{ URL::asset('/js/bootstrap.min.js')}}" ></script>
        <link href="{{ URL::asset('/css/bootstrap.min.css')}}" rel="stylesheet">
		<script src="{{ URL::asset('/js/jquery-ui.min.js')}}"></script> 
		<script src="{{ URL::asset('/js/admin/admin.js')}}"></script> 
			{{--  <script>
			var pusher = new Pusher('3ea878fd985ea2067100', {
			  encrypted: true
			});

			var channel = pusher.subscribe('newPost');
			channel.bind('App\Events\postCreated', function(data) {
			      alert(data.post.id);
			});
		
		
		
		</script> --}}
         <style>
				.loader {
				border: 5px solid #f3f3f3; /* Light grey */
				border-top: 5px solid #3498db; /* Blue */
				border-bottom: 5px solid #3498db; /* Blue */
				border-radius: 50%;
				width: 60px;
				height: 60px;
				animation: spin 2s linear infinite;
				margin:auto;
			}
			.myModal,.myModal{
				margin:auto;
			}

			@keyframes spin {
				0% { transform: rotate(0deg); }
				100% { transform: rotate(360deg); }
			}
		 
		 
		 
		 </style>		
    </head>

    <body>
        
       
	   <div class="magic"></div>  
		{{--    Bootstrap empty modal                             --}}
	{{-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>  --}}

<!--  Loading Modal -->
<div id="myModal" class="modal fade" role="dialog" data-backdrop="static">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      
    </div>

  </div>
</div>
<!-- Msg Modal -->
<div id="Msg_modal" class="modal fade" role="dialog" data-backdrop="static">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close " data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
	  {{-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> --}}
      </div>
    </div>

  </div>
</div>



    </body>
	
</html>
