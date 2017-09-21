
	<div class="row">
		<div class="large-2 columns">
			<p></p>
		</div>
		
		<div class="large-8 columns callout primary">	
			<h1 id="page-title">David's Chat Forum</h1>
		</div>
		
		<div class="large-2 columns">
			<p></p>
		</div>
	<div>
	<?php foreach($posts as $post): ?>
	<div class="row">
		<div class="large-2 columns">
			<p></p>
		</div>
		
		<div class="large-8 columns">
			<h3><?php echo $post['author']; ?> says:  </h3>	
			<p><?php echo $post['post']; ?></p>
			<p>Time: <?php echo $post['timestamp']; ?></p>	
		

			
			<br />
			<form method="post" action="index.php">
				<input type="hidden" name="action" value="add_comment_view" />
				<input type="hidden" name="post_id" value="<?php echo $post['id'];?>" />
				<input type="submit" value="View Comments"/>
			</form>
		</div>
		<div class="large-2 columns">
			<p></p>
		</div>
	</div>
	<hr />
	<?php endforeach; ?>
	
	<div class="row" id="after-submit">
		<div class="large-2 columns">
			<p></p>
		</div>
		
		<div class="large-8 columns">	
			
			<h3 class="callout secondary center-text form-input">Start new thread</h3>
		
			<form method="post" action="index.php" id="add_post">
				<input type="hidden" name="action"	value="add_post">
				<label for="author">Name:</label>
				<input type="text" name="author" class="form-input">
				<label for="message">Message:</label>
				<input type="text" name="message" class="form-input">
				<input type="submit" class="form-button button">
			</form>
			<p class="error"><?php if(isset($post_error) && $action == "add_post" && empty($author) || empty($message)){
			echo $post_error;} 
			?> </p>
		</div>
		
		<div class="large-2 columns">
			<p></p>
		</div>
		
	</div>