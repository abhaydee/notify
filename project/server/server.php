<?php 
session_start();
include('db.php');
$errors = array(); 

if(isset($_POST['login'])){
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    $password = md5($password);
    $sql = "SELECT * FROM users WHERE UserName = '$username' AND password = '$password'";
    $result = $db->query($sql);    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $_SESSION['userid'] = $row["UserID"];
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            exit ('1'); 
        }
    } else {
        exit('username or password doesnt match'); 
    }
}
 
if(isset($_POST['registr'])){
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
	$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

	
  if ($password != $password_2) {
	//array_push($errors, "The two passwords do not match");
	exit("Passwords dont match");
  }

  $user_check_query = "SELECT * FROM users WHERE UserName='$username' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['UserName'] === $username) {
      //array_push($errors, "Username already exists");
	  exit("Username already exists");
    }
  }

  if(count($errors)>0){
  	  //include('error.php');
	  exit("Error");
  }

  if (count($errors) == 0){
		$password = md5($password);
		$sql = "INSERT INTO users (UserName, Password)
        VALUES ('$username', '$password')";
  
        if ($db->query($sql) === TRUE) {
            exit ('1');
        } else {
			//array_push($errors,"Error: " . $sql . "<br>" . $db->error);
            exit("Error: " . $sql . "<br>" . $db->error);
        } 

  }
  
    
    /*$sql = "SELECT * FROM users WHERE UserName = '$username'";
    $result=$db->query($sql);
    if($result->num_rows > 0){
		array_push($errors, "Username already exists");
        //exit('user name already exist in db!');
    }else{
        //https://www.w3schools.com/php/php_mysql_insert.asp     
        $sql = "INSERT INTO users (UserName, Password)
        VALUES ('$username', '$password')";
  
        if ($db->query($sql) === TRUE) {
            exit ('1');
        } else {
            exit("Error: " . $sql . "<br>" . $db->error);
        }        
    }*/        	 
}

// add new note
if(isset($_POST['newnote'])){
    $note = mysqli_real_escape_string($db, $_POST['note']);
    $userid = $_SESSION['userid'];
    $sql = "INSERT INTO notes (UserID, Note)
    VALUES ('$userid', '$note')";

    // execute query
    if ($db->query($sql) === TRUE) {
        exit ('new note added');
    } else {
        exit("Error: " . $sql . "<br>" . $db->error);
    }                 	 
}

// get notes 
if(isset($_POST['getnotes'])){
$username = $_SESSION['username'];
$userid = $_SESSION['userid'];

$sql = ("SELECT * FROM notes WHERE UserID = '$userid'");
    // execute query
    if ($result=mysqli_query($db,$sql))
    {
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                ?>                                  
                  <tr>
                    <td><div id="<?php echo $row["NoteID"]?>"><?php echo $row["Note"] ?></div></td>  
                    <td><input type="button"   class="btn del" onclick="eraseNote(<?php echo $row["NoteID"]?>)" value="Delete" ></td>
					<td><input type="button"   class="btn del" onclick="popupNote(<?php echo $row["NoteID"]?>)" value="Edit" ></td>
                    </tr>                           
                <?php           
            }
            exit();
        } else {
            exit('no notes in db!');
        }        
    }    
}

// erase note
if(isset($_POST['eraseNote'])){
    $noteID = mysqli_real_escape_string($db, $_POST['noteID']);

    // sql to delete a record
    $sql = "DELETE FROM notes WHERE NoteID=$noteID";
    
    // execute query
    if ($db->query($sql) === TRUE) {
        exit ("Note deleted successfully!");   
    } else {
        exit ("Error deleting record: " . $conn->error);      
    }      
}

if(isset($_POST['hidepop'])){
	$noteID = mysqli_real_escape_string($db, $_POST['noteID']);
	$note = mysqli_real_escape_string($db, $_POST['note']);
	$sql = "UPDATE notes SET Note='$note' WHERE NoteID=$noteID";
	if($db->query($sql) === TRUE){
		exit("successfully updated");
	}else{
		exit("update failed" . $db->error);
	}
	//exit("id " . $noteID . "note " . $note);
}

?>

