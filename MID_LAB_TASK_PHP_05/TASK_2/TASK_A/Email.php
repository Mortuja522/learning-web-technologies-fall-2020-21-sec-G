<?php
	if(isset($_POST['submit'])){

		$email 		=  $_POST['myemail'];
		if($email == ""){
			echo "Null ";
		}else{
			echo "done";
            echo $email."   is your email";
		}

	}else{
		echo 'invalid';
	}


?>