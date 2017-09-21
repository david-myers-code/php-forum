
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
	<div class="row">
		<div class="large-2 columns">
			<p></p>
		</div>
		
		<div class="large-8 columns">
		<h3 class=".center-text">Post Thread</h3>
		<?php foreach($single_post as $single_post1):?>
		
		<h3><?php echo $single_post1['author']; ?> says:  </h3>	
		<p><?php echo $single_post1['post']; ?></p>
		<p>Time: <?php echo $single_post1['timestamp']; ?></p>	

			
			<?php foreach($comments as $comment): ?>	
					<h4>Author:</h4>
					<p><?php echo $comment['author']; ?></p>
					<p>Comment: <?php echo $comment['comment']; ?></p>
					<p>Time: <?php echo $comment['timestamp']; ?></p>
			<?php endforeach; ?>
	
		
		<div class="large-2 columns">
			<p></p>
		</div>
		
	</div>
	
	</div>
	
	<div class="row" id="after-submit">
		<div class="large-2 columns">
			<p></p>
		</div>
		
		<div class="large-8 columns">	
			<hr>
			<h3 class="callout secondary center-text form-input">Add New Comment</h3>
		
			<form method="post" action="index.php" id="add_comment">
				<input type="hidden" name="action"	value="add_comment">
				<input type="hidden" name="post_id" value="<?php echo $single_post1['id'];?>">
				<label for="author">Name:</label>
				<input type="text" name="author" class="form-input">
				<label for="message">Message:</label>
				<input type="text" name="message" class="form-input">
				<input type="submit" class="form-button button">
			</form>

		</div>
		<?php endforeach;?>
		<div class="large-2 columns">
			<p></p>
		</div>
		
	</div>