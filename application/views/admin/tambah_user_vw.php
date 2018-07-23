<div class="container">
	<?=$msg;?>
	<br><br>	
	<form action="<?=base_url('daftar/proses_daftar');?>" class="form-signin" method="POST">
		<h3 class="form-signin-heading" align="center">DAFTAR</h3>
		<table class="table" style="border: 0;">
			<tr>
				<td>
					<div class="label-floating" >  
						<label class="control-label">Kelas</label>
					        <select name="kelas" class="form-control">
							  	<option value="1" selected>1</option>
							  	<option value="2" >2</option>
							  	<option value="3" >3</option>
							  	<option value="4" >4</option>
							  	<option value="5" >5</option>
							  	<option value="6" >6</option>
							  	<option value="7" >7</option>
							  	<option value="8">8</option>
							  	<option value="9">9</option>
							  	<option value="10">10</option>
							  	<option value="11">11</option>
							  	<option value="12">12</option>
							</select>
					    <?=form_error('kelas');?>
					</div>
				</td>
				<td>
					<div class="label-floating" >  
					<label class="control-label">Sebagai</label>
					        <select name="level" class="form-control">
						  	<option value="2" selected>Murid</option>
						  	<option value="1" >Guru</option>
						</select>
				    <?=form_error('level');?>
				</div>	
				</td>
			</tr>
		</table>		
		<div class="form-group label-floating">
			<label class="control-label">Username</label>
			<input id="username" name="username" type="text" class="form-control"  autofocus>
			<?=form_error('username');?>
		</div>
		<div class="form-group label-floating">
			<label class="control-label">Email</label>
			<input id="email" name="email" type="email" class="form-control" >
			<?=form_error('email');?>
		</div>
		<div class="form-group label-floating">
			<label class="control-label">Password</label>
			<input id="password" name="password" type="password" class="form-control" >
			<?=form_error('password');?>
		</div>
		<div class="form-group label-floating">
			<label class="control-label">Repassword</label>
			<input id="repassword" name="repassword" type="password" class="form-control" >
			<?=form_error('repassword');?>
		</div>
		<button class="btn btn-block tombol" type="submit">Memulai</button>
        <br>Sudah punya akun? Login
        <a href='<?=base_url('login');?>'>
        	disini
       	</a>
	</form>
</div>
<br><br>
<script>
    $(document).ready(function(){
        $('#repassword').keyup(function(){
            var passpertama=$('#password').val();
            var passkedua=$('#repassword').val();
            if($('#password').val() != $('#repassword').val()){
                $('#repassword').css('background','#F2DEDE');
                $('#password').css('background','#F2DEDE');
            } else if(passpertama == passkedua){
                $('#repassword').css('background','#DCEDC8');
                $('#password').css('background','#DCEDC8');
            }
        }); 
    }); 
</script>