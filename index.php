<?php
	error_reporting(0);
	//models
	require("models/db.php");
	require("models/forum-model.php");
	require("models/comment-model.php");	
	
	//Views	
	include("views/header.php");
	include("views/footer.php");
	
	//Logic
	$posts = get_posts();

	$action = filter_input(INPUT_POST, 'action');
	
	if($action == "add_post"){
	
	$author = filter_input(INPUT_POST, 'author');
	
	$message = filter_input(INPUT_POST, 'message');

		if( !empty($author) || !empty($message) ){
			add_post($author, $message);
	
		}
		else{
			$post_error = "Please enter a name and a message";
			$posts = get_posts();
			
		}
	
	}
	
	if($action == "add_comment_view"){
		$post_id = filter_input(INPUT_POST, 'post_id');
		$single_post = get_single_post($post_id);
		$comments = get_comments($post_id);
		include("views/comment-add.php");
	}
	
	if($action == "add_comment"){
		$author = filter_input(INPUT_POST, 'author');
		$message = filter_input(INPUT_POST, 'message');
		$post_id = filter_input(INPUT_POST, 'post_id');
		
		add_comment($author, $message, $post_id);
		include("views/main-view.php");
	}
	//Views

	else{
	$posts = get_posts();
	include("views/main-view.php");	
	}
	

	
	

	
	
?>