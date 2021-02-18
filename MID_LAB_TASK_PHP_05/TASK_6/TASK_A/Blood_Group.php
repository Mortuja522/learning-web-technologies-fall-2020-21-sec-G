<?php
	if(isset($_POST['submit'])){

		$bg =  $_POST['group'];
		if($bg == "" ){
			echo "null ";
		}else if($bg == "1" )		
		{
			echo "Success";			
            echo "  your Blood Grpup is  A+";
		}
		else if($bg == "2" )		
		{
			echo "Success";			
            echo "  your Blood Grpup is A- ";
		}
		else if($bg == "3" )		
		{
			echo "Success";			
            echo "  your Blood Grpup is B- ";
		}
		else if($bg == "4" )		
		{
			echo "Success";			
            echo "  your Blood Grpup is B+ ";
		}
		else if($bg == "5" )		
		{
			echo "Success";			
            echo "  your Blood Grpup is O+ ";
		}
		else if($bg == "6" )		
		{
			echo "Success";			
            echo "  your Blood Grpup is O- ";
		}
		else if($bg == "7" )		
		{
			echo "Success";			
            echo "  your Blood Grpup is AB+ ";
		}

	}else{
		echo 'invalid ';
	}


?>