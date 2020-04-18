<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>List News</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body class="container">
		<h4>Edit News</h4>
		<div class="navbar btn btn-secondary">
			<a href="?controller=controller&action=listAllNews" title="" class="btn btn-info">Back Home</a>
		</div>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Title</th>
					<th>Description</th>
					<th>Image</th>
					<th>Created At</th>
					<th colspan="2">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($list_news as $key => $value) { ?>
				<tr>
					<td><?php echo $value['id']; ?></td>
					<td><?php echo $value['title']; ?></td>
					<td><?php echo $value['description']; ?></td>
					<td><img src="./view/image/<?php echo $value['image']; ?>" alt="" style="width: 70px;height: auto"></td>
					<td><?php echo $value['created_at']; ?></td>
					<td><a href="?controller=controller&action=edit_news_by_id&id=<?php echo $value['id']; ?>" title="" class="btn btn-info">Edit</a></td>
					<td><a href="?controller=controller&action=delete_news_by_id&id=<?php echo $value['id']; ?>" title="" class="btn btn-danger" onclick="confirm('Delete ?')">Delete</a></td>
				</tr>
			<?php } ?>
			</tbody>
		</table>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script></body>
</html>