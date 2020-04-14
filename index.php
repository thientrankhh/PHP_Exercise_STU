<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Replace String</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body class="container">
		<div class="card" style="width: 800px;">
			<div class="card-header bg-primary text-center">
				<h5 class="text-black font-weight-bold">REPLACE STRING</h5>
			</div>
			<form action="xuly.php" method="POST" accept-charset="utf-8" class="form-group">
				<div class="card-body" style="background-color: #F2F5A9">
					<label for="" class="form-inline">Input</label>
					<textarea name="text_input" class="form-group" style="width: 100%;"><?php echo $_SESSION['text_input']; ?></textarea>
					<div class="form-group">
							<label for="">Find: </label>
							<input type="text" name="find" class="form-group" value="<?php echo $_SESSION['find']; ?>" style="margin-right: 60px;">
							<label for="" >Replace</label>
							<input type="text" name="replace" class="form-group" value="<?php echo $_SESSION['replace']; ?>">
					</div>
					<textarea name="result" class="form-group" style="width: 100%;"><?php echo $_SESSION['result']; ?></textarea>
				</div>
				<div class="card-footer" style="background-color: #F2F5A9">
					<input type="submit" name="" placeholder="Submit" class="btn btn-secondary" >
				</div>
			</form>
		</div>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script></body>
</html>