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
		$sql = "SELECT * FROM uploadf";
$result = mysqli_query($db, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);


?> 

