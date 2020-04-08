<?php 
	/**
	 * 
	 */
	class Calculation
	{
		private $first_number, $second_number;
		public function __construct($first_number, $second_number){
			$this->first_number =  $first_number;
			$this->second_number = $second_number;
		}
		public function set_first_number($value) {
			$this->first_number = $value;
		}
		public function set_second_number($value) {
			$this->second_number = $value;
		}
		public function get_first_number() {
			return $this->first_number;
		}
			public function get_second_number() {
			return $this->second_number;
		}

		public function addition() {
			return ($this->first_number + $this->second_number);
		}
		public function subtraction() {
			return ($this->first_number - $this->second_number);
		}
		public function multiplication() {
			return ($this->first_number * $this->second_number);
		}
		public function division () {
			if ($this->second_number == 0) {
				return "<span>Error !</span>";
			} else {
				return ($this->first_number / $this->second_number);
			}
		}
	}

	$first_number = filter_input(INPUT_POST,'first_number');
	$second_number = filter_input(INPUT_POST,'second_number');
	$oparation = filter_input(INPUT_POST,'oparation');
	$calculaton1 = new Calculation($first_number, $second_number);
	switch ($oparation) {
		case '+':
			$result = $calculaton1->addition();
			break;
		case '-':
			$result = $calculaton1->subtraction();
			break;
		case 'x':
			$result = $calculaton1->multiplication();
			break;	
		default:
			$result = $calculaton1->division();
			break;
	}
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Calculation</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body class="container">
		<h3>Result is: </h3>
		<span><?php echo $result; ?></span><br>
		<a href="index.php"><button type="" class="btn btn-info">Back</button></a>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script></body>
</html>