
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" media="screen and (min-width: 901px)" href="css/widescreen/widescreen_form.css">
<link rel="stylesheet" media="screen and (min-width: 701px) and (max-width: 900px)" href="css/middlescreen/middlescreen_form.css">
<link rel="stylesheet" media="screen and (min-width: 501px) and (max-width: 701px)" href="css/middlelessscreen/middlelessscreen_form.css">
<link rel="stylesheet" media="screen and (max-width: 500px)" href="css/smallscreen/smallscreen_form.css">
<link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css" media="screen,projection">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
 
  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
</head>
<body  style="background-color: #252830;">
  <div class="header" class="card-header goodone text-white" style="background-color: #252830;">
  	<h2 class="text-warning">Registration Form</h2>
  </div>
	
  <form method="post" action="register.php">
	<div id="error"></div>
  	<div class="input-group">
  	  <label style="font-size:20px;">Username</label>
  	  <input type="text" id="username">
  	</div>
  	<div class="input-group">
  	  <label style="font-size:20px;">Password</label>
  	  <input type="password" id="password">
      </div>
	  <div class="input-group">
  	  <label style="font-size:20px;">Confirm password</label>
  	  <input type="password" name="password_2" id="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn black text-warning btn-block" id="registr">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
 
</body>
<script src="js/jscript.js"></script>
</html>