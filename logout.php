		<?php
		session_start();
		      //session_destroy();
              //unset($_SESSION);     		
		    //$id=$_SESSION['currentuser'];
			
			//unset($_SESSION['currentuser']);
			//unset($_SESSION['currentpassword']);
			unset($id);
            //ECHO @$id;
			//echo"$_SESSION[currentuser]";
			
			session_destroy();
			unset($_SESSION); 
			
			//echo"@$_SESSION[currentuser]";
            header("Location: index.php");
			//$_GLOBALS['message']="You are Loggged Out Successfully.";
			?>