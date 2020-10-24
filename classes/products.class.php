<?php

// require_once 'autoload.php';

class products{

	public static function getProducts(){
		$mysqli = dbo::nconnection ();
		if ($mysqli->connect_errno) {
			return array (
					"error" => $mysqli->connect_error 
			);
		}
		
		$q = "SELECT * FROM products 
					ORDER BY id DESC";

		// echo $q . "<br />"; 
		// exit;
		
		$rv = $mysqli->query ($q);
		
		if (! $rv) 
		{
			return array (
					"error" => 1,
					"msg" => "error on select products:" . $mysqli->error 
			);
		}
		else 
		{
			$products = array();
			foreach ($rv as $row) {
				$products[] = $row;
			}
			return array(
					"error" => 0,
					"products" => $products
				);
		}
	}

	public static function addProduct($title, $price, $description, $image, $onSale){
		$mysqli = dbo::nconnection ();
		if ($mysqli->connect_errno) {
			return array (
					"error" => $mysqli->connect_error 
			);
		}

		$title = $mysqli->real_escape_string($title);
		$price = $mysqli->real_escape_string($price);
		$description = $mysqli->real_escape_string($description);
		$image = $mysqli->real_escape_string($image);
		$onSale = $mysqli->real_escape_string($onSale);

		// $
		
		$q = "INSERT INTO products 
					SET title='$title', price='$price', description='$description', image='$image', on_sale=$onSale, entered_on=NOW()";

		// echo $q . "<br />"; 
		// exit;
		
		$rv = $mysqli->query ($q);
		
		if (! $rv) 
		{
			return array (
					"error" => 1,
					"msg" => "error on insert products:" . $mysqli->error 
			);
		}
		else 
		{
			$product_id = $mysqli->insert_id;
			return array(
					"error" => 0,
					"product_id" => $product_id,
					"msg" => "Product Added Successfully"
				);
		}
	}



}




