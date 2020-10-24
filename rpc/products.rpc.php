<?php
require_once '../autoload.php';
session_start();

header('Content-Type: application/json');

if(!isset($_POST['action']))
	die('No Action Received');
	
$action = $_POST['action'];

switch($action)
{
	case 'getProducts':
		
		$result = products::getProducts();
		break;

	case 'addProduct':
		$title = $_POST['addProductTitle'];
		$price = $_POST['addProductPrice'];
		$description = $_POST['addProductDescription'];
		$image = $_POST['addProductImage'];
		$onSale = (isset($_POST['addProductOnSale'])) ? "TRUE" : "FALSE";
		$result = products::addProduct($title, $price, $description, $image, $onSale);
		break;
}

echo json_encode($result);

