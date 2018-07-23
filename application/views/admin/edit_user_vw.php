<div class="wrapper"><?php 
	$this->load->view("admin/layout/sidebar_vw"); ?>
	<div class="main-panel">
		<nav class="navbar navbar-transparent navbar-absolute">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
				</button>
					<a class="navbar-brand" href="#">User/Edit</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<?php $this->load->view('admin/layout/navbar_vw');?>
					</ul>
				</div>
			</div>
		</nav>
		<div class="content">
			<div class="container-fluid" id="msg">
			<?=$msg?>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="card">
	                    <div class="card-header" data-background-color="green">
	                        <h4 class="title">Edit Profil</h4>
							<p class="category">Lengkapi data profil</p>
	                    </div>
	                    <div class="card-content">
	                        <form role="form" action="<?=base_url('admin/update_profil');?>" method="post">
	                        <div class="row">
	                        	<div class="col-md-5">
									<div class="form-group label-floating">
										<label class="control-label">Nama Lengkap</label>
										<input id="nama_lengkap" maxlength="40" name="nama_lengkap" type="text" class="form-control" value="<?=$nama_lengkap;?>">
									</div>										
									<?=form_error('nama_lengkap');?>
	                            </div>
	                                        <div class="col-md-3">
												<div class="form-group label-floating">
													<input name="patokan" type="text" class="hidden" value="<?=$username;?>">
													<label class="control-label">Username</label>
													<input name="username" type="text" class="form-control" value="<?=$username;?>">
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Email</label>
													<input name="email" type="email" class="form-control" value="<?=$email;?>">
												</div>
												<?=form_error('email');?>
	                                        </div>
	                                    </div>
	                                    <div class="row">	                                        
	                                        <div class="col-md-8">
												<div class="form-group label-floating">
													<label class="control-label">Sekolah</label>
													<input name="sekolah" type="text" class="form-control" value="<?=$sekolah;?>">
												</div>
												<?=form_error('sekolah');?>
	                                        </div>
	                                        <div class="col-md-2">
												<div class="form-group label-floating">
													<label class="control-label">Kelas</label>
													 <select name="kelas" class="form-control">
													  	<option value="1" <?=($kelas=='1'?'selected':null);?>>I</option>
													  	<option value="2" <?=($kelas=='2'?'selected':null);?>>II</option>
													  	<option value="3" <?=($kelas=='3'?'selected':null);?>>III</option>
													  	<option value="4" <?=($kelas=='4'?'selected':null);?>>IV</option>
													  	<option value="5" <?=($kelas=='5'?'selected':null);?>>V</option>
													  	<option value="6" <?=($kelas=='6'?'selected':null);?>>VI</option>
													  	<option value="7" <?=($kelas=='7'?'selected':null);?>>VII</option>
													  	<option value="8 "<?=($kelas=='8'?'selected':null);?>>VIII</option>
													  	<option value="9 "<?=($kelas=='9'?'selected':null);?>>IX</option>
													  	<option value="10" <?=($kelas=='10'?'selected':null);?>>X</option>
													  	<option value="11" <?=($kelas=='11'?'selected':null);?>>XI</option>
													  	<option value="12" <?=($kelas=='12'?'selected':null);?>>XII</option>
													</select>
												</div>
												<?=form_error('kelas');?>
	                                        </div>
	                                        <div class="col-md-2">
												<div class="form-group label-floating">
													<label class="control-label">Posisi</label>
													 <select name="level" class="form-control">
													  	<option value="2" <?=($level=='2'?'selected':null);?>>Murid</option>
													  	<option value="1" <?=($level=='1'?'selected':null);?>>Guru</option>
													  	<option value="0" <?=($level=='0'?'selected':null);?>>Admin</option>
													</select>
												</div>
												<?=form_error('kelas');?>
	                                        </div>
	                                    </div>
	                                    <div class="row">
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">No Hp</label>
													<input id="no_hp" maxlength="12" name="no_hp" type="text" class="form-control" value="<?=$no_hp;?>">
													<?=form_error('no_hp');?>
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Tanggal Lahir</label>
	                                        <!-- markup -->
													<input name="tgl_lahir" id="tgl_lahir" class="datepicker form-control" data-date-format="yyyy-mm-dd" type="text" value="<?=$tgl_lahir;?>"/>	
												</div>
												<?=form_error('tgl_lahir');?>
	                                        </div>	   	
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Jenis Kelamin</label>
													<div class="radio">
														<label>
															<input name="jenis_kelamin" type="radio" value="L" <?=($jenis_kelamin=='L'?'checked="true"':null);?>>
															Laki-Laki
														</label>
														<label>
															<input name="jenis_kelamin" type="radio" value="P"  <?=($jenis_kelamin=='P'?'checked="true"':null);?>>
															Perempuan
														</label>
													</div>
												</div>
												<?=form_error('jenis_kelamin');?>
	                                        </div>
	                                    </div>
	                                    <div class="row">
	                                        <div class="col-md-12">
	                                            <div class="form-group">
													<div class="form-group label-floating">
									    				<label class="control-label">Alamat</label>
								    					<textarea name="alamat" id="alamat" class="form-control" rows="5"><?=$alamat;?></textarea>
		                        					</div>		                        					
								    				<?=form_error('alamat');?>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <div class="row">
	                                        <div class="col-md-12">
	                                            <div class="form-group">
													<div class="form-group label-floating">
									    				<label class="control-label">Status</label>
								    					<textarea name="status" id="status" class="form-control" rows="5"><?=$status;?></textarea>
		                        					</div>
		                        					<?=form_error('status');?>
	                                            </div>
	                                        </div>
	                                    </div>
	                            <div align="right">
								  	<button class="btn btn-success" type="reset"><span class="glyphicon glyphicon-refresh"></span> Default</button>
								    <button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-floppy-disk"></span> Simpan</button>
								</div>
	                        </form>
		                </div>
		            </div>
		        </div>
		    </div>
	</div>
</div>
	            </div>
			</div>
		<?php
			$this->load->view("admin/layout/footer_vw");
		?>
	</div>
</div>
<script type="text/javascript">
   	$(document).ready(function(){
       	data.initDashboardPageCharts();
   	});
	//date picker
	$('input.datepicker').datepicker({
		weekStart:1
	}); 	
</script>