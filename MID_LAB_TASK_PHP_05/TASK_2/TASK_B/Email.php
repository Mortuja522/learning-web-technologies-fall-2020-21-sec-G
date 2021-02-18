<?php

	if(isset($_POST['submit'])){

		$email 	=  $_POST['myemail'];

		if($email == "" ){
			echo "null";
		}else{
			echo "<br>";
			echo $email;
			echo "<br>";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Email Input field</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend>Email</legend>
			Email 		<input type="email" name="myemail" value=""> <br>
						<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>