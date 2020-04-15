<?php include('data.php'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Page Title</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body class="container">
		<!-- Hien thi Danh Sach Student -->
		<h1>List Student</h1>
		<table class="table-bordered" style="width: 100%;">
			<thead class="btn-secondary">
				<tr>
					<th>Name</th>
					<th>Class</th>
					<th>CSS score</th>
					<th>PHP score</th>
					<th>Java score</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<?php print_arr_student($arr_student); ?>
				</tr>
			</tbody>
		</table><br>
		<!-- Hien thi danh sach name co tu Nguyen -->
		<h3>List Student with TenSV containing the word </h3>
		<form action="search_name.php" method="POST" accept-charset="utf-8" class="form-group" role="form">
			<input type="text" name="name_student" value="Nguyen">
			<button type="submit" class="btn-info">Submit</button>
		</form><br>
		<div>
			<h5 class="text-danger">Score CSS hightes in class PHP: </h5>
			<p><?php echo student_has_highest_CSS_score($arr_student); ?></p>
		</div>
		<div>
			<h4>List student in ascending order according to PHP score</h4>
			<table class="table-bordered" style="width: 100%;">
				<thead class="btn-success">
					<tr>
						<th>Name</th>
						<th>Class</th>
						<th>CSS score</th>
						<th>PHP score</th>
						<th>Java score</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach (list_student_classPHP_asc($arr_student) as $key => $value) { ?>	
					<tr>
						<td><?php echo $value['name']; ?></td>
						<td><?php echo $value['class']; ?></td>
						<td><?php echo $value['CSS_code']; ?></td>
						<td><?php echo $value['PHP_score']; ?></td>
						<td><?php echo $value['Java_score']; ?></td>	
					</tr>
				<?php } ?>
				</tbody>
			</table><br>
		</div>
	

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script></body>
</html>