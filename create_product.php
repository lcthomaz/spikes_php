<?php 
	require_once "bootstrap.php";

	$newProductName = "ProdutoABC";

	$product = new Product();
	$product->setName($newProductName);

	$entityManager->persist($product);
	$entityManager->flush();

	echo "Created Product with ID " . $product->getId() . "\n";
?>