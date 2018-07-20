<html>
<?php
error_reporting(0);
		session_start();
		$hs = "localhost";
		$us = "root";
		$pw = "";
	
		$db=mysql_connect($hs,$us,$pw); //or die("My SQL not connected");
        
				
		$un=$_POST['user'];
		$ps=$_POST['pwd'];
        $kadm=0;;
		
		$_SESSION['currentuser'] = $un;
		$_SESSION['currentpassword'] = $ps;
//		$_SESSION['hello'] = 9;
		
		
		if($un=="admin" && $ps=="admin") // admin
		{
			$kadm=1;
		}
		if(true) // student
		{
		$selc=mysql_select_db("minor",$db); //or die("Database couldnot connect/found");

		$rs=mysql_query("select * from register where user='$un' AND pwd='$ps'");	
        
        $ks=0;
		while($rr=mysql_fetch_array($rs))
		{
			$k=1;
   		//$rse=mysql_query("insert into ots_check values('$un', 'entry', 'null')");	
					
			 include("customer_home.php");
			 //echo"<script language='javascript'>window.alert('Successful')</script>";
			echo"<script language='javascript'>window.location='customer_home.php';</script>";
				 break;
		}
		}
		
		if($kp==0 || ks==0)
		{    	 
		   if($kadm==1)
		      include("admin.php");
		   else
		   {
				include("index.php");
				echo"<script language='javascript'>window.alert('No such user found')</script>";
				echo"<script language='javascript'>window.location='index.php';</script>";
		   }
		}
	  ?>
	  </html>