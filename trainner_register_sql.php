<?php

error_reporting(0);
$hs = "localhost";
$us = "root";
$pw = "";
$dbc=mysql_connect($hs,$us,$pw) or die("My SQL not connected");
$selc=mysql_select_db("minor",$dbc) or die("Database couldnot connect/found");
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gen=$_POST['gen'];
$dob=$_POST['dob'];
$addr=$_POST['addr'];
$mob=$_POST['mob'];
$email=$_POST['email'];
$qual=$_POST['qual'];



//	read mode
	$file = fopen("tcid.php", "r") or exit("Unable to open file!");
	$tcid = fread($file,filesize("tcid.php"));
$tcid=$tcid+1; 		
		fclose($file);
     
	$r="insert into trainner values(' ','$fname', '$lname','$gen','$dob', '$addr', '$mob',  '$email','$qual')";
		
		
	if(mysql_query($r))
	{	
	//write mode 
$file = fopen("tcid.php", "w") or exit("Unable to open file!");
$tcid=$tcid;
fwrite($file, $tcid);
fclose($file);
include("trainner_login.php");
	
echo"<script language='javascript'>window.alert('Successfully Registered')</script>";

echo"<script language='javascript'>window.location='admin.php';</script>";
	}
	else
	{
	include("trainner_login.html");
	echo"<script language='javascript'>window.alert('Registration Error :  check email')</script>";
         
	echo"<script language='javascript'>window.alert('Error during register !!')</script>";
         

echo"<script language='javascript'>window.location='trainner_login.html';</script>";
	}
?>
