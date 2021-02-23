<?php
	$username = $_POST['uname'];
    $password = $_POST['upassword'];
	
    if (ctype_alnum($username) ||$username=="_" || $username=="-" ) 
    {

    }
    else 
    {
        echo "User Name Error";

    }
	
		if(strlen($username)<2){
			echo "User Name Error";

		}
        if(strlen($password)<8){
			echo "Password Error";

		}
        if( $password=="@" ||$password=="#" || $password=="$" ||$password=="%" )
	{

	}
    else
    {
        echo "Password Error";

    }
   
?>

<html>
<head>
	<title>Input field</title>
</head>
<body>
	<form method="POST" action="#">
	<fieldset>
			<legend>Login </legend>

				Username<input type ="text" name="uname"> </input><br>
				Password<input type ="text"name="upassword"> </input><br>
				 <input type ="checkbox"> </input>Remember Me


	
			</select>

			
			<br> <br>
						<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>