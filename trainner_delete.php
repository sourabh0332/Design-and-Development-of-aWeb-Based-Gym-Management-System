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

        $r=mysql_query("delete from trainner where id='$id'");


				



//	read mode
	$file = fopen("tcid.php", "r") or exit("Unable to open file!");
	$tcid = fread($file,filesize("tcid.php"));
		fclose($file);
		
//	$r="insert into register values('$fname', '$lname','$gen','$dob','$wgt','$hgt', '$addr', //'$mob', '$user', '$pwd', '$email', '$mem')";
		
//write mode 
$file = fopen("tcid.php", "w") or exit("Unable to open file!");
$tcid=$tcid-1;
fwrite($file, $tcid);
fclose($file);
		

echo "Deleted data successfully\n";
mysql_close($conn);
echo"<script language='javascript'>window.location='admin.php';</script>";



?>
