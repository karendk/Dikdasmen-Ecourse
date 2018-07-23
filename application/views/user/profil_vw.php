<div class="container">	
<br>	<br>	
	<!-- Gambar Profil-->
	<div class="col-sm-4" >
	<br>
		<div class="user" align="middle">
		    <a class="link smoothScroll" href="#update" >
		    	<div class="over" style="width: 100%;height: 100%;">
		    	<?="<img src=".str_replace(' ', '%20', ''.base_url('asset/user/').$foto.'')." width='100%' class='grow';>";?>
		    	</div>
		        <!--<div class="user-info">
		            <h2 class="h2"><?=$username;?></h2>
		            <div class="bio-reveal">
		                <p class="paragraf">
		                 <?=$status;?>
		                </p>
		            </div>
		        </div>-->
		    </a>
		</div>
	</div>
	<!-- Gambar Profil-->
	
	<div class="col-sm-4">
		<br>
		<ul class="list-group">
		  	<li class="list-group-item">Nama Pengguna</li>
		  	<li class="list-group-item">Nama Lengkap</li>
		  	<li class="list-group-item">Kelas</li>
		  	<li class="list-group-item">Sekolah</li>
		  	<li class="list-group-item">E-mail</li>
		  	<li class="list-group-item">No Telp</li>
		  	<li class="list-group-item">Tanggal Lahir</li>
		  	<li class="list-group-item">Jenis Kelamin</li>
		  	<li class="list-group-item">Alamat</li>
		  	<li class="list-group-item">Status</li>
		</ul>
	</div>
	<div class="col-sm-4">
		<br>
		<ul class="list-group">
		  	<li class="list-group-item">: <?=$username;?></li>
		  	<li class="list-group-item">: <?=$nama_lengkap;?></li>
		  	<li class="list-group-item">: <?=$kelas;?></li>
		  	<li class="list-group-item">: <?=$sekolah;?></li>
		  	<li class="list-group-item">: <?=$email;?></li>
		  	<li class="list-group-item">: <?=$no_hp;?></li>
		  	<li class="list-group-item">: <?=$tgl_lahir;?></li>
		  	<li class="list-group-item">: 
			  	<?php 
				  	if ($jenis_kelamin=='L') {
				   		echo "Laki-Laki";				   		
				   		$check_l="checked";
				   		$check_p="";
				   	}
				  	else if ($jenis_kelamin=='P') {
				   		echo "Perempuan";	
				   		$check_l="";			   		
				   		$check_p="checked";
				   	}  
				  	else{
				  		$check_l="";			   		
				   		$check_p="";
				  	} 
			  	?>
		  	</li>
		  	<li class="list-group-item">: <?=$alamat;?></li>
		  	<li class="list-group-item">: <?=$status;?></li>
		</ul>
	</div>
</div>

