<?php
	require_once('../model/productsModel.php');

	if(isset($_POST['save'])){

		$name 			= $_POST['name'];
		$buyingPrice 	= $_POST['buyingPrice'];
		$sellingPrice 	= $_POST['sellingPrice'];

		if($name == "" || $buyingPrice == "" || $sellingPrice == ""){
			echo "null value found...";
		}else{

			$product = [	
						'name'			=> $name, 
						'buyingPrice'	=> $buyingPrice, 
						'sellingPrice'	=>$sellingPrice
					];
				
			$status = insertProduct($product);				

			if($status){
				header('location: ../view/display.php');
			}else{
				echo "error..try again";
			}
		}
	}


?>