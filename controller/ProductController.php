<?php

require_once 'model/Product.php';

class ProductController {

	public function newProduct() {
		
		$product = new Product();
		
		$product->setId($_POST['id']);
		$product->setType($_POST['type']);
		$product->setName($_POST['name']);
		$product->setQuantity($_POST['quantity']);
		$product->setPrice($_POST['price']);
		$product->setBusiness($_POST['business']);
		
		return $product->save();

	}

	public function listPs() {
		$product = new Product();
		$products = $product->listProducts();

		return $products;
	}

}

?>

