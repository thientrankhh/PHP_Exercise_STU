<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Edit</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body class="container">
		<h3>Edit</h3>
		<form action="" method="post" accept-charset="utf-8" role="form" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?php echo $item['id']; ?>">
			<label for="" class="form-text">Title</label>
			<input type="text" value="<?php echo $item['title']; ?>" class="form-inline" name="title" required>
			<label for="" class="form-text">Description</label>
			<input type="text" value="<?php echo $item['description']; ?>" class="form-inline" name="description">
			<label for="" class="form-text">Image</label>
			<input type="file" class="form-control" name="picture">
			<input type="hidden" name="old_image" value="<?php echo $item['image']; ?>">
			<div class="form-inline py-2">
				<button type="submit" name="action" value="update_news_by_id" class="btn btn-success">Updade</button>
				<a href="?controller=controller&action=list_edit_news" title="" class="btn btn-info mx-4">Back</a>
			</div>
		</form>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script></body>
</html>