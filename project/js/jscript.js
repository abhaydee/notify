//popupNote(ntID);
//hidepop();
// display all notes based on logged in user
function displayData() {
    $.ajax({
      url: 'server/server.php',
      method: 'POST',
      dataType: 'text',
      data: {
        getnotes: 1,
      },
      success: function (data) {
        //alert(data);
        $('#notes_holder').html(data);
      }
    })
}



  // add new note
 $(document).ready(function () {
    
$('#addnote').on('click', function (event) {
    
    var note = $("#note");
      event.preventDefault();
      if (checkForErrors(note)) {
        //alert("Here to add")
        $.ajax({
          url: 'server/server.php',
          method: 'POST',
          dataType: 'text',
          data: {
            newnote: 1,
            note: note.val()
          },
          success: function (data) {
            alert(data);
            displayData();
            $("#note").val('');
          }
        });
      }
    })
  });


  // erase note
  function eraseNote(noteID) {
    
    if (confirm('Are you sure?')) {
      
      $.ajax({
        url: 'server/server.php',
        method: 'POST',
        dataType: 'text',
        data: {
          eraseNote: 1,
          noteID: noteID
        },
        success: function (response) {
          alert(response);
          displayData();
        }
      });
    }
  }

  
  

  //hidepop
  

  // display input field error
  function checkForErrors(caller) {
    if (caller.val() == '') {
      caller.css('border', '2px solid red');
      return false;
    } else
      caller.css('border', '');

    return true;
  }

  // user login
  $(document).ready(function(){
    var username = $("#username");
    var password = $("#password");
    $('#login').on('click', function(event){
    event.preventDefault();
        if(checkForErrors(username) && checkForErrors(password)){
            $.ajax({
            url: 'server/server.php',
            method: 'POST',
            dataType: 'text',
            data: {
                login: 1,
                username: username.val(),
                password: password.val()
            }, success: function (data) {
                if (data != 1) {
                    alert(data);
                    $("#error").append('<p id="temp">' + data + '</p>');
                }
                    //alert(data);
                    $("#username").val('');
                    $("#password").val('');
                    $("#temp").empty();
                    if(data==1){
                        window.location.replace("index.php");
                    }
                }
            });
        }        
    })
});

// user registration
$(document).ready(function(){
  var username = $("#username");
  var password = $("#password");
  var password_2 = $("#password_2");
  $('#registr').on('click', function(event){
  event.preventDefault();
  if (checkForErrors(username) && checkForErrors(password) && checkForErrors(password_2)) {
      //if (password.val() != password_2.val()) {
          //alert("Passwords dont match");
          //window.location.reload();
          //$("#error").append('<p>Passwords dont match</p>');
          //window.location.replace("register.php");
     // }
          $.ajax({
          url: 'server/server.php',
          method: 'POST',
          dataType: 'text',
          data: {
              registr: 1,
              username: username.val(),
              password: password.val(),
              password_2:password_2.val()
          }, success: function (data) {
              if (data != 1) {
                  alert(data);
                  $("#error").append('<p id="temp">'+data+'</p>');
              }
              
                  $("#username").val('');
                  $("#password").val('');
                  $("#password_2").val('');
                  $("#temp").empty();
                  if(data==1){
                     //window.location.replace("index.php");
                     window.location.replace("login.php");
                  }
              }
          });
      }        
  })
});
 
//popupform
function popupNote(ntID) {
    
    document.getElementById('pop').style.display = "block";
    var id = document.getElementById('popnote');
    id.setAttribute("nt_id", ntID);

}

//hidepopup
function hidepop() {
    var note = document.getElementById('popnote').value;
    var noteID = document.getElementById('popnote').getAttribute('nt_id')
    //alert('update');
    
    document.getElementById('pop').style.display = "none";
    $.ajax({
        url: 'server/server.php',
        method: 'POST',
        dataType: 'text',
        data: {
            hidepop: 1,
            noteID: noteID,
            note: note
        },
        success: function (response) {
            alert(response);
            displayData();
        }
    });
}


// funny text box
/*var maxX;
var maxY;

 $(".leftcolumn").mousemove(function( event ) {   
  var clientCoords = "( " + event.clientX + ", " + event.clientY + " )";
  maxX = event.clientX;
  var maxY=event.clientY
  //console.log(clientCoords);
}); 
var x;
var y;

function randNumb(min, max) {
  return Math.floor(Math.random() * (max - min + 1)) + min;
}
 

$("#no").hover(function(){
  if ($(window).width() > 901) {
    x = randNumb(20, 230);
    y = randNumb(500,650);
  }
  else if($(window).width() > 701 && $(window).width() < 901) {
    x = randNumb(20, 800);
    y = randNumb(470, 500);
  } else if($(window).width() > 501 && $(window).width() < 701) {
    x = randNumb(20, 450);
    y = randNumb(470, 500);
  }else if($(window).width() < 501){
    x = randNumb(10, 300);
    y = randNumb(470, 500);
  }

  $(this).offset({top:y, left:x});
}); 

$("#yes").click(function(){
  alert("Thank you :)");
});*/




