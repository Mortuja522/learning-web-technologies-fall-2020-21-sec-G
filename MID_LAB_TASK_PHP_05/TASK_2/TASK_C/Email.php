<html>
<head>
	<title>Email Input field</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend>Email</legend>
			Email: 		<input type="email" name="myemail" value="<?php if(isset($_POST['myemail'])){ echo $_POST['myemail']; }?>"> <br><br>
						<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>