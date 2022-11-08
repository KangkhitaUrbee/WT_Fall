<?php
  include("../Control/Register.php");
?>

<html>
    <head>
        <title>Form</title>
        <style>
        .error {
            color: #ff0000;
        }
        </style>
    </head>


<body style="background-color:#E6E6FA;"> 
    <h1 align="center">Supervisor Registration Form</h1>
    <br>
    <br>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" >
    <table align="center">

    <tr>
    <td>Full Name</td>
    <td><input type="text" name="name"placeholder="Enter your name"><span class="error">*<?php echo  $name_error; ?></span></td>
    </tr>

<tr>
    <td>Father's Name</td>
    <td><input type="text" name="fathername"></td>
</tr>
<tr>
    <td>Mother's Name</td>
    <td><input type="text" name="mothername"></td>
</tr>
<tr>
    <td>Date of birth</td>
    <td><input type="date" name="dob"></td>
</tr>

<tr>
<td>Gender</td> 
<br><br>
<td>
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <span class="error">*<?php echo $genderError; ?></span>
        </td>
</tr>

    <tr>
    <td>Email ID</td>
    <td><input type="text" name="email"><span class="error">*<?php echo $emailerror; ?></span></td>
    
</tr>
<tr>
    <td>Mobile No.</td>
    <td><input type="text" name="mobileno"><span class="error">*<?php echo $num_error; ?></span></td>
</tr>
<tr>
    <td>Address</td>
    <td><textarea name="address" rows="5" cols="20"></textarea></td>

    <tr>
    <td>Nationality</td>
    <td><input type="text" name="nationality"></td>
</tr>

    <tr>
    <td>NID Number</td>
    <td><input type="text" name="nid"><span class="error">*<?php echo $nid_error; ?></span></td>
</tr>
<tr><td>Upload Image</td>
<td>
    <input type="file"></td>

    <tr>
        <td>Password</td>
       <td> <input type="password" name="password"> </td>
       <td><?php echo $pass_error;?></td>
    </tr>

    <tr>
        <td>Re-type Password</td>
       <td> <input type="password" name="rpassword"> </td>
    </tr>

</table>
<br>
<h4 align="center"><input type="submit" name="register" value="Register"></h4>
</form>

<?php
    echo "<h2>Your Input:</h2>";
    echo $name;
    echo "<br>";
    echo $name_error;
    echo "<br>";
    echo $gender;
    echo "<br>";
    echo $genderError;
    echo "<br>";
    echo  $email ;
    echo "<br>";
    echo  $emailerror ;
    echo "<br>";
    echo $nid;
    echo "<br>";
    echo $nid_error;
    echo "<br>";
    echo $mobileno;
    echo "<br>";
    echo $num_error;
    echo "<br>";
    
    ?>
  <script src="" async defer></script>
</body>
</html>