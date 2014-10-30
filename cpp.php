<?php
session_start();
error_reporting('ERROR');
//$uname=$_SESSION['uname'];
$uname=$_SESSION['cppuser'];
//echo $uname;
$fn=$_FILES['image']['name'];
$ft=$_FILES['image']['type'];
$fs=$_FILES['image']['size']/1024;
$ftmp=$_FILES['image']['tmp_name'];
if($_REQUEST['submit'])
{
if($fs>1024)
{
echo "Max file Size only 1mb";		
}
elseif($ft!="image/jpeg")
{
echo "invalid image type only jpg";		
}
else
{
mkdir("profilepic/$uname");
$od=opendir("profilepic/$uname");
while($res=readdir($od))
{
unlink("profilepic/$uname/$res");		
}
move_uploaded_file($ftmp,"profilepic/$uname/$fn");
//header("location:home.php");
echo"heloo i ";}		
}
?>
<form method="post" enctype="multipart/form-data">
<input type="file" name="image"><input type="submit" value="submit" name="submit">
</form>