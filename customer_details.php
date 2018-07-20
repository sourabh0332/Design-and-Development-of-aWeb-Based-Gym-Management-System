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
    &nbsp    &nbsp     &nbsp    &nbsp     &nbsp    &nbsp    &nbsp      &nbsp &nbspWelcome<?php  echo" admin "; ?></b>
		</font>
    </div>
	

&nbsp    &nbsp    &nbsp    &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp    &nbsp    &nbsp    &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp     <div id="sign"><a href="logout.php" class="sign">&nbsp    &nbsp    &nbsp    &nbsp  &nbsp      &nbsp    &nbsp     &nbsp    &nbsp     &nbsp    &nbsp &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp Logout</a> </div>

       <div id="menu">
        <ul>
          <li><a href="index.php" class="menu">Home</a></li>
          <li><a href="abtus.html" class="menu">About Us</a></li>
          <li><a href="membership.html" class="menu">Membership</a></li>
          <li><a href="fitness.html" class="menu">Fitness</a></li>

        </ul>
      </div>   

        

       
        
      
    </div>
  </div>
</div>

<div id="contentbg">
   <div id="content">
      <div id="contentleft">
      
      <div id="leftnav">
          <ul>
            <li><a href="customer_details.php" class="leftnav"><b>Customer</b></a></li>
            <li><a href="trainner_details.php" class="leftnav"><b>Traineer</b></a></li>
            <li><a href="#" class="leftnav"><b>Equipment Details</b></a></li>
            <li><a href="#" class="leftnav"><b>News and Update</b></a></li>
</b>
  
         </ul>
        </div>
      </div>
      <div id="contentmid">        
        <div class="midheading">
                   
  </div>
 

  

     
</body>
</html>
        <div id="leftnavheading">
  <div id="wrapper">
    <!-- START WRAPPER ############################################################## -->
    <div id="content">
      <table  summary="Summary Here" border="1" cellpadding="10" cellspacing="1">
        <thead>
          <tr>   <th>ID</th>
          
		  <th>First name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Dob</th>
			<th>Weights</th>
			<th>Heights</th>
			<th>Address</th>
<th>Mob. no.</th>

			<th>Email</th>
			<th>Membership</th>
			<th>Package</th></tr>
        </thead>
        <tbody>
		
		<?php
		$hs = "localhost";
		$us = "root";
		$pw = "";
	    
		$db=mysql_connect($hs,$us,$pw); //or die("My SQL not connected");


		$sel=mysql_select_db("minor",$db); //or die("Database couldnot connect/found");

        $r=mysql_query("select * from register");


		while($rr=mysql_fetch_array($r))
		{
			echo"<b><tr><td width=100>".$rr['id']."</td>
			
<td width=10>".$rr['fname']."</td>
<td width=100>".$rr['lname']."</td>
			<td width=100>".$rr['gen']."</td>
			<td width=400>".$rr['dob']."</td>
			<td width=00>".$rr['wgt']."</td>
			<td width=100>".$rr['hgt']."</td>
			<td width=100>".$rr['addr']."</td>
<td width=100>".$rr['mob']."</td>
					
<td width=100>".$rr['email']."</td>
			<td width=100>".$rr['mem']."</td>
			
<td width=100>".$rr['pack']."</td></tr></b>"  ;
		}			
	  ?>
	  
         </tbody>
      </table>
<a href="sign-in.html">Add</a>
	<form action="delete.php" method="post">
	Enter the ID <input type="text" name="id" />
    <input type="submit"  value="DELETE"/>
      
        <div id="copyright">
    <p class="fl_left"><a href=""></a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>
<?php

?>

  
    </div>
  </div>

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
