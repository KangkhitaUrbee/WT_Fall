<?php 
session_start(); 
if(empty($_SESSION["sname"])) 
{
header("Location:login.php"); 
}
include('../control/profileControl.php'); 
?>
<!DOCTYPE html>
<html>

<body>
<body style="background-color:#a4c3d2;"> 
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" >
    <table align="center">

<h1> SUPERVISOR PROFILE </h1>
<form name="prOile" action="" method="post">
<br>
<label> 
Name : <?php echo $names; ?> <br>
<br><br>
sname : <?php echo $snames; ?> <br>
<br><br>
Gender : <?php echo $gender; ?> 
<br><br>

Email : <?php echo $emails; ?> <br>
<br><br>
Contact : <?php echo $contacts; ?> <br>
<br><br>
Image :<?php echo $errorFile?> 
<br><br>
Address : <?php echo $addresss; ?> <br>
<br><br>
Password : <?php echo $passs; ?> <br>
<br>

<br>
</form>

<h4> <a href="customer.php">Home</a></h4>
<h4> <a href="../control/logout.php">Log Out</a></h4>

</body>
</html>