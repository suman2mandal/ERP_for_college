<?php
    if(isset($_POST['username']) and isset($_POST['password'])) {


      if( isset($_SESSION["username"]) && isset($_SESSION["password"])){
        header('Location: admin.html');
      }else{
        $_SESSION["username"] = $_POST['username'];
        $_SESSION["password"] = $_POST['password'];
        header('Location: admin.html');
      }

    }else{
      
    }
    
?>
<!DOCTYPE html>
<head> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="deconav.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-1.11.3.min.js">
</script> 
<style type="text/css">
body{
background-image:url(ohh.jpg);
background-size:cover;
background-attachment: fixed;
}

.content{
background: black;
width: 50%;
padding: 40px;
margin: 100px auto;
font-family: georgia,garamond,serif;
border-radius: 10px;
color: white;
}

p{
font-size: 25px;
color: white;
}

legend{
color: white;
}
button{
color: black;
}

input[type=text] {
  color: black;
}

input[type=password] {
  color: black;
}

</style>
</head>

<nav class="navbar navbar-custom">
  <div class="container-fluid">
    <div class="navbar-header">
	<img src="logomu.jpg"></img>
    </div>
    <ul class="nav navbar-nav navbar-right">
	  <li><a href="http://localhost/tutorials/authentication/login.php"> Admins Portal</a></li>
      <li><a href="http://localhost/tutorials/authentication/stulog.php"> Students portal</a></li>
      <li><a href="http://localhost/tutorials/authentication/teachlog.php">Teacher's Portal</a></li>
      <li><a href="http://localhost/tutorials/authentication/liblog.php">Librarian's Portal</a></li>
    </ul>
  </div>
</nav>

<form class="content" method="POST" action="login.php">
   <legend>Log In</legend>
       <label for="username">Username: </label>
       <input name="username" id="username" type="text">

       <label for="password">Password: </label>
       <input name="password" id="password" type="password"><br>

       <tr><td> <button type="submit" name="login" class="btn btn-success" value="login">Log In</button></td> </tr>

</form>

<!-- <script type="text/javascript"> 
var users = [
    { username: 'user1', password: 'pass1' },
    { username: 'user2', password: 'pass2' },
    { username: 'user3', password: 'pass3' }
];

var button = document.getElementById('login');

button.onclick = function() {
   var username = document.getElementById('username').value;
   var password = document.getElementById('password').value; 

   for (var i = 0; i < users.length; i++) {
      if(username == users[i].username && password == users[i].password) {
         window.location.href = 'http://localhost/tutorials/authentication/admin.html';
         break;
      }else{
         alert('You are trying to break in!');
      }
   }
}
</script> -->
</html>
