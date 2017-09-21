<?php
	function get_posts(){
		global $db;
		
		$sql = "SELECT *
				FROM posts ORDER BY timestamp";
		
		$posts = $db->prepare($sql);
		
		$posts->execute();
		
		return $posts;
	}
	
	function add_post($author, $message){
		global $db;
		
		$sql = 'INSERT INTO posts(id, author, post, timestamp)
				VALUES (null, :author, :message, null)';
		
		$statement = $db->prepare($sql);
		$statement->bindValue(":author", $author);
		$statement->bindValue(":message", $message);
		$statement->execute();
		$statement->closeCursor();			
	}
	
	function get_single_post($post_id){
		global $db;
		
		$sql = 'SELECT *
				FROM posts 
				WHERE id = :post_id';
		
		$single_post = $db->prepare($sql);
		
		$single_post->bindValue(":post_id", $post_id);
		
		$single_post->execute();
		
		return $single_post;
	}



?>