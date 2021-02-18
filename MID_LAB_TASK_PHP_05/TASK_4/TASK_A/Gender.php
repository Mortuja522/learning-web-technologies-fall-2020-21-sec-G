<?php
	if(isset($_POST['submit'])){

		$gender =  $_POST['gender'];
		if($gender == "" ){
			echo "null";
		}else{
			echo "Success ";
            echo $gender.;
		}

	}else{
		echo 'invalid';
	}


?>