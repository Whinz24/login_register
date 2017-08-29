<!DOCTYPE HTML>
<html>
<head>
<title>Login And Register</title>
<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/amaran.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/animate.min.css" rel="stylesheet" type="text/css" media="all" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<!-- -->
</head>
<body>
<!-- contact-form -->	
<div class="message warning">
<div class="inset">
	<div class="login-head">
		<h1>Login Form</h1>
		 <div class="alert-close"> </div> 			
	</div>
		<form>
			<li>
				<input type="text" class="text" id="username" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}"><i class=" icon user"></i>
			</li>
				<div class="clear"> </div>
			<li>
				<input type="password" value="Password" id="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"> <i class="icon lock"></i>
			</li>
			<div class="clear"> </div>
			<div class="submit">
				<input type="submit" id="signin" value="Sign in" >
				<h4><a href="register.php">Create An Account</a></h4>
						  <div class="clear">  </div>	
			</div>
				
		</form>
		</div>					
	</div>
	</div>
	<div class="clear"> </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/jquery.amaran.min.js"></script>
<script src="js/functions.js"></script>
<script>login()</script>
</body>
</html>