<!DOCTYPE HTML5>
<html>
	<head>
	<script src="{{ URL::asset('/js/jquery-3.2.1.min.js')}}"></script>
     <script src="{{ URL::asset('/js/login/login.js')}}"></script>
	 <title>Admin</title>

	</head>

	<body>

			<div>
			
			   <form class="login_form">
			   {{csrf_field()}}
				  <input type="email"  placeholder="Enter Email" name="email" />
				  <input type="password"  placeholder="Enter Password"  name="pass"/>
			   
				   <button type="submit" >Log In</button>
			   </form>
			</div>

	</body>

</html>