<?php
mysql_connect("localhost","root","");
mysql_select_db("useraccounts");

$sql="select * from users where emailid=$emai";
	$qr=mysql_query($sql);
	$r=mysql_fetch_array($qr);
	for($i=0;$i<6;$i++)
	{
		echo"$r[$i]";
		}	
        ?>