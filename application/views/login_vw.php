<div class="container">
	<?=$msg;?>
	<div class="panel panel-default col-sm-6 col-md-offset-3">
		<div class="panel-body">
			<form action="<?=base_url('login/auth');?>" class="form-signin" method="POST">
				<h3 class="form-signin-heading" align="center">LOGIN</h3>
				<div class="form-group label-floating">
					<label class="control-label">Username</label>
					<input name="username" type="text" class="form-control" required autofocus>
					<?=form_error('username');?>
				</div>
				<div class="form-group label-floating">
					<label class="control-label">Password</label>
					<input name="password" type="password" class="form-control" required>
					<?=form_error('password');?>
				</div>
				<button class="btn btn-block tombol" type="submit">Login</button>
		        <br>Belum punya akun? Daftar
		        <a href='<?=base_url('daftar');?>'>
		        	disini
		       	</a>
			</form>
		</div>
	</div>
</div>
<br><br>