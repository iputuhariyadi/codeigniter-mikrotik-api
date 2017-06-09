<div class="page-header">
<h1>Login<br><small>Form</small></h1>
<hr>
<form class="form form-horizontal" name="frmlogin" method="post" action="<?php echo $form_action ; ?>">	
	<div class="form-group">
		<label class="col-md-2 control-label" for="hostname">Hostname</label>
		<div class="col-md-3">
			<input class="form-control" type="text" name="hostname" id="hostname" placeholder="Hostname">
			<?php echo form_error('hostname', '<label class="control-label" for="hostname">', '</label>'); ?>
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-2 control-label" for="username">Username</label>
		<div class="col-md-3">
			<input class="form-control" type="text" name="username" id="username" placeholder="Username">
			<?php echo form_error('username', '<label class="control-label" for="username">', '</label>'); ?>
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-2 control-label" for="password">Password</label>
		<div class="col-md-3">
			<input class="form-control" type="password" name="password" id="password" placeholder="Password">	
			<?php echo form_error('password', '<label class="control-label" for="password">', '</label>'); ?>			
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-offset-2 col-md-5">
			<input class="btn btn-primary" type="submit" name="btnlogin" value="Login">
			<input class="btn btn-default" type="reset" name="btnreset" value="Reset">
		</div>
	</div>
</form>
</div>