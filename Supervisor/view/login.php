<?php
include('../control/loginControl.php');

if(isset($_SESSION['sname']))
{
header("location: supervisor.php");
}
?>
<!DOCTYPE html>
<html>
<body>
<body style="background-color:#a4c3d2;"> 
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" >
    <table align="center">
<head>
<title>Login</title>
</head>

<body> 
<h2>Login</h2>

<form name="Form" action="" method="post">
<input type="text" name="sname" placeholder="Enter your sname" > <?php echo $errorName; ?> <br> <br>
<input type="password" name="password" placeholder="Enter your password" > <?php echo $errorPass; ?> <br> <br>  
<input name="submit" type="submit" value="LOGIN">
</form>
<br>
<?php echo $error; ?> <br>

If you don't have a account <a href="signup.php">SignUp Here</a>
<br> <br>
</body>
</html>