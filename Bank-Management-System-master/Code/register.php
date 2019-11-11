
<?php

$serverName = "localhost";
// as the default server name is localhost
$username = "root";
// as the default username is root
$password = "root";
// as the default password is blank
$databaseName = "bmu_bank";
// the created database name is codescrackerTwo
$conn = mysqli_connect($serverName, $username, $password, $databaseName);
if(mysqli_connect_error())
{
echo "<p>There is an error occurred during the database connection.</p>";
echo "<p>Please try again after some time</p>";
echo "<p>Exiting....</p>";
exit();
}
?>
<html>
<head>
<title>PHP and MySQLi Insert Data into Table Example</title>
</head>
<body>
<?php
if($_POST['submit']){
$tableName = "employees";
$email=$_POST['emailid'];
$passw=$_POST['password'];
$sqlQuery = "insert into $tableName(emailid, password)
values('$email', '$passw');";
$retRes = $conn->query($sqlQuery);
if($retRes)
{
echo "<p>Data successfully inserted into the table.</p>";
}
else
{
echo "<p>Some error occurred during inserting the data into
the table...exiting...</p>";
exit();
}
}
?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>BMU Bank</title>
  <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

  <header>
    <div class="container">
      <div id=result>
      <h4 align ="center">Result</h4>
      <a href="register.php" class="start"><input type="submit" value="Sign Up"></a>
      <a href="login.php" class="start"><input type="submit" value="Login"></a>
    </div>
    </div>
  </header>


    <div class="container">

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($employeename_err)) ? 'has-error' : ''; ?>">
              <div id="pas">
                <label>employee name</label>

                <input type="text" name="employeename" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $employeename_err; ?></span>
              </div>
            </div>

            <div class="form-group <?php echo (!empty($loginid_err)) ? 'has-error' : ''; ?>">
              <div id="pas">
                <label>Login id</label>

                <input type="text" name="login id" class="form-control" value="<?php echo $loginid; ?>">
                <span class="help-block"><?php echo $loginid_err; ?></span>
              </div>
            </div>

            <div class="form-group <?php echo (!empty($emailid_err)) ? 'has-error' : ''; ?>">
              <div id="pas">
                <label>Email Id</label>

                <input type="text" name="emailid" class="form-control" value="<?php echo $emailid; ?>">
                <span class="help-block"><?php echo $emailid_err; ?></span>
              </div>
            </div>

            <div class="form-group <?php echo (!empty($contactno_err)) ? 'has-error' : ''; ?>">
              <div id="pas">
                <label>Contact No</label>

                <input type="text" name="contactno" class="form-control" value="<?php echo $contactno; ?>">
                <span class="help-block"><?php echo $contactno_err; ?></span>
              </div>
            </div>




            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <div id="pas">
                <label>Password</label>

                <input type="text" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
              </div>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <div id="pas">
                <label>Confirm Password</label>
                <input type="text" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
              </div>
            </div>
            <div class="form-group">
                <div id="pas">
                <input type="submit" class="btn btn-primary" value="Submit" name="submit">
                <input type="reset" class="btn btn-default" value="Reset">

              </div>
            </div>

            <div id="out">
                          <p>Already have an account? <a href="login.php">Login here</a>.</p>
                        </div>
        </form>
    </div>
</body>
</html>
