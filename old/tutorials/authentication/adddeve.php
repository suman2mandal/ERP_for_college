<!DOCTYPE html>
<head>
<title>ADD EVENT</title>
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

input[type=text] {
  color: black;
}

input[type=password] {
  color: black;
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
    </ul>
  </div>
</nav>

<body>
<div class="content">
<h1>ADD EVENT</h1>

<form method="POST" action="adddeve.php">
  <table>
  <tr>
    <td>Event&nbspid&nbsp</td>
    <td><input type="text" name="Eve_id" class="textInput" required></td>
   </tr>
   <tr>
    <td>Event&nbspname&nbsp</td>
    <td><input type="text" name="Eve_name" class="textInput" required></td>
   </tr>
    <tr>
    <td>Event&nbspdescription&nbsp</td>
    <td><input type="text" name="Eve_des" width="48" height="48" class="textInput" required></td>
   </tr>
    <tr>
    <td>Event&nbspdate&nbsp</td>
    <td><input type="date" name="Eve_date" class="date" required style="color:black"></td>
   </tr>
    <tr>
    <td>Event&nbspnumber&nbsp</td>
    <td><input type="text" name="Eve_no" class="textInput" required></td>
   </tr>
    <tr><td> <button type="submit" name="register_btn" class="btn btn-success" value="Submit">Submit</button></td> </tr>

  </table>
 </form>
 <?php
if(isset($_POST['register_btn'])) {
  /* Attempt MySQL server connection. Assuming you are running MySQL
  server with default setting (user 'root' with no password) */
    $link = mysqli_connect("localhost", "root", "", "authentication");
    
  // Check connection
  if($link === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  
  $Eve_id = mysqli_real_escape_string($link,$_POST['Eve_id']);
  $Eve_name = mysqli_real_escape_string($link,$_POST['Eve_name']);
  $Eve_des = mysqli_real_escape_string($link,$_POST['Eve_des']);
  $Eve_date = mysqli_real_escape_string($link,$_POST['Eve_date']);
  $Eve_no = mysqli_real_escape_string($link,$_POST['Eve_no']);
  

    $Eve_id = $_POST['Eve_id'];
    $Eve_name = $_POST['Eve_name'];
    $Eve_des = $_POST['Eve_des'];
    $Eve_date = $_POST['Eve_date'];
    $Eve_no = $_POST['Eve_no'];

  // $sql = "INSERT INTO event Eve_id='$Eve_id', Eve_name='$Eve_name', Eve_des='$Eve_des', Eve_date='$Eve_date' WHERE Eve_no='$Eve_no'";
  
  $sql = "INSERT INTO event(Eve_id, Eve_name, Eve_des, Eve_date, Eve_no)VALUES('$Eve_id', '$Eve_name', '$Eve_des', '$Eve_date', '$Eve_no')";
  if(mysqli_query($link, $sql)){
      echo "<h1 color:'white'>Records were updated successfully.</h1>";
  } else {
      echo "<h1 color:'white'>ERROR: Could not able to execute $sql. </h1>" . mysqli_error($link);
  }
  
  // Close connection
  mysqli_close($link);
}
?>

</div>
</body>
</html>
