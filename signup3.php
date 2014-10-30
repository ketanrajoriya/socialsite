<?php
error_reporting('ERROR');
session_start();
$_SESSION['username']=$firstname;
mysql_connect("localhost","root","");
//session_unset($_REQUEST['uid']);
?>

<?php

	/*$createdb="create database useraccounts";
	$qr=mysql_query($createdb);
if(!$qr)
	{
		die("database not created try again!!");}
		else
		{
			echo"database created";
			}
			
	//header("location:welcome.php");
	
	$selectdb=mysql_select_db("useraccounts");
	$createtbl="create table users(firstname varchar(55),lastname varchar(55),emailid varchar(55),password varchar(55),confirmpassword varchar(55),mobileno BigInt(20),gender varchar(55),dateofbirth varchar(55), country varchar(55))";
	$qr1=mysql_query($createtbl);
*/
?>

<?php
//$username=$_REQUEST['username'];
//$password=$_REQUEST['password'];
$firstname=$_REQUEST['firstname'];
$lastname=$_REQUEST['lastname'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$confirm_password=$_REQUEST['confirm_password'];
$national_code=$_REQUEST['national_code'];
$mobileno=$_REQUEST['mobileno'];
$sex=$_REQUEST['sex'];
$date=$_REQUEST['date'];
$country=$_REQUEST['country'];
$signup=$_REQUEST['signup'];

$insertdata="insert into users(firstname,lastname,emailid,password,confirmpassword,mobileno,gender,dateofbirth,country) values('$firstname','$lastname','$email','$password','$confirm_password','$mobileno','$sex','$date','$country')";

/*$insertdata="insert into users(fitrstname,lastname,emailid,password,confirmpassword,,mobileno,gender,dateofbirth,country) values('$firstname','$lastname','NULL','NULL','NULL','NULL','NULL','NULL','NULL')";*/
if($signup)
{
/*$createdb="create database useraccounts";
	$qr=mysql_query($createdb);
if(!$qr)
	{
		die("database not created try again!!");}
		else
		{
			echo"database created";
			}*/
			
	//header("location:welcome.php");
	
	$selectdb=mysql_select_db("useraccounts");
	$createtbl="create table users(firstname varchar(55),lastname varchar(55),emailid varchar(55),password varchar(55),confirmpassword varchar(55),mobileno BigInt(20),gender varchar(55),dateofbirth varchar(55), country varchar(55))";
	$qr1=mysql_query($createtbl);
	
	mysql_select_db("useraccounts");
	//mysql_select_db("useraccounts.users");
	if(!mysql_query($insertdata))
{
die("data not inserted".mysql_error());		
}
else
{
	header("location:homepage.php");
}
}
?>
<?php
if($signup)
{
	mkdir("userdata");
	mkdir("userdata/$email");
	mkdir("userdata/$email/userinfo");
	mkdir("userdata/$email/userinfo/profile_pic");
	mkdir("userdata/$email/userinfo/theme");
	
	
	}





?>
<html>
<head>
<title>
signup</title></head>
<body>
<form method="post">
<table align="center" border="0" height="450px">

<tr><td>&nbsp; </td></tr>

<tr><td style="color:#09f; font-size:25px;  font-family:Verdana, Geneva, sans-serif" > Sign Up<hr width="140%"></td></tr>

<tr><td> <input type="text" name="firstname" required="required"  placeholder=" First Name" style="height:30px" /></td>
<td > <input type="text" name="lastname" placeholder=" Last Name" style="height:30px" required="required" size="17"></td></tr>

<tr><td colspan="2"><input type="Email" name="email" size="47" placeholder=" Your Email (someone@example.com)" required="required" style="height:30px"></td></tr>

<tr><td colspan="2"><input type="password" name="password" placeholder=" Password" size="47" required="required" style="height:30px"></td></tr>

<tr><td colspan="2"><input type="password" name="confirm_password" placeholder=" Confirm Password" size="47" required="required" style="height:30px"></td></tr>

<tr><td><select name="national_code"><option value="India +91">India +91</option><option value="India +91">India +91</option><option value="India +91">India +91</option><option value="India +91">India +91</option></select></td><td><input type="text" name="mobileno" placeholder =" Mobile No" size="17" maxlength="10" pattern="{10}[0-9]" style="height:30px"></td></tr>

<tr><td style="height:30px"> <input type="radio" name="sex" required="required" >Male</td><td> <input type="radio" name="sex" required="required">Female</td></tr>

<tr><td> Date Of Birth :-</td><td ><input type="date" name="date" required="required"></td></tr>

<tr>
<td style="height:33px">Country:</td><td style="height:30px"><select name="country" required="required"><option value="india">India</option><option value="America">America</option><option value="England">England</option></select></td>
</tr>

<tr>
<td> <input type="submit" name="signup" value="SignUp"></td><td><input type="reset" name="reset" value="reset"></td>
</tr>

<tr>
<td colspan="2" style="color:#A0A0A4; font-size:18px">By clicking on submit will be agreed
by the terms<br>and conditions of company!!!</td>
</tr>

</table></form></body></html>