
<html>
<head>
	<title>Date Of Birth</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend>Email</legend>

			<legend>Date Of Birth</legend>
			DD<input type="textarea" name="day" value="<?php if(isset($_POST['day'])){ echo $_POST['day']; }?>"> 
			MM<input type="textarea" name="month" value="<?php if(isset($_POST['month'])){ echo $_POST['month']; }?>">
			YY<input type="textarea" name="year" value="<?php if(isset($_POST['year'])){ echo $_POST['year']; }?>"> <br> <br>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>