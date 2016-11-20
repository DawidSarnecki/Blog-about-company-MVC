<script src="<?php echo ROOT_PATH; ?>aspect/js/validate_form.js"></script>
<div class="panel panel-default">
	<div class="panel-heading">
		<h3>Nowe konto</h3>
	<form class="form-horizontal" method="post" action="" onsubmit="return validateRegister(this)">
		<div class="form-group">
		  <label for="Login" class="control-label col-sm-2">Login:</label>
		  <div class="col-sm-4">
			<input type="text" maxlength='16' id="user" name="user" class="form-control" placeholder="login..."> <p id='info'></p>
			</div>
		</div>
		<div class="form-group">
		  <label for="Login" class="control-label col-sm-2">email:</label>
		  <div class="col-sm-4">
			<input type='text' maxlength='16' id="email" name="email" class="form-control" placeholder="email..." >
			</div>
		</div>
		<div class="form-group">
		  <label for="password" class="control-label col-sm-2" >Hasło:</label>
		  <div class="col-sm-4">          
			<input type='password' maxlength='16' id="pass" name="pass" class="form-control" >
			</div>
		</div>
		<div class="form-group">        
		  <div class="col-sm-offset-2 col-sm-4">
			<input type="submit" class="btn btn-default" name="submit" value='Załóż konto'/> Posiadasz już konto? <a href='login.php'>Kliknij aby się zalogować</a>
		  </div>
		</div>
	</form>
	</div>
</div>
