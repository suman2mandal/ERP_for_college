 <!DOCTYPE html>
<head>
<title>Logout</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="deconav.css" />
  <link rel="stylesheet" type="text/css" href="style.css" />
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

input[type=text] {
  color: black;
}
.content{
background: black;
width: 50%;
padding: 5px;
margin: 100px auto;
font-family: georgia,garamond,serif;
border-radius: 10px;
color: white;
}

p{
font-size: 25px;
color: white;
}

td{
color: white;
}

</style>
</head>

<nav class="navbar navbar-custom">
  <div class="container-fluid">
    <div class="navbar-header">
	<img src="logomu.jpg"></img>
    </div>
    <ul class="nav navbar-nav navbar-right">
	  <li><a href="http://localhost/tutorials/authentication/login.html"> Admins Portal</a></li>
      <li><a href="http://localhost/tutorials/authentication/stulog.php"> Students portal</a></li>
      <li><a href="http://localhost/tutorials/authentication/teachlog.php">Teacher's Portal</a></li>
      <li><a href="http://localhost/tutorials/authentication/liblog.php">Librarian's Portal</a></li>
  	  <li><a href="http://localhost/tutorials/authentication/logout.php">Logout</a></li>
    </ul>
  </div>
</nav>

<body>
Go to <li><a href="http://localhost/tutorials/authentication/nav.html">Home</a></li>
 
</body>
</html>


<?php
session_start();
if(isset($_SESSION['username'])) {
echo "You have now logged out " . $_SESSION["username"];
$username=$_SESSION['username'];

// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 
} else{
	$messagee = "Not logged in yet";
	echo "<script type='text/javascript'> alert('$messagee'); </script> ";
}

?>