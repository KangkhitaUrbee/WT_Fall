<?php

session_start(); 
if(empty($_SESSION["sname"])) 
{
header("Location:login.php"); 
}

?>

<html>
    <head>
        <title>delivery man</title>
</head>
<body>
<h1> Visit this page to see delivery man </h1>

<h4> <a href="supervisor.php">Home</a></h4>

</body>
</html>