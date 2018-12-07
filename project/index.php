<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>

<head>
  <title>Notify</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/note.css" />

  <link rel="stylesheet" media="screen and (min-width: 901px)" href="css/widescreen/widescreen.css">
  <link rel="stylesheet" media="screen and (min-width: 701px) and (max-width: 900px)" href="css/middlescreen/middlescreen.css">
  <link rel="stylesheet" media="screen and (min-width: 501px) and (max-width: 701px)" href="css/middlelessscreen/middlelessscreen.css">
  <link rel="stylesheet" media="screen and (max-width: 500px)" href="css/smallscreen/smallscreen.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css" media="screen,projection">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>

	<style>
	#pop {
	width:22%;
	height:30%;
	opacity:.95;
	top:80%;
	left:13%;
  transform:translate(-50%,-50%);
	display:none;
	position:fixed;
	
	overflow:auto;
	}
	</style>

</head>

<body onload="displayData()">

 <div class="slider">
        <ul class="slides">
            <li>
                <img src="https://images.pexels.com/photos/296886/pexels-photo-296886.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
                <div class="caption center-align text-darken-3 hide-on-small-only">
                    <h3 class="black-text">An animated Todo App </h3>
                    <h5 class="dark black-text">We're that "cool" people and somehow makes a living of making websites  for people, while drinking a $38
                        bottle of artisanal cold-brew</h5>
                    
                </div>
            </li>
            <li>
                <img src="https://images.pexels.com/photos/669615/pexels-photo-669615.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
                <div class="caption left-align text-lighten-3 hide-on-small-only">
                    <h3 class="black-text" >You probably haven't heard of us</h3>

                    <h5 class="dark  black-text darken-1">Thanks for trusting us.</h5>
                    

                </div>
            </li>
         
            <li>
                <img src="https://images.pexels.com/photos/1038674/pexels-photo-1038674.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                    alt="">
                <div class="caption center-align text-lighten-3 hide-on-small-only">
                    <h3 class="black-text">Keep supporting us</h3>
                       
                </div>
            </li>
            <li>
                <img src="https://images.pexels.com/photos/450278/pexels-photo-450278.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
                <div class="caption left-align text-lighten-3 hide-on-small-only">
                    <h3 class="black-text">I Hope you loved our work</h3>
                    
                </div>
            </li>
        </ul>
    </div> 



<!--<div class="header" style="background-color: #252830; width:100%; height:10px;">
    <ul class="text-animation hidden">
      <li>H</li>
      <li>E</li>
      <li>L</li>
      <li>L</li>
      <li>O</li>
    </ul>
  </div>-->
  <script>
    $(function () {
      setTimeout(function () {
        $('.text-animation').removeClass('hidden');
      }, 500);
    });
  </script>
  <!-- logged in user information -->
  <div class="nav-bar">
  <?php  if (isset($_SESSION['username'])) : ?> <div style="font-size:25px;position:absolute;top:625px;left:40px;" class="white-text"> Welcome 
      <?php echo $_SESSION['username']; ?>
  </div>
    <a href="index.php?logout='1'" ><button class="btn btn-small waves-effect waves-light">Log Out</button></a>
    <?php endif ?>

    

    </div>

      
  
    

  <div id="content">

    <div class="leftcolumn" style="background-color: #252830;">
      <div class="card" class="text-warning"  style="background-color: #252830;">
        <form method="post" action="index.php">
          <div class="input-group">
            <input type="text" id="note" placeholder="your note">
          </div>
          <div class="input-group">
            <button type="submit" class="btn addnote" id="addnote" class="text-warning btn-warning">Add Note</button>
          </div>
        </form>
        <br>
        <hr>
        
      </div>
    </div>

    <div class="rightcolumn">
	  <div class="popup" id="pop">
	  <div class="input-group">
            <input type="text" id="popnote" placeholder="your note" class="white-text">
          </div>
          <div class="input-group">
            <button class="text-warning" type="submit" onclick="hidepop()" class="btn addnote btn-warning" class="btn-warning" id="popadd">Edit</button>
          </div>
	  </div>
      <div class="card" style="background-color: #252830;">
        <h2 class="text-warning">List of Notes</h2>
        <hr>
        <table id="notes_holder"></table>
      </div>
    </div>

  </div>

  <footer>
    
  </footer>
  <script src="js/jscript.js"></script>

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js "></script>
    <script>
        $(document).ready(function () {
            $('.slider').slider({
                indicators: false,
                height: 600,
                transition: 800,
                interval: 3000
            })
        });
    </script>
</body>
</html>