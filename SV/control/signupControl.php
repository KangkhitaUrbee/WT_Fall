<?php

$error=$radioGender=$nameError=$errorsName=$errorPass=$errorEmail=$errorContact=$errorGender=$errorAddress=$errorFile=$sNameTaken="";
{

// store session data
if (isset($_POST['submit'])) 

if (empty ($_POST["name"])) {  
    $nameError= "please enter your Name.";  
             echo $nameError;  
} else {  
    $name = $_POST["name"];  
} 

	if(isset($_REQUEST["gender"]))
	{
		$radioGender= "Gender - ".$_REQUEST["gender"];
	}
	else
	{
		$errorGender= " Please Select Your Gender";
		$Error=true;
	}
    
    if (empty($_POST['address']))
    {
        $errorAddress = "Invalid Address was Provided";
    }
    
    if (empty($_POST["email"])) 
    {
        $errorEmail = "Email is required";
    } 
    else 
    {
        $email = $_POST["email"];
        if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email)) 
        {
            $errorEmail = "Email format is Invalid";
        }
    }
    if (empty($_POST['contact'])) 
    {
        $errorContact = "Contact is required";
    }
    else
    {
        $contact = $_REQUEST["contact"];
        if (strlen($contact)!=11 && strlen($contact)!=14)
        {
            $errorContact = "Invalid contact format";
        }
    }
	if (empty($_POST['password'])) 
    {
        $errorPass = "Password is required";
    }
    else
    {
        $password=$_POST['password'];
        if (!preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $password))
        {
            $errorPass = "Invalid Password was Provided";
        }
    }
	if (isset($_FILE['picup'])) 
	{
		$errorFile = "No Picture was Provided";
	}

	
if ( $nameError=="" && $errorsName=="" && $errorGender=="" && $errorEmail=="" && $errorContact=="" && $errorAddress=="" && $errorPass=="" && $errorFile=="")
{
	$Name=$_REQUEST["name"];
	$sname=$_REQUEST["sname"];
	$Email=$_REQUEST["email"];
	$Password=$_REQUEST["password"];
	$Address=$_REQUEST["address"];
	$Contact=$_REQUEST["contact"];
	$Name=$_REQUEST['name'];
	$formdata = array(
        'Name'=> "$Name",
		'sname'=> "$sname",
		'Gender'=>"$radioGender",
        'Email'=> "$Email",
        'Password'=>"$Password",
        'Phone'=>"$Contact",
        'Address'=>"$Address",
     );
    
    
     $existingdata = file_get_contents('../data/data.json');
     $tempJSONdata = json_decode($existingdata);
     $tempJSONdata[] =$formdata;
     //Convert updated array to JSON
     $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
     
     //write json data into data.json file
     if(file_put_contents("../data/data.json", $jsondata)) {
          echo "Data successfully saved <br>";
      }
     else 
          echo "no data saved";
    
    
}



}

?>