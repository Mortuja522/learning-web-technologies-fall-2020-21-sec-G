<?php
	$username = $_POST['uname'];
    $password = $_POST['upassword'];
	$split_user =str_split($username,1);

	$split =str_split($password,1);

    if (ctype_alnum($username) || in_array('_',$split_user) ||in_array('-',$split_user) || in_array('.',$split_user) ) 
    {
		if(strlen($username)<2){
			echo "User Name Error	";

		}
		else
		{
		echo "User  Name Okay	";
		}
    }
    else 
    {
        echo "User Name Error	!!!";

    }
	
		
       
		
        if(in_array('#',$split) ||in_array('@',$split) || in_array('%',$split) ||in_array('$',$split) )
	{
		if(strlen($password)<8){
			echo "Password Error	";

		}
		else
		{
				echo "Password Okay	!!! ";
		}
	}
    else
    {
        echo "Password Error	";

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
			<legend>Login </legend>

				Username  :<input type ="text" name="uname"> </input><br>
				Password  :<input type ="text"name="upassword"> </input><br><hr>
				 <input type ="checkbox"> </input>Remember Me


	
			</select>

			
			<br> <br>
						<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>