<?php 
	session_start();
	
	$_SESSION['text_input'] = "";
	$_SESSION['find'] = "";
	$_SESSION['replace'] = "";
	$_SESSION['result'] = "";

	$text_input = filter_input(INPUT_POST,'text_input');
	$find = filter_input(INPUT_POST,'find');
	$replace = filter_input(INPUT_POST,'replace');
	$result = str_replace($find, $replace, $text_input);
		
	$_SESSION['text_input'] = $text_input;
	$_SESSION['find'] = $find;
	$_SESSION['replace'] = $replace;
	$_SESSION['result'] = $result;
	header('Location: index.php');
 ?>