<div class="panel-body">	
	
		<div id="blogItem">
			<div>
				<h3><?php echo $viewmodel->getTitle(); ?></h3>
				<h10><?php echo $viewmodel->getLogin().", ".$viewmodel->getUpdateTime(); ?></h10>
				<p><?php echo $viewmodel->getBody(); ?></p>
			</div>
		</div>                                                                  
</div>

<div class="panel-heading">
	<h2> Dodaj komentarz </h2>
	<form class="form-horizontal" role="form2" method="post" action="<?php $_SERVER['PHP_SELF']; ?>" >
		<div class="form-group">
		 <div class="col-sm-12">          
		<textarea name="body" rows="4" cols="50" value="test" class="form-control" placeholder="Mój komentarz..." ></textarea>
		</div>
		</div>
		<div class="form-group">
		<div class="col-sm-offset-8 col-sm-2">
		<input  class="form-control" type="submit" name="submit" value ="Dodaj komentarz" />
		<input type="hidden" name="Id" value="<?php echo $viewmodel->getId();?>"/>
		</div>
		<div class="col-sm-2">
		<a href="<?php echo ROOT_PATH; ?>blog" class="form-control" />Anuluj zmiany</a>
		</div>
		</div>
	</form>
</div>

	