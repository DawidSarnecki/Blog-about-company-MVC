<div class="panel-body">	
	<?php 	
		
	foreach ($viewmodel as $blog) : ?>
		<div id="blogItem">
			<div>
				<h3><?php echo $blog->getTitle(); ?></h3>
				<h10><?php echo $blog->getLogin().", ".$blog->getUpdateTime(); ?></h10>
				<p><?php echo $blog->getBody(); ?></p>
				 
				<form method="post" action="<?php echo ROOT_PATH ?>blog/addcomment">
					<ul class="nav navbar-nav navbar-right">
					<li>
					<input type="hidden" name="postId" value="<?php echo $blog->getId();?>"/>
					</li>
					<li>
					<input type="submit" value='+ Dodaj komentarz'/>
					</li></ul>
				</form>
			</div>
			<?php 
			
			if ($blog->getComments()):
			foreach ($blog->getComments() as $comment) : ?>
					<div id="comment">
					<p><?php echo $comment->getLogin().", ".$comment->getCreateTime(); ?></p>
					<p><?php echo $comment->getBody(); ?></p>
					</div>
			<?php endforeach;
			endif?>

		</div>                                                                  
		</br></br>
		
	<?php endforeach; ?>
	
</div>
