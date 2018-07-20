<?php
error_reporting(0);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gym website</title>
<style type="text/css">
<!--
.style1 {font-size: 9px}
-->
</style>
<br />
<br /> <link href="style.css" rel="stylesheet" type="text/css" />
<link rel="icon" href="images/icon.ico" />

</head>

<body>
<div id="headerbg">

  <div id="headerblank">
   <div id="header" >

        <div id="info">
     
          <font align="right" >         &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp       &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp        &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp       &nbsp    &nbsp     &nbsp    &nbsp     &nbsp        &nbsp       &nbsp  &nbsp    &nbsp    &nbsp  &nbsp    &nbsp    &nbsp  &nbsp    &nbsp    &nbsp      &nbsp &nbsp Welcome <b><?php  echo"admin"; ?></b>
		</font>
    </div>
	

&nbsp    &nbsp    &nbsp    &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp    &nbsp    &nbsp    &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp     <div id="sign"><a href="logout.php" class="sign">&nbsp    &nbsp    &nbsp    &nbsp  &nbsp      &nbsp    &nbsp     &nbsp    &nbsp     &nbsp    &nbsp &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp Logout</a> </div>

       <div id="menu">
        <ul>
          <li><a href="index.php" class="menu style1">Home</a></li>
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
            <li><a href="admin.php" class="leftnav"><b>Admin</b></a></li>
             <li><a href="customer_details.php" class="leftnav"><b>Customer</b></a></li>
            <li><a href="trainner_details.php" class="leftnav"><b>Traineer</b></a></li>
            <li><a href="equip_details.php" class="leftnav"><b>Equipment Details</b></a></li>
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
<h2>
<?php
//	read mode
	$file = fopen("id.php", "r") or exit("Unable to open file!");
	$id = fread($file,filesize("id.php"));
		fclose($file);

echo "Number of Customer::    &nbsp&nbsp   ",$id;
echo "<br>";
echo "<br>";
//	read mode
	$file = fopen("tcid.php", "r") or exit("Unable to open file!");
	$tid = fread($file,filesize("tcid.php"));
		fclose($file);

echo "Number of Trainner::     &nbsp&nbsp&nbsp ",$tid;
echo "<br>";
echo "<br>";
//	read mode
	$file = fopen("eid.php", "r") or exit("Unable to open file!");
	$eid = fread($file,filesize("eid.php"));
		fclose($file);

echo "Number of Equipment::&nbsp  ",$eid;
echo "<br>";
echo "<br>";

?>
</h2>
  
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
