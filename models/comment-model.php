<?php
	function get_comments($post_id){
		global $db;
		
		$sql = 'SELECT *
				FROM comments 
				WHERE posts_id = :post_id
				ORDER BY timestamp';
		
		$comments = $db->prepare($sql);
		$comments->bindValue(":post_id", $post_id);
		
		$comments->execute();
		
		return $comments;
	}
	
	function add_comment($author, $message, $post_id){
		global $db;
		
		$sql = 'INSERT INTO comments(id, posts_id, author, comment, timestamp)
				VALUES (null,:post_id ,:author, :message, null)';
		
		$statement = $db->prepare($sql);
		$statement->bindValue(":author", $author);
		$statement->bindValue(":post_id", $post_id);
		$statement->bindValue(":message", $message);
		$statement->execute();
		$statement->closeCursor();
				
				
}



?>