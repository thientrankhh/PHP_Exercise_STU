<?php 
	//Xu ly database
	$dsn = 'mysql:host=localhost;dbname=ex5_cake';
	$username = 'root';
	$pass = 'Abc123@@';
	$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
	$db = new PDO($dsn, $username, $pass, $options);

	$op = "";	
	$cake_id = filter_input(INPUT_POST, 'cake_id');
	$query = "SELECT * FROM cake WHERE id ='".$cake_id."'";
	try {
		$statement = $db->prepare($query);
		$statement->execute();
		$result = $statement->fetchAll();

		$statement->closeCursor();
	} catch (PDOException $e) {
		$error = $e->getMessage();
		echo "Error database: .$error";
	}

	foreach ($result as $key => $value) {
		$op .='<h5>Name:'.$value['name'].' </h5><br>';
		$op .='<span>Price:'.$value['price'].' </span></br>';
		$op .='<img src="image/'.$value['image'].'" alt="Cake Image" style="width:200px; height:200px;">';
	}

	echo $op;
 ?>