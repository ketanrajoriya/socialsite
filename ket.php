<?php
session_start();
error_reporting('ERROR');
$new=$_SESSION['user'];
echo"$new";
?>