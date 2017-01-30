<?php 
	require_once "vendor/autoload.php";

	use Doctrine\ORM\Tools\Setup;
	use Doctrine\ORM\EntityManager;

	$paths = array("entity");
	$isDevMode = false;

	$dbParams = array(
    	'driver'   => 'pdo_mysql',
    	'user'     => 'root',
    	'password' => 'p@ssw0rd',
    	'dbname'   => 'ProdEdit',
	);

	$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
	$entityManager = EntityManager::create($dbParams, $config);

?>