<?php
/*session_start();
error_reporting('ERROR');
$user=$_SESSION['cppuser'];
$changepic=$_REQUEST['change'];

$picname=$_FILES['profilepic']['name'];
$picsize=$_FILES['profilepic']['size']/1024;
$pictype=$_FILES['profilepic']['type'];
$pictmpname=$_FILES['profilepic']['tmp_name'];
//$picerror=$_FILES['profilepic']['error'];
if($_REQUEST['ram'])
{
echo"button clicked";
if($picsize>1024)
{
echo"max size only 1MB";
}
elseif($pictype!="image/jpeg")
{
echo "invalid image type only jpg";		
}
else
{
mkdir("profilepic/$user");
$od=opendir("profilepic/$user");
while($res=readdir($od))
{
unlink("profilepic/$user/$res");		
}
move_uploaded_file($ftmp,"profilepic/$user/$fn");
//header("location:home.php");
echo"profile changed";


/*$oldpic=opendir("userdata/$email/userinfo/profile_pic");
while($readpic=readdir($oldpic))
{
	unlink("userdata/$email/userinfo/profile_pic/$readpic");
	/*if($readpic!="." and $readpic!="..")
	{
		$changepic=$readpic;
		}*/
	
move_uploaded_file("$pictmpname","userdata/$email/userinfo/profile_pic/$picname");
}
}

<html>
<head>
</head>
<body>
//<?php echo "hello friends $user";
<form>
<input type="file" name="profilepic" />
<input type="button" name="change" value="change" />
<input type="button" name="ram" value="eeee">
</form></body>
</html>

*/
?>
