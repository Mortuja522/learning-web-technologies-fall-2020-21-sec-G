<?php
	if(isset($_POST['submit'])){

		$bg =  $_POST['group'];
		if($bg == "" ){
			echo "null ";
		}else if($bg == "1" )		
		{
			echo "Success";			
            echo "  your blood group is A+";
		}
		else if($bg == "2" )		
		{
			echo "Success";			
            echo "  your blood group is A-";
		}
		else if($bg == "3" )		
		{
			echo "Success ";			
            echo "  your blood group is B-";
		}
		else if($bg == "4" )		
		{
			echo "Success ";			
            echo "  your blood group is B+";
		}
		else if($bg == "5" )		
		{
			echo "Success  ";			
            echo "  your blood group is O+";
		}
		else if($bg == "6" )		
		{
			echo "Success  ";			
            echo "  your blood group is O-";
		}
		else if($bg == "7" )		
		{
			echo "Success  ";			
            echo "  your blood group is AB+";
		}

	}else{
		echo 'invalid';
	}


?>


<html>
<head>
	<title>blood group Input field</title>
</head>
<body>
	<form method="POST" action="#">
	<fieldset>
			<legend>Blood Group </legend>


			<select id="group" name="group">
				<option value="def">  Select Group  </option>
				<option value="1">A+</option>
				<option value="2">A-</option>
				<option value="3">B-</option>
				<option value="4">B+</option>
				<option value="5">O+</option>
				<option value="6">O-</option>
				<option value="7">AB+</option>
	
			</select>

			
			<br> <br>
						<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>