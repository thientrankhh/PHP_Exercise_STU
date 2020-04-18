<?php 
	/*
		"1. Create database with news table : news (id, title, description, image, created_at); 
		2. Create 5 data records
		3. Using MVC, OOP to get All news and show in Home Page  
		4. Using MVC, OOP when clicking on the title news or news image, it will display the all news info
		5. Add feature to add images
		6. Create more delete, edit and add feature"
	*/
		
	$controller =  filter_input(INPUT_POST, 'controller');
	if (empty($controller)) {
		$controller = filter_input(INPUT_GET,'controller');
		if (empty($controller)) {
			$controller = "controller";
		}
	}

	switch ($controller) {
		case 'controller':
			include('controller/controller.php');
			break;
		
		default:
			# code...
			break;
	}

 ?>