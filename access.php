	<?php
		include('session.php');

		/*Initial access control via referrer check*/

		$referrer = $_SERVER['HTTP_REFERER'];	

		if (
			(strlen(strstr($referrer,"<YOUR SAFE REFERRER HERE>"))>0)
			//include additional safe referrers here			
			OR (strlen(strstr($referrer,"<YOUR SAFE REFERRER HERE>"))>0)
			{ 

			} else { 
			//Unauthorised access - you shall not pass!
			header("Location: index.php");

		}

	?>	