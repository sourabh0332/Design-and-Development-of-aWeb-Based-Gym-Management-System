<?php
error_reporting(0);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gym website</title>
<br />
<br /> <link href="style.css" rel="stylesheet" type="text/css" />
<link rel="icon" href="images/icon.ico" />

</head>

<body>
<div id="headerbg">

  <div id="headerblank">
   <div id="header" >

        <div id="info">
     
          <font align="right" >         &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp       &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp        &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp       &nbsp    &nbsp     &nbsp    &nbsp     &nbsp        &nbsp    &nbsp   
    &nbsp    &nbsp     &nbsp    &nbsp     &nbsp    &nbsp    &nbsp   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   &nbsp &nbspWelcome <b><?php  echo"admin"; ?></b>
		</font>
    </div>
	

&nbsp    &nbsp    &nbsp    &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp    &nbsp    &nbsp    &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp     <div id="sign"><a href="logout.php" class="sign">&nbsp    &nbsp    &nbsp    &nbsp  &nbsp      &nbsp    &nbsp     &nbsp    &nbsp     &nbsp    &nbsp &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp Logout</a> </div>

       <div id="menu">
        <ul>
          <li><a href="index.php" class="menu">Home</a></li>
          <li><a href="abtus.html" class="menu">About Us</a></li>
          <li><a href="membership.html" class="menu"> Membership</a></li>
          <li><a href="fitness.html" class="menu">Fitness</a></li>

        </ul>
      </div>   

        

       
        
      
    </div>
  </div>
</div>

      <div id="contentleft">
      
      <div id="leftnav">
          <ul>
            <li><a href="customer_details.php" class="leftnav"><b>Customer</b></a></li>
            <li><a href="trainner_details.php" class="leftnav"><b>Traineer</b></a></li>
            <li><a href="equip_details.php" class="leftnav"><b>Equipment Details</b></a></li>
            <li><a href="#" class="leftnav"><b>News and Update</b></a></li>
</b>
  
         </ul>
        </div>
      </div>
                <table  summary="Summary Here" width="771" height="10"  border="0" cellpadding="25" cellspacing="0">
        
        <tbody>
 <?php
		$hs = "localhost";
		$us = "root";
		$pw = "";
	    
		$db=mysql_connect($hs,$us,$pw); //or die("My SQL not connected");


		$sel=mysql_select_db("minor",$db); //or die("Database couldnot connect/found");

        $r=mysql_query("select * from equipment");
       // <table width="711" height="463" border="1">
		
        while($rr=mysql_fetch_array($r))
		{echo "<br>";
		echo "<tr>";
		 echo "<td>		<img  src ='uploaded/$rr[1]' ></td>".
		 		
				"<td><h1>NAME:".$rr['ename']."</b></h1>"
				
				."<b></br><h2>ID: ".$rr['id']."</br></b></br></h2>".

				"<b><h3>No. of Item: ".$rr['noe']."</h2></br></b>".
				"<h3>FEATURES</br></h3>".
                	"<b><h2><i>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$rr['f1']."</br></i>".
				 	"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i>".$rr['f2']."</br></i>".
					"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i>".$rr['f3']."</br></i>".
				   	"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i>".$rr['f4']."</br></i>".
				 	"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i>".$rr['f5']."</br></i>".
			"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i>".$rr['f6']."</br></i></b></td></h2>";				
	}			

	  ?>
		
</tbody>
</table>
	  
  
  </br>   &nbsp    &nbsp        &nbsp    &nbsp        &nbsp    &nbsp        &nbsp    &nbsp        &nbsp    &nbsp        &nbsp    &nbsp        &nbsp      &nbsp    &nbsp        &nbsp    &nbsp        &nbsp    &nbsp        &nbsp    &nbsp        &nbsp    &nbsp        &nbsp    &nbsp        &nbsp    &nbsp        &nbsp    &nbsp      &nbsp  &nbsp        &nbsp    &nbsp   <a href="equip_login.php">Add</a>
	<form action="equip_delete.php" method="post">
</br>   &nbsp    &nbsp        &nbsp    &nbsp        &nbsp    &nbsp        &nbsp    &nbsp        &nbsp    &nbsp        &nbsp    &nbsp        &nbsp      &nbsp    &nbsp        &nbsp    &nbsp        &nbsp    &nbsp        &nbsp    &nbsp        &nbsp    &nbsp        &nbsp    &nbsp        &nbsp    &nbsp        &nbsp    &nbsp      &nbsp  &nbsp        &nbsp    &nbsp  	Enter the id <input type="text" name="id" />
No. Of Item<input type="text" name="noe" />
    <input type="submit"  value="DELETE"/>


  
<div id="footerbg">
  <div id="footer">
       
     
<div id="footerlinks"><a href="index.php" class="footerlinks">Home</a> 
                           |  <a href="abtus.html" class="footerlinks">About Us</a> 
                           | <a href="membership.html" class="footerlinks">Membership</a> 
                           | <a href="fitness.html" class="footerlinks">Fitness</a></div>
      
</div>
</div>
</body>
</html>
