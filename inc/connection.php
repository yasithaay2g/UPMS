<?php

$hostname="localhost";
  $username="root";
 
  $database="upmsnew";
	$db=new mysqli($hostname,$username,"",$database);
	if (!$db) {
		echo "connection failed";
  }
		else {
			//echo "connected";
		}
?> 