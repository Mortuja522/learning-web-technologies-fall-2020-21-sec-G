<?php

if(isset($_POST['submit'])){

	$date =  $_POST['day'];
	$month= $_POST['month'];
	$year= $_POST['year'];
	if($date == "" || $month=="" || $year==""){
		echo "null";
	}else{
		echo "Success";
		echo $date." ".$month." ".$year."  DOB";

	}

}else{
	echo 'invalid';
}

?>


<html>
<head>
	<title>Date Input field</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend>Date Of Birth</legend>
			DD<input type="textarea" name="day" value=""> 
			MM<input type="textarea" name="month" value="">
			YY<input type="textarea" name="year" value=""> <br> <br>
			<input type="submit" name="submit" value="Submit">

		</fieldset>
	</form>
</body>
</html>