<?php

session_start(); 
if(empty($_SESSION["sname"])) 
{
header("Location:login.php"); 
}

?>

<html>
    <head>
        <title> Review  </title>
</head>
<body>
<h1> Visit this page to see reviews </h1>

<h4> <a href="supervisor.php">Home</a></h4>

</body>
</html>