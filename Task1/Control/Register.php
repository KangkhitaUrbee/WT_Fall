<?php
$name_error=$nid_error= $num_error=$genderError=$pass_error=$emailerror="";
$name=$email=$mobileno=$nid=$gender=$length="";

 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
      //validation for name

    if (empty ($_POST["name"])) {  
      $name_error= "please enter your Name.";  
               echo $name_error;  
  } else {  
      $name = $_POST["name"];  
  } 

 //validation for mobile number
    
      $mobileno= $_POST["mobileno"];  
      $pattern = '/[0-9]{10}/';
   if (!preg_match ($pattern,$mobileno) ){  
    $num_error = " Invalid mobile Number.";  
  echo $num_error;  
   } else {  
       echo "Your valid mobile Number is : " .$mobileno;  
   }  
  //validation for gender


if (empty ($_POST["gender"])) {  
  $genderError = "Gender is required";  
} else {  
  $gender = input_data($_POST["gender"]);  
} 


  //validation for NID
  
if ( $length < 13 && $length > 13) {  
  $nid_error = "NID number should be 13 digits .";  
            echo   $nid_error;  
} else {  
    echo "Your NID number is: ".$nid;  
}  
  
  //validation for email 

   $email = $_POST["email"];  
   $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
   if (!preg_match ($pattern, $email) ){  
    $emailerror = "Email is not valid.";  
  echo  $emailerror;  
   } else {  
       echo "Your valid email address is: " .$email;  
   }  


}

function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
   }
  ?>


