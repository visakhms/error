


<?php

include('connect.php');

  try{
    
      if(isset($_POST['signup'])){

        if(empty($_POST['email'])){
          throw new Exception("Email cann't be empty.");
        }

        if(empty($_POST['uname'])){
           throw new Exception("Username cann't be empty.");
        }

        if(empty($_POST['pass'])){
           throw new Exception("Password cann't be empty.");
        }
        
        if(empty($_POST['fname'])){
           throw new Exception("Username cann't be empty.");
        }
        if(empty($_POST['phone'])){
           throw new Exception("Username cann't be empty.");
        }
        if(empty($_POST['type'])){
           throw new Exception("Username cann't be empty.");
        }

        $result = mysql_query("insert into admininfo(username,password,email,fname,phone,type) values('$_POST[uname]','$_POST[pass]','$_POST[email]','$_POST[fname]','$_POST[phone]','$_POST[type]')");
        $success_msg="Signup Successfully!";

  
  }
}
  catch(Exception $e){
    $error_msg =$e->getMessage();
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Online Attendance Management System 1.0</title>
<meta charset="UTF-8">
  
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
   
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
   
  <link rel="stylesheet" href="styles.css" >
   
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<header>

  <h1>Online Attendance Management System 1.0</h1>

</header>
<center>
<h1>Signup</h1>
<div class="content">

  <div class="row">
    <?php
    if(isset($success_msg)) echo $success_msg;
    if(isset($error_msg)) echo $error_msg;
     ?>
   Old version started
   <form action="" method="post">
      
      <table>
        
        <tr>
          <td>Email</td>
          <td><input type="text" name="email"></td>
        </tr>
        <tr>
          <td>Username</td>
          <td><input type="text" name="uname"></td>

        </tr>
        <tr>
          <td>Password</td>
          <td><input type="Password" name="pass"></td>
        </tr>

        <tr>
          <td>Full Name</td>
          <td><input type="text" name="fname"></td>
        </tr>

        <tr>
          <td>Phone Number</td>
          <td><input type="text" name="phone"></td>
        </tr>

        <tr>
          <td>Type</td>
          <td>      <select name="type">
        <option name="teacher" value="teacher">Teacher</option>
        <option name="student" value="student">Student</option>
      </select></td>
        </tr>

        <tr><td><br></td></tr>
        <tr>
          <td></td>
          <td><input type="submit" name="signup" value="Signup"></td>
        </tr>

      </table>
    </form>

    </center>
</body>
</html>
