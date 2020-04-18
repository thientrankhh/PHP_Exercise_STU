<?php 
	include_once('model/m_new.php');
	include_once('model/config.php');

	$action = filter_input(INPUT_POST,'action');
	if (empty($action)) {
		$action = filter_input(INPUT_GET,'action');
		if (empty($action)) {
			$action ="listAllNews";
		}
	}

	switch ($action) {
		case 'listAllNews':
			$list_news = newspaper::get_all_news();
			include('view/home.php');
			break;
		case 'showInfoNews':
			$id = filter_input(INPUT_GET, 'id');
			$show_news = newspaper::show_news_by_id($id);
			include('view/show.php');
		break;
		case 'create_news':
			include('view/create_news.php');
			break;
		case 'save_news':
			$title = filter_input(INPUT_POST, 'title');
			$description = filter_input(INPUT_POST, 'description');
			$picture = filter_input(INPUT_POST, 'picture');
			$created_at = date("Y-m-d H:m:s");

			//Xu ly anh len server
			$image_dir_path = getcwd().'/view/image';
			if(isset($_FILES['picture'])){
				$filename = $_FILES['picture']['name'];
				if(!empty($filename)){
					$source = $_FILES['picture']['tmp_name'];
					$target = $image_dir_path.'/'.$filename;
					move_uploaded_file($source,$target);
					$picture = $filename;
				}
			} else{
				$picture ="";
			}
				

			newspaper::add_news($title, $description, $picture, $created_at);	
			$list_news = newspaper::get_all_news();
			include('view/home.php');
			break;
		case 'list_edit_news':
			$list_news = newspaper::get_all_news();
			include('view/list_news.php');
			break;	
		case 'edit_news_by_id':
			$id = filter_input(INPUT_GET, 'id');
			$item = newspaper::get_news_by_id($id);
			include('view/edit_news.php');
			break;
		case 'update_news_by_id':
			$id = filter_input(INPUT_POST, 'id');
			$title = filter_input(INPUT_POST, 'title');
			$description = filter_input(INPUT_POST, 'description');
			$picture = filter_input(INPUT_POST, 'picture');
			$old_image = filter_input(INPUT_POST, 'old_image');
			$created_at = date("Y-m-d H:m:s");

			//Xu ly anh len server
			$image_dir_path = getcwd().'/view/image';
			if(isset($_FILES['picture'])){
				$filename = $_FILES['picture']['name'];
				if(!empty($filename)){
					$source = $_FILES['picture']['tmp_name'];
					$target = $image_dir_path.'/'.$filename;
					move_uploaded_file($source,$target);
					$picture = $filename;
				} else {
					$picture = $old_image;
				}
			}
			

			newspaper::update_news_by_id($id, $title, $description, $picture, $created_at);
			$list_news = newspaper::get_all_news();
			include('view/list_news.php');
			break;	
		case 'delete_news_by_id':
			$id = filter_input(INPUT_GET, 'id');
			newspaper::delete_news_by_id($id);
			$list_news = newspaper::get_all_news();
			include('view/list_news.php');
			break;	

		default:
			# code...
			break;
	}
 ?>