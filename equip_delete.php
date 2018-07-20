<html>
<head>

</head>
<body>
<?php
		$hs = "localhost";
		$us = "root";
		$pw = "";
	    
$id = $_POST['id'];
$noe= $_POST['noe'];

		$db=mysql_connect($hs,$us,$pw); //or die("My SQL not connected");


		$sel=mysql_select_db("minor",$db); //or die("Database couldnot connect/found");

    $r=mysql_query("select * from equipment where id='$id'");
          while($rr=mysql_fetch_array($r))
{ $no= $rr['noe'];
}

echo $no;
echo $noe;
if($no=$noe)
{        $r=mysql_query("delete from equipment where id='$id'");



//	read mode
	$file = fopen("eid.php", "r") or exit("Unable to open file!");
	$eid = fread($file,filesize("eid.php"));
		fclose($file);
		
//	$r="insert into register values('$fname', '$lname','$gen','$dob','$wgt','$hgt', '$addr', //'$mob', '$user', '$pwd', '$email', '$mem')";
		
//write mode 
$file = fopen("eid.php", "w") or exit("Unable to open file!");
$eid=$eid-1;
fwrite($file, $eid);
fclose($file);
		

echo "Deleted data successfully\n";
}

mysql_close($db);
echo"<script language='javascript'>window.location='equipment_details.php';</script>";



?>
