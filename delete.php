<html>
<head>

</head>
<body>
<?php
		$hs = "localhost";
		$us = "root";
		$pw = "";
	    
$id = $_POST['id'];
		$db=mysql_connect($hs,$us,$pw); //or die("My SQL not connected");


		$sel=mysql_select_db("minor",$db); //or die("Database couldnot connect/found");

        $r=mysql_query("delete from register where id='$id'");


				
$id = $_POST['id'];

$sql = 'DELETE from register WHERE id = $id' ;


//	read mode
	$file = fopen("id.php", "r") or exit("Unable to open file!");
	$id = fread($file,filesize("id.php"));
		fclose($file);
		
	$r="insert into register values('$id', '$lname','$gen','$dob','$wgt','$hgt', '$addr', '$mob', '$user', '$pwd', '$email', '$mem')";
		
//write mode 
$file = fopen("id.php", "w") or exit("Unable to open file!");
$id=$id-1;
fwrite($file, $id);
fclose($file);
		

echo "Deleted data successfully\n";
mysql_close($conn);
echo"<script language='javascript'>window.location='admin.php';</script>";



?>
