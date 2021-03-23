<?php
	$title = "Display Page";
	include('header.php');
	require_once('../model/userModel.php');
?>

	<?php 
		echo "<fieldset>
			<legend>Display</legend>
				<table border='1'>
				<tr>
					<td>NAME</td>
					<td>PROFIT</td>
					<td colspan='2'></td>
				</tr>";
	
		$row=getAllProduct();
		
		foreach($row as $var){
			
			echo "
					<tr>
						<td>{$var['name']}</td>
						<td>{$int['profit']}</td>
						<td><a href='edit.php?id={$var['name']}'>edit</a> |
							<a href='../controller/delete.php?id={$var['name']}'>delete</a>
						</td>
						
				";
				//?id={$row['ID']}
			
		}

			echo "</table>
				</fieldset>";


?>

	
<?php
	include('footer.php');
?>