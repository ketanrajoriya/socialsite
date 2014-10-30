<?php
session_start();
error_reporting('ERROR');

//$_SESSION['raj']=$username;

//session_unset('$username');
$username=$_REQUEST['username'];
//session_unset($_REQUEST['']);
mysql_connect("localhost","root","");

$password=$_REQUEST['password'];

if($_REQUEST['login'])
{
	//echo"hello friends";
	mysql_select_db("useraccounts");
	$sql="select * from users where emailid='$username'";
	$qr=mysql_query($sql);
	$r=mysql_fetch_array($qr);
	if($r[2]==$username)	
	{
	$_SESSION['ketan']=$r[2];
		
	if($r[3]==$password){
		$_SESSION['user']=$r[0];
		header("location:homepage.php");
		
}
		else{
			
			$msg="<h1>you have entered a wrong password</h1>";}
			}
	else{
		$msg="<h1>either your username is wrong or you don't have ChatZone account</h1>";}
	}
?>
<html>
<head>
<style type="text/css">
a:link
{

	text-decoration:none;
	}</style>
<title>Friends Zone.com</title></head>
<body>
<table  width="100%" height="700px" border="0" cellspacing="0">

<tr height="80px" bgcolor="#FF9933">

<td colspan="2" height="45px" valign="middle"> &nbsp;&nbsp;<a href="index.php" style="color:#ffffff; margin-left:30px; font-size:40px">Friends Zone</a></font></td>

<td align="right" valign="middle" style="color:#FFFBF0; white-space:pre-line; font-weight:bold; font-size:18px; font-family:Verdana, Geneva, sans-serif">Don't Have Friends Zone Account? <a href="index.php?goto=signup3"> <input type="button" name="signup" value="create account here" style="border-bottom-style:ridge; background-color:#FFFFFF"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
</tr>

<tr>
<td align="center" width="680px">
<?php  

$goto=$_REQUEST['goto'];

if($goto==signup3)
{
	include("signup3.php");
	}
	else if($goto==resetpassword)
	{
		include("resetpassword.php");
		}
	else
	{
		echo"<img src='welcome.jpg' width='735px' height='330' border='0'>";
		}
	?>
   
</td>

<td><img src="VR.jpg" width="5px" height="500px"></td>

<td><form method="post">

<table align="center" height="400px" >

<tr>
<td valign="top">&nbsp;</td>
</tr>

<tr>
<td>&nbsp;</td>
</tr>

<tr>
<td style="font-family:Verdana, Geneva, sans-serif; font-size:24px; color:FF3F00">Log In<hr width="100%"></td>
</tr>

<tr>
<td><b>username</b><br><input type="text" name="username" size="30" required="required" placeholder=" Email id" style="height:28px"></td>
</tr> 

<tr>
<td><b>password</b><br><input type="password" name="password"  size="30" required="required" placeholder=" Password" style="height:28px"></td>
</tr>

<tr>
<td><input type="submit" name="login" value="Login">&nbsp;&nbsp;&nbsp;<a href="index.php?goto=signup3"><input type="button" name="button" value="SignUp"></a><? echo $msg;?></td>
</tr>

<tr>
<td> <a href="index.php?goto=resetpassword">Can't access your account?</a></td>
</tr>

<tr>
<td>don't have <b>Friends Zone</b> account? <a href="index.php?goto=signup3"><b>create account here</b></a></td></tr></table></form>
</tr>
<tr align="center" height="1px"><td colspan="3"> <b>Friends Zone Production.</b></td></tr>

<tr align="center" height="1px"><td colspan="3"><img src="VR2.jpg" width="85%"></td></tr>

<tr align="center" height="1px"><td colspan="3"> <b>Copyright &copy;2014 <a href="">Friends Zone. </a><br>
All Rights Reserved</b></td></tr>
</table></body></html>

