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
    &nbsp    &nbsp     &nbsp    &nbsp     &nbsp    &nbsp    &nbsp      &nbsp &nbspWelcome <b><?php  echo"{$_SESSION['currentuser']}"; ?></b>
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
 


<div id="contentbg">
  <div id="contentblank">
    <div id="content">
<h2><b><font color =#7e8901 face="Georgia">Registration Form</font></b></h2><br>

<table border= "0" WIDTH="500" HEIGHT="400" cellpadding="8">

<tr>
<form action="equip_register_sql.php" method="POST"enctype="multipart/form-data" >

<td><b><font color = "#943415">Equipment Name</font></b></td>
  <td><b><div>
            
              <input name="ename"  type="text" required>
            
        </div></b></font>
  </td>
</tr>

<tr>
  <td><b><font color = "#943415">Date of Purchase</font></b></td>
  <td><b><div>
            
      
              <input  type="date" name="dop" required >
        
          </div></b></font>
  </td>

<tr>
  <td><b><font color = "#943415">Features</font></b></td>
  <td><b><div>
                         <input name="f1" type="text" required>
            
          </div></b></font>
  </td>
</tr>


<tr>
  <td><b><font color = "#943415"></font></b></td>
  <td><b><div>
                         <input name="f2" type="text">
            
          </div></b></font>
  </td>
</tr>

<tr>
  <td><b><font color = "#943415"></font></b></td>
  <td><b><div>
                         <input name="f3" type="text">
            
          </div></b></font>
  </td>
</tr>
<tr>
  <td><b><font color = "#943415"></font></b></td>
  <td><b><div>
                         <input name="f4" type="text">
            
          </div></b></font>
  </td>
</tr>
<tr>
  <td><b><font color = "#943415"></font></b></td>
  <td><b><div>
                         <input name="f5" type="text">
            
          </div></b></font>
  </td>
</tr>
<tr>
  <td><b><font color = "#943415"></font></b></td>
  <td><b><div>
                         <input name="f6" type="text">
            
          </div></b></font>
  </td>
</tr>
<tr>
  <td><b><font color = "#943415">No of equipments</font></b></td>
  <td><b><div>
                         <input name="noe" type="text" required>
            
          </div></b></font>
  </td>
</tr>


<tr>
  <td><b><font color = "#943415">Image</font></b></td>
  <td><b><div>
<br />            
      
          <input type="file"  name="myfile"><p>
        
          </div></b></font>
  </td>






</table>
          <div id="loginbutton"><input type="submit" ></div>
      
    
          <div id="loginbutton"><a href="trainner_login.html" class="login">Reset</a></div>
</div>
</div>
</div>


<div id="footerbg">
  <div id="footerblank">
    <div id="footer">
       
     <div id="footerlinks"><a href="index.php" class="footerlinks">Home</a> 
                           |  <a href="abtus.html" class="footerlinks">About Us</a> 
                           | <a href="membership.html" class="footerlinks">Membership</a> 
                           | <a href="fitness.html" class="footerlinks">Fitness</a></div>
      
      </div>
      </div>
  </div>

</div>
</body>
</html>
