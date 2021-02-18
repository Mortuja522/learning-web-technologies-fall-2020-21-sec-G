<?php
	if(isset($_POST['submit'])){

		$date =  $_POST['day'];
		$month= $_POST['month'];
		$year= $_POST['year'];
		if($date == "" || $month=="" || $year==""){
			echo "Null";
		}else{
			echo "Success ";
            echo $date." ".$month." ".$year."  ";
		}

	}else{
		echo 'invalid ';
	}


?>