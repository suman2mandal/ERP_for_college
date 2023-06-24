<!DOCTYPE html>
<head>
<title>ADD fees</title>
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

td{
color: white;
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
	  <li><a href="http://localhost/tutorials/authentication/login.html"> Admins Portal</a></li>
      <li><a href="http://localhost/tutorials/authentication/stulog.php"> Students portal</a></li>
      <li><a href="http://localhost/tutorials/authentication/teachlog.php"> Teacher's Portal</a></li>
      <li><a href="http://localhost/tutorials/authentication/liblog.php"> Librarian's Portal</a></li>
    </ul>
  </div>
</nav>

<body>
<div class="content">
<h1>ADD fees</h1>

<form method="POST" action="addfees.php">
  <table>
  <tr>
    <td>Rollno :</td>
    <td><input type="text" name="Rollno" class="textInput" required></td>
   </tr>
   <tr>
    <td>fees:</td>
    <td><input type="text" name="fees" class="textInput" required></td>
   </tr>
   
   <tr><td> <button type="submit" name="register_btn" class="btn btn-success" value="Submit">Submit</button></td> </tr>

  </table>
 </form>
 <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

$link = mysqli_connect("localhost", "root", "", "authentication");
 
if(isset($_POST['register_btn'])) {
  // Check connection
  if($link === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  
    $Rollno = mysqli_real_escape_string($link,$_POST['Rollno']);
    $fees = mysqli_real_escape_string($link,$_POST['fees']);

    $Rollno = $_POST['Rollno'];
    $fees = $_POST['fees'];

  $sql = "UPDATE users SET fees='$fees' WHERE Rollno='$Rollno'";
  if(mysqli_query($link, $sql)){
    echo "<h1 style='color:white'>Records were updated successfully</h1>";
      
  } else {
    echo "<h1 style='color:white'>Records already exists</h1>";
      
    }
  
  // Close connection
  mysqli_close($link);
}
?>
</div>

</body>
</html>
