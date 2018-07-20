<?php

//error_reporting(0);
$hs = "localhost";
$us = "root";
$pw = "";
$dbc=mysql_connect($hs,$us,$pw) or die("My SQL not connected");
$selc=mysql_select_db("minor",$dbc) or die("Database couldnot connect/found");
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gen=$_POST['gen'];
$dob=$_POST['dob'];
$wgt=$_POST['wgt'];
$hgt=$_POST['hgt'];
$addr=$_POST['addr'];
$mob=$_POST['mob'];
$user=$_POST['user'];
$pwd=$_POST['pwd'];
$email=$_POST['email'];
$mem=$_POST['mem'];
$pack=$_POST['pack'];



//	read mode
	$file = fopen("id.php", "r") or exit("Unable to open file!");
	$id = fread($file,filesize("id.php"));
		fclose($file);
		
	$r="insert into register values(' ' ,'$fname', '$lname','$gen','$dob','$wgt','$hgt', '$addr', '$mob', '$user', '$pwd', '$email', '$mem','$pack')";
		
	if(mysql_query($r))
	{	include("sign-in.html");
		//write mode 
$file = fopen("id.php", "w") or exit("Unable to open file!");
$id=$id+1;
fwrite($file, $id);
echo $id;
fclose($file);
		echo"<script language='javascript'>window.alert('remember ur id at the time of payment and ur id=',$id)</script>";

		echo"<script language='javascript'>window.alert('Successfully Registered')</script>";

echo"<script language='javascript'>window.location='index.php';</script>";
	}
	else
	{
	include("sign-in.html");
	echo"<script language='javascript'>window.alert('Registration Error : Prefer another username or check email')</script>";
         
	echo"<script language='javascript'>window.alert('Error during register !!')</script>";
         

echo"<script language='javascript'>window.location='sign-in.html';</script>";
	}
?>
