<?php
	$server 	= "localhost"; // xampp 
	$username 	= "root"; // user localhost
	$password 	= ""; // password localhost
	$database 	= "dbuasraka"; //Disesuaikan dengan nama database localhost
	$konek 		= mysql_connect($server, $username, $password) 
	      or die ("Gagal konek ke server MySQL" .mysql_error());
	$bukadb 	= mysql_select_db($database) 
	 or die ("Gagal membuka database $database" .mysql_error());
?>
