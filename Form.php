<?php
?>
<html>
    <head>
        <title>Form</title>
</head>
    <h1 align="center">Supervisor Registration Form</h1>
    <br>
<form action="" method="post" >
<table align="center">
        <tr>
    <td>First Name</td>
   <td> <input type="text" name="firstname" placeholder="Enter your first name"></td>
   
</tr>

<td>Middle Name</td>
   <td> <input type="text" name="middlename" placeholder="Enter your middle name"></td>
</tr>

<tr>
    <td>Last Name</td>
    <td><input type="text" name="lastname"placeholder="Enter your last name"></td>
</tr>

<tr>
    <td>Father's Name</td>
    <td><input type="text" name="fathername"placeholder="Enter your father's name"></td>
</tr>
<tr>
    <td>Mother's Name</td>
    <td><input type="text" name="mothername"placeholder="Enter your mother's name"></td>
</tr>
<tr>
<br>
    <td>Date of birth</td>
    <br>
    <td><input type="date" name="dob"></td>
</tr>
<tr>
<td>Gender</td>                                                               
    <td>
        <input type="radio" name="gender">Male
    </td>
    <td>
    <br>
 <input type="radio" name="gender">Female
    </td>
</tr>
    <tr>
    <td>Email ID</td>
    <td><input type="text" name="mailaddress"></td>
    
</tr>
<tr>
    <td>Mobile No.</td>
    <td><input type="text" name="mobileno"></td>
 
</tr>
<tr>
    <td>Address</td>
    <td><input type="text" name="address"></td>
    
</tr>

    <tr>
    <td>Birth Certificate</td>
    <td><input type="text" name="birthcertificate"></td>
</tr>

    <tr>
        <td>Password</td>
       <td> <input type="password" name="password"> </td>
    </tr>

    <tr>
        <td>Confirm Password</td>
       <td> <input type="password" name="confirmpassword"> </td>
    </tr>

</table>
<br>
<h4 align="center"><input type="submit" name="register" value="Register"></h4>
</form>
</body>
</html>
