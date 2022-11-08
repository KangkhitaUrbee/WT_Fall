<?php   include "..\control\signupControl.php" ; ?>

<!DOCTYPE html>
<html>
<head>
<title>Signup</title>
        <style>
        .error {
            color: #ff0000;
        }
        </style>
</head>
<body>
<body style="background-color:#a4c3d2;"> 
    <h1 align="center">Supervisor Registration Form</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" >
    <table align="center">
    <br>
Name:
           <input type="text" name="name" placeholder=" Your full name here." > <span class="error">*<?php echo $nameError; ?></span>
<br>
<br>  
Surname: 
            <input type="text" name="sname" placeholder="Your surname here." ><span class="error">* <?php echo $errorsName; ?></span> <br>
<br>
<br>  
Date of birth:
    <input type="date" name="dob">
    <br>
    <br>
Gender: <span class="error">*<?php echo $errorGender; ?></span>
        <br><input type="radio" name="gender" value="female">Female
        <br> <input type="radio" name="gender" value="male">Male
        <br> <input type="radio" name="gender" value="other">Other
        
<br>
<br>
Email: 
           <input type="text" name="email" placeholder="Your email address here."><span class="error">* <?php echo $errorEmail; ?></span> <br>
<br>
<br>
Mobile Number: 
                 <input type="text" name="contact" placeholder="Your mobile no here." ><span class="error">* <?php echo $errorContact; ?></span> <br>
<br>
<br>
Address:
                <input type="text" name="address" placeholder="Your address here." > <?php echo $errorAddress; ?> <br>
<br>
<br>
Password: 
            <input type="password" name="password" placeholder="Your password here."><span class="error">*  <?php echo $errorPass; ?></span> <br>
<br>
<br>
Add Picture: 
           <input type="file" name="picup"placeholder="Your picture here."> <?php echo $errorFile; ?>
<br> 
<br>
<h4 align="center"><input name="submit" type="submit"   value=" SIGN UP"><input name="reset" type="reset"value="RESET"></form>
<?php echo $error; ?><a href="login.php"><br><input name="login" type="submit" value="LOG IN"> </a></h4<br>
</body>
</html