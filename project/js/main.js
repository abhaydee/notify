$(document).ready(function(){
  
  
  //------------------------------------//
  //Navbar//
  //------------------------------------//
    	var menu = $('.navbar');
    	$(window).bind('scroll', function(e){
    		if($(window).scrollTop() > 140){
    			if(!menu.hasClass('open')){
    				menu.addClass('open');
    			}
    		}else{
    			if(menu.hasClass('open')){
    				menu.removeClass('open');
    			}
    		}
    	});
  
  
  //------------------------------------//
  //Scroll To//
  //------------------------------------//
  $(".scroll").click(function(event){		
  	event.preventDefault();
  	$('html,body').animate({scrollTop:$(this.hash).offset().top}, 800);
  	
  });
  
  //------------------------------------//
  //Wow Animation//
  //------------------------------------// 
  wow = new WOW(
        {
          boxClass:     'wow',      // animated element css class (default is wow)
          animateClass: 'animated', // animation css class (default is animated)
          offset:       0,          // distance to the element when triggering the animation (default is 0)
          mobile:       false        // trigger animations on mobile devices (true is default)
        }
      );
      wow.init();


	
});
// document.getElementById("button1").onclick = window.location = "http://www.google.com/";
// function(){alert("hello")};
// window.open('https://www.google.com/');

// object.onclick = function(){myScript};
$("#button2").on('click', function(){
     window.location = "viewResults.php";    
});

$("#button1").on('click', function(){
     window.location = "viewDatasets.php";    
});
$("#button3").on('click', function(){
     window.location = "https://drive.google.com/file/d/1BurqPYqJ_PlXqqaZhax3BQyRcuE726hz/view?usp=drivesdk";    
});
$("#button4").on('click', function(){
     window.location = "https://drive.google.com/file/d/1AaYRuMw8q9F4FRXtfOqquzdN40PACdwW/view?usp=drivesdk";    
});