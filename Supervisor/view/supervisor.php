<?php
session_start(); 
if(empty($_SESSION["sname"])) 
{
header("Location:login.php"); 
}
else
{
    $cookie_value=$_SESSION["sname"];
}
$cookie_name = "supervisor";

setcookie($cookie_name, $cookie_value, time() + (96600 * 30), "/");
?>
<!DOCTYPE html>
<html>
<head>
<title>Supervisor</title>
        <style>
        .error {
            color: #ff0000;
        }
        </style>
</head>
<body>
<body style="background-color:#a4c3d2;"> 
<?php
if(!isset($_COOKIE[$cookie_name])) {
echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
echo "Cookie '" . $cookie_name . "' is set!<br>";
echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

<h1 align="center">" WELCOME TO OUR WEBSITE </h1>
<h2 align="center"> supervisor Registration Form </h2> <br> 
<a href="profile.php"> <input name="profile" type="submit" value=" PROFILE "> </a>
<br> <br>
<a href="customer.php"> <input name="customer" type="submit" value="See customer"> </a>
<br> <br>
<a href="deliveryman.php"> <input name="deliveryman" type="submit" value="See delivery man"> </a>
<br> <br>
<a href="review.php"> <input name="review" type="submit" value="See Reviews"> </a>
<br><br>
<a href="../control/logout.php"> <input name="logOut" type="submit" value="LOG OUT"> </a>
<br>
<br>
</div>
</body>
</html>

<?php


?>   