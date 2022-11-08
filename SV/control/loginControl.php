<?php
session_start(); 

$errorName=$errorPass=$error="";
$count=0;

if(isset($_POST["submit"]))	
{

$sname=$_REQUEST["sname"]; 
$password=$_REQUEST["password"];


if(empty($sname))
{
    $errorName="You Must Enter Valid sname";
}

if(strlen($password)<6 || empty($password))
{
    $errorPass="Password Must Contain 8 character!!" ;
}


if($errorName=="" && $errorPass=="")
{
    $data = file_get_contents("../data/data.json");
    $data = json_decode($data);
  

    foreach($data as $object)
    {
        $count++;
    }

    for($i=0;$i<$count;$i++)
    {
        if($data[$i]->sname==$sname && $data[$i]->Password==$password) 
        {
            $Name=$data[$i]->Name;
            $_SESSION["sname"]=$data[$i]->sname;
            $_SESSION["password"]=$data[$i]->Password;
            header("location: ../view/supervisor.php");
        }
        else
        {
        $error="sname or password invalid";
        }

    }
     
}

}

?>