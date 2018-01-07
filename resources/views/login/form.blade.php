<!DOCTYPE HTML5>
<html>
	<head>
	<script src="{{ URL::asset('/js/jquery-3.2.1.min.js')}}"></script>
     <script src="{{ URL::asset('/js/login/login.js')}}"></script>
     <link href="{{ URL::asset('/css/bootstrap.min.css')}}" rel="stylesheet">
     <link href="{{ URL::asset('/css/spess.css')}}" rel="stylesheet">
	 <title>Admin</title>

	</head>

	<body>

				<div class="col-md-4 col-md-offset-4">
					<div class="login-form">
						<div class="login-form-header">
							<h1>SPESS Admin Login</h1>
						</div>

						<div class="login-form-body">
							   <form class="login_form">
							   {{csrf_field()}}

								   	<div class="form-group">
									  <input type="email" class="form-control"  placeholder="Enter Email" name="email" />
									</div>

									<div class="form-group">
									  <input type="password" class="form-control"  placeholder="Enter Password"  name="pass"/>
								   	</div>

								   	<div class="form-group">
									   <button type="submit" class="btn btn-warning" >Log In</button>
									</div>
							   </form>
						</div>
					</div>
				</div>

	</body>

</html>