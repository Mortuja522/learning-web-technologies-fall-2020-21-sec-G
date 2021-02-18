<?php
	if(isset($_POST['submit'])){

		$degree =  $_POST['degree'];
		if($degree == "" ){
			echo "null";
		}else{
			echo "Success ";
			foreach ($_POST["degree"] as $degree)
			{
					echo $degree.;
			}
            
		}

	}else{
		echo 'invalid ';
	}


?>