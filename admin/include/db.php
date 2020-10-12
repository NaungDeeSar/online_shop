<?php 

$dbservername="localhost";
$dbname="onlineshopping";
$dbuser="root";
$dbpwd="";

$dbs="mysql:host=$dbservername;dbname=$dbname";
$pdo=new PDO($dbs,$dbuser,$dbpwd);
try {
	$conn=$pdo;
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {

	echo "Connection fail".$e->getMessage();
	
}

 ?>