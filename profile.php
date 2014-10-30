<?php
session_start();
error_reporting('ERROR');
mysql_connect("localhost","root","");
//$name=$_SESSION['user'];
$emai=$_SESSION['log'];


/*mysql_connect("localhost","root","");
mysql_select_db("useraccounts");

$sql="select * from users where emailid=$emai";
	$qr=mysql_query($sql);
	$r=mysql_fetch_array($qr);
	if(!$qr)
	{
		die(" is not created..". mysql_error());
	}
	else
	{
		echo " table is succefully created";
	}
	if(!$r)
	{
		die(" ketan..". mysql_error());
	}
	else
	{
		echo " corect";
	}
*/


/*mysql_select_db("useraccounts");

$sql="select * from users where emailid=$emai";
	$qr=mysql_query($sql);
	$r=mysql_fetch_array($qr);
	for($i=0;$i<6;$i++)
	{
		echo"$r[$i]";
		
		echo"hello";
		}	*/
mysql_select_db("useraccounts");
	$sql="select * from users where emailid='$emai'";
	$qr=mysql_query($sql);
	$r=mysql_fetch_array($qr);
	
	$_SESSION['cppuser']=$r[2];
	if($r[6]==1)
	$sex="male";
	else $sex="female";
	/*for($i=0;$i<6;$i++)
	{
	echo"$r[$i]";
	echo"hello";}*/
	
?>
<html>
<head>
</head>
<body>
<form method="post" enctype="multipart/form-data">
<table border="1" width="100%">
<tr><td align="center" colspan="2"><h1>Profile<?php echo" $emai";?> </h1></td></tr>
<tr>
<td height="400px" width="100%" colspan="2" background="" valign="bottom">
<?php //echo "$conpage"
$conpage=$_REQUEST['conpage'];
	
	if(conpage=='cpp')
	{
	include('cpp.php');
}
?>
<a href="cpp.php"><img src="" alt="profile pic" vspace="0" border="0" hspace="0"></a></td></tr>

<tr><td width="50%" align="center">Name</td><td width="50%" align="center"><?php echo"$r[0] $r[1]"?></td></tr>
<tr><td width="50%" align="center">Email</td><td width="50%" align="center"><?php echo"$r[2]"?></td></tr><tr><td width="50%" align="center">Mobile No</td><td width="50%" align="center"><?php echo"$r[5]"?></td></tr><tr><td width="50%" align="center">Sex</td><td width="50%" align="center"><?php echo"$sex"?></td></tr><tr><td width="50%" align="center">Date oF Birth</td><td width="50%" align="center"><?php echo"$r[7]"?></td></tr>
</table></form></body></html>
