﻿<div class="panel-body">

		
	<?php 
	print_r($viewmodel);
	//$i = 0;
	foreach ($viewmodel as $item) : ?>
		<div id="blogItem">
			<div>
				<h3><?php echo $item['Title']; ?></h3>
				<h10><?php echo $item['Login'].", ".$item['X_UpdateTime']; ?></h10>
				<p><?php echo $item['Text']; ?></p>
				<p><a href="<?php echo ROOT_PATH; ?>blog/add-comment"> + Dodaj komentarz</a><p>
			</div>

		</div>
		</br></br>
		
	<?php endforeach; ?>
	
</div>
