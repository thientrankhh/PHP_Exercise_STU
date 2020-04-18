<?php 
	//Xu ly database
	$dsn = 'mysql:host=localhost;dbname=ex5_cake';
	$username = 'root';
	$pass = 'Abc123@@';
	$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
	
	$db = new PDO($dsn, $username, $pass, $options);

	function get_select($db) {
		$op = '';
		$query = "SELECT * FROM cake";

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
			$op .='<option value="'.$value["id"].'">'.$value["name"].'</option>'; 
		}

		return $op;
	}

	function show_info_cake($db) {
		$op = '';
		$query = "SELECT * FROM cake WHERE id=1";

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

		return $op;
	}
 ?>
<!DOCTYPE html>
<?php include('xuly.php'); ?>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Page Title</title>

		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body class="container border-info">
		<h3>Hello, world!</h3>
		<span>Choose a moon cake: </span>
		<select name="cake_id" id="select_name" style="width: 100px">
			<?php echo get_select($db); ?>
			</select><br>
		<div id="show_info_cake">
			<?php echo show_info_cake($db); ?>
		</div>	

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script></body>
		<script type="text/javascript">
			$(document).ready(function() {
				$('#select_name').change(function() {
					var cake_id = $('#select_name').val();
					$.ajax({
						url: "xuly.php",
						type: "POST",
						data:{cake_id:cake_id},
						success:function(data) {
							console.log(data);
							$('#show_info_cake').html(data);
						},
						error:function(errorThrown) {
							console.log(errorThrown);
						}
					});
				})
			});
			

		</script>
</html>