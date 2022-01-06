<?php

echo "test  list.php";

$dsn = 'mysql:host=localhost;dbname=argonautes';
$username = 'root';
$password = 'St0p-Danger';

try{
	$con = new PDO ($dsn, $username, $password);
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $ex) {
	echo 'Not connected'.$ex->getMessage();
}

$stmt = $con->prepare('SELECT * FROM list');
$stmt->execute();
$names = $stmt->fetchAll();

foreach ($names as $name){
	echo '<li>'. $name['name'] .'</li>';
}


?>
