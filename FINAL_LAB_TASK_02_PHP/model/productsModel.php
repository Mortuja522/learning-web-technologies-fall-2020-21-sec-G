<?php
	
require_once('db.php');



function insertProduct($product){
	$conn = getConnection();
	$sql = "insert into products values('', '{$product['name']}', '{$product['buyingPrice']}', '{$product['sellingPrice']}')";

	$result = mysqli_query($conn, $sql);

	if($result){
		return true;
	}else{
		return false;
	}

}

function getAllProduct(){

	$conn = getConnection();
	$sql = "select * from products";
	$result = mysqli_query($conn, $sql);
	$products = [];
	while ($row = mysqli_fetch_assoc($result)) {
		array_push($products, $row);
	}
	return $products;
}

function updateProduct($product){
	$conn = getConnection();
	$sql = "update products set username='{$product['name']}', buyingPrice='{$product['buyingPrice']}', sellingPrice='{$product['sellingPrice']}'";
	$result = mysqli_query($conn, $sql);
	
	if($result){
		return true;
	}else{
		return false;
	}
}

function deleteProduct($name){
	$conn = getConnection();
	$sql = "delete from products where name='{$name}";
	$result = mysqli_query($conn, $sql);
	
	if($result){
		return true;
	}else{
		return false;
	}
}

function getProductByName($name){
	$conn = getConnection();
	$sql = "select * from products where name='{$name}";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	return $row;
}

?>