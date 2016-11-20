<script src="<?php echo ROOT_PATH; ?>aspect/js/validate_form.js"></script>
<div class="panel panel-default">
	<div class="panel-heading">
		<h3>Logowanie</h3>
		<form class="form-horizontal" method="post" action="" onsubmit="return validateLoginForm(this)">
			<div class="form-group">
			  <label for="Login" class="control-label col-sm-2">login:</label>
			  <div class="col-sm-4">
				<input type='text'maxlength='16' id="user" name='user'class="form-control" placeholder="login...">
				</div>
			</div>
			<div class="form-group">
			  <label for="password" class="control-label col-sm-2" >hasło:</label>
			  <div class="col-sm-4">          
				<input type='password' maxlength='16' id="pass" name='pass' class="form-control"> </textarea>
				</div>
			</div>
			<div class="form-group">        
			  <div class="col-sm-offset-2 col-sm-4">
				<input type="submit" name="submit" lass="btn btn-default" value='Zaloguj'/> 
			  </div>
			</div>
		</form>
	</div>
</div>

