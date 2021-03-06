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
<html lang="en"><head>
  <meta charset="utf-8">
  <title>Snow Landing Page Theme | Created By Visual Soldiers</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  
  
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900|Montserrat:400,700' rel='stylesheet' type='text/css'>
  

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">

  <script src="js/modernizr-2.7.1.js"></script>
  
</head>

<body background="../img/header-bg.jpg">

    
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
        
    </div>
        
    <header>
      <div class="container">
        
        
        <div class="row header-info">
          <div class="col-sm-10 col-sm-offset-1 text-center">
            <h1 class="wow fadeIn">Identifying Customer Segments</h1>
            <br />
            <p class="lead wow fadeIn" data-wow-delay="0.5s">Unsupervised learning techniques to identify the segments of the population that form the core customer base for a multi mail-order sales company in Germany.</p>
            <br />
              
            <div class="row">
              <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <div class="row">
                  <div class="col-xs-6 text-right wow fadeInUp" data-wow-delay="1s">
                    <form action="https://www.w3schools.com/" method="get" target="_blank">
                    <a href="#be-the-first" id="button1" class="btn btn-secondary btn-lg scroll" type="submit">VIEW DATASETS</a>
                  </form>
                  </div>
                  <div class="col-xs-6 text-left wow fadeInUp" data-wow-delay="1.4s">
                    <a href="#invite" id="button2" class="btn btn-primary btn-lg scroll">VIEW RESULTS</a>
                  </div>
                </div><!--End Button Row-->  
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </header>
   <!-- <form action="https://www.w3schools.com/" method="get" target="_blank">
         <button type="submit">Click me</button>
      </form> -->
   
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')</script>
    <script src="js/wow.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

   
    </body>
</html>