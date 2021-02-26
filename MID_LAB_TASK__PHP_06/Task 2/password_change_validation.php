<?php
	$cpassword = $_POST['cpassword'];
    $npassword = $_POST['npassword'];
    $rpassword = $_POST['rpassword'];

	
    if ($cpassword == $npassword ) 
    {
        echo "Password Error";

    }
    else 
    {

    }
	
		if($rpassword == $npassword)
        {

		}
    else
    {
        echo "Password Error";

    }
   
?>

<!DOCTYPE html>
<html>
<head>
	<title>Degree Input field</title>
</head>
<body>
	<form method="POST" action="#">
	<fieldset>
			<legend>Change Password </legend>

				Current Password<input type ="text" name="cpassword"> </input><br>
				<font color ="green">New Password</font><input type ="text"name="npassword"> </input><br>
                <font color ="red">Retype Password</font><input type ="text"name="rpassword"> </input><br>



	
			</select>

			
			<br> <br>
						<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>