<br><br>
<a name="update"></a>
<hr>
<div class="container">
<?=$msg;?>
	<div class="panel panel-default">
		<div class="panel-heading">EDIT</div>
		<div class="panel-body">
			<form class="form-horizontal" role="form" action="<?=base_url('user/update_profil');?>" method="post">
			    <h2 class="form-signin-heading"></h2>
				<div class="form-group">  
				    <h4 class="col-sm-2 control-label">Nama Lengkap</h4>
					<div class="col-sm-10">
				        <input id="nama_lengkap" maxlength="40" name="nama_lengkap" type="text" class="form-control" value="<?=$nama_lengkap;?>" placeholder="Nama Lengkap">
				    </div>
				    <?=form_error('nama_lengkap');?>
				</div>
				<div class="form-group">  
				    <h4 class="col-sm-2 control-label">Kelas</h4>
					<div class="col-sm-10">
				        <select name="kelas" class="form-control">
						  	<option value="1" <?=($kelas=='1'?'selected':null);?>>1</option>
						  	<option value="2" <?=($kelas=='2'?'selected':null);?>>2</option>
						  	<option value="3" <?=($kelas=='3'?'selected':null);?>>3</option>
						  	<option value="4" <?=($kelas=='4'?'selected':null);?>>4</option>
						  	<option value="5" <?=($kelas=='5'?'selected':null);?>>5</option>
						  	<option value="6" <?=($kelas=='6'?'selected':null);?>>6</option>
						  	<option value="7" <?=($kelas=='7'?'selected':null);?>>7</option>
						  	<option value="8 "<?=($kelas=='8'?'selected':null);?>>8</option>
						  	<option value="9 "<?=($kelas=='9'?'selected':null);?>>9</option>
						  	<option value="10" <?=($kelas=='10'?'selected':null);?>>10</option>
						  	<option value="11" <?=($kelas=='11'?'selected':null);?>>11</option>
						  	<option value="12" <?=($kelas=='12'?'selected':null);?>>12</option>
						</select>
				    </div>
				    <?=form_error('kelas');?>
				</div>
				<div class="form-group">  
				    <h4 class="col-sm-2 control-label">Sekolah</h4>
					<div class="col-sm-10">
				        <input id="sekolah" maxlength="40" name="sekolah" type="text" class="form-control" value="<?=$sekolah;?>" placeholder="Sekolah">
				    </div>
				    <?=form_error('nama_lengkap');?>
				</div>
				<div class="form-group">  
				    <h4 class="col-sm-2 control-label">No Hp</h4>
					<div class="col-sm-10">
				        <input id="no_hp" maxlength="12" name="no_hp" type="text" class="form-control" value="<?=$no_hp;?>" placeholder="Masukan no telp/HP">
				    </div>
				    <?=form_error('no_hp');?>
				</div>
				<div class="form-group">  
				    <h4 class="col-sm-2 control-label">Tanggal Lahir </h4>
					    <div class="col-sm-10">
					    	<!-- markup -->
							<input name="tgl_lahir" id="tgl_lahir" class="datepicker form-control" data-date-format="yyyy-mm-dd" type="text" value="<?=$tgl_lahir;?>"/>			
					    </div>
					    <?=form_error('tgl_lahir');?>
				</div>
				<div class="form-group">  
				    <h4 class="col-sm-2 control-label">Jenis Kelamin</h4>
				    <div class="col-sm-10">
				    	<div class="radio">
							<label>
								<input name="jenis_kelamin" type="radio" value="L" <?=$check_l;?>>
								Laki-Laki
							</label>
						</div>
						<div class="radio">
							<label>
								<input name="jenis_kelamin" type="radio" value="P" <?=$check_p;?>>
								Perempuan
							</label>
						</div>
				    </div>
				    <?=form_error('jenis_kelamin');?>
				</div>
				<div class="form-group"> 
				    <h4 class="col-sm-2 control-label">Alamat</h4>
				    <div class="col-sm-10">
				        <textarea name="alamat" id="alamat" class="form-control" placeholder="Alamat" rows="5"><?=$alamat;?></textarea>
				    </div>
				    <?=form_error('alamat');?>
				</div>
				<div class="form-group"> 
				  	<a name="katabijak"></a> 
					<h4 class="col-sm-2 control-label">Status</h4>
					<div class="col-sm-10">
						<textarea name="status" id="status" class="form-control" placeholder="Status" rows="5"><?=$status;?></textarea>
					</div>
				</div>
				<?=form_error('status');?>
				<div align="right">
				  	<button class="btn tombol" type="reset"><span class="glyphicon glyphicon-refresh"></span> Default</button>
				    <button class="btn tombol" type="submit"><span class="glyphicon glyphicon-floppy-disk"></span> Simpan</button>
				</div>
			</form>  
		</div>
	</div>
</div>
<script type="text/javascript">
	//date picker
	$('.datepicker').datepicker({
		weekStart:1
	}); 
</script>