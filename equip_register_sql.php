<?php

$name= $_FILES["myfile"]["name"];
//error_reporting(0);
$hs = "localhost";
$us = "root";
$pw = "";
$dbc=mysql_connect($hs,$us,$pw) or die("My SQL not connected");
$selc=mysql_select_db("minor",$dbc) or die("Database couldnot connect/found");
$ename=$_POST['ename'];
echo $ename;
$dop=$_POST['dop'];
$f1=$_POST['f1'];
echo $dop;
$f2=$_POST['f2'];
$f3=$_POST['f3'];
$f4=$_POST['f4'];
$f5=$_POST['f5'];
$f6=$_POST['f6'];
$noe=$_POST['noe'];
$image=$name;



//	read mode
	$file = fopen("eid.php", "r") or exit("Unable to open file!");
	$eid = fread($file,filesize("eid.php"));
$eid=$eid+1; 		
		fclose($file);
     
	$r="insert into equipment values(' ','$image', '$ename','$dop', '$f1', '$f2',  '$f3','$f4','$f5','$f6','$noe')";
		
		
	if(mysql_query($r))
	{	
	//write mode 
$file = fopen("eid.php", "w") or exit("Unable to open file!");
$eid=$eid;
fwrite($file, $eid);
fclose($file);
include("equip_login.php");
//properties of the uploaded file
	
$type= $_FILES["myfile"]["type"];
$size= $_FILES["myfile"]["size"];
$temp= $_FILES["myfile"]["tmp_name"];
$error= $_FILES["myfile"]["error"];

if ($error > 0)
	die("Error uploading file! code $error.");
else
   {
	if($type=="image/png" || $size > 20000000000)//condition for the file
	{
	die("Format  not allowed or file size too big!");
	}
	else
	{
	 move_uploaded_file($temp, "uploaded/" .$name);
	
echo"<script language='javascript'>window.alert('Successfully Uploaded')</script>"; }
}


echo"<script language='javascript'>window.alert('Successfully Registered')</script>";

echo"<script language='javascript'>window.location='admin.php';</script>";
	}
	else
	{
	include("equip_login.php");
	echo"<script language='javascript'>window.alert('Registration Error :  check email')</script>";
         
	echo"<script language='javascript'>window.alert('Error during register !!')</script>";
         

echo"<script language='javascript'>window.location='equip_login.php';</script>";
	}
?>
