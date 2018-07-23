<!--========================================HAPUS============================================ -->
<!--Modal -->
<div id="tambahuser" class="modal fade" role="dialog">
   	<div class="modal-dialog">
       	<div class="modal-content">
       		<div class="modal-header">
       		User Baru
       		</div>
           	<div class="modal-body">	
				<form action="<?=base_url('admin/tambah_user');?>" class="form-signin" method="POST">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group label-floating" >  
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
						</div>
						<div class="col-md-6">
							<div class="form-group label-floating" >  
								<label class="control-label">Sebagai</label>
						        <select name="level" class="form-control">
								  	<option value="2" selected>Murid</option>
								  	<option value="1" >Guru</option>
								  	<option value="0" >Admin</option>
								</select>
							    <?=form_error('level');?>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group label-floating">
								<label class="control-label">Username</label>
								<input id="username" name="username" type="text" class="form-control"  autofocus>
								<?=form_error('username');?>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group label-floating">
								<label class="control-label">Email</label>
								<input id="email" name="email" type="email" class="form-control" >
								<?=form_error('email');?>
							</div>
						</div>
					</div>	
					<div class="row">
						<div class="col-md-6">		
							<div class="form-group label-floating">
								<label class="control-label">Password</label>
								<input id="password" name="password" type="password" class="form-control" >
								<?=form_error('password');?>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group label-floating">
								<label class="control-label">Repassword</label>
								<input id="repassword" name="repassword" type="password" class="form-control" >
								<?=form_error('repassword');?>
							</div>
						</div>
					</div>
	                <div align="right">
						<button class="btn btn-success" type="submit">Tambah</button>
					</div>
				</form>
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
            </div>
        </div>
    </div>
</div>
								          <!--============================================HAPUS======================================= -->
<div class="wrapper"><?php 
	$data['sidebar']=$sidebar;
	$this->load->view("admin/layout/sidebar_vw",$data); ?>
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
					<a class="navbar-brand" href="#">User</a>
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
								<a href='' class='smoothScroll' data-toggle='modal' data-target='#tambahuser'>
									<button class="btn btn-info">
										Buat User Baru
									</button>
								</a>
								
		                    </div>

		                    <div class="card-content table-responsive">
		                        <table class="table">	
		                        	<thead class="text-primary">
								    	<th>ID</th>
								    	<th>Username</th>
								    	<th>E-mail</th>
								    	<th>Kelas</th>
								    	<th>Sekolah</th>
								    	<th>No HP</th>
								    	<th>Posisi</th>
								    	<th>Aktif</th>
								    	<th>Aksi</th>
								    </thead>
						<?php foreach($user as $data)
					    	{ 
					    		if($data->level==0){
					    			$posisi="Admin";
					    		}
					    		else if($data->level==1){
					    			$posisi="Guru";
					    		}
					    		else{
					    			$posisi="User";
					    		}

					    		if($data->aktif==1){
					    			$aktif="<span class='glyphicon glyphicon-ok' aria-hidden='true' style='color:green;'></span>";
					    		}
					    		else{
					    			$aktif="<span class='glyphicon glyphicon-remove' aria-hidden='true' style='color:red;'></span>";
					    		}
					    ?>			
					    			<tbody>
								    <tr>
								    	<td><?=$data->id_user;?></td>
								    	<td><?=$data->username;?></td>
								    	<td><?=$data->email;?></td>
								    	<td><?=$data->kelas;?></td>
								    	<td><?=$data->sekolah;?></td>
								    	<td><?=$data->no_hp;?></td>		
								    	<td><?=$posisi;?></td>					    	
								    	<td><?=$aktif;?></td>
								    	<td>
											<a href="<?=base_url('admin/edit_user?id='.base64_encode($data->username));?>">
												<button class="btn btn-success btn-fab btn-fab-mini btn-round" data-toggle="tooltip" data-placement="bottom" title="Edit User">
													<i class="material-icons">mode_edit</i>
												</button>
											</a>
											<?php 
												if($data->aktif==1){
													echo '<a href="'.base_url('admin/nonaktifkan_user?id='.base64_encode($data->username)).'">
														<button class="btn btn-default btn-fab btn-fab-mini btn-round" data-toggle="tooltip" data-placement="top" title="Non-Aktifkan User?">
															<i class="material-icons">clear</i>
														</button>
													</a>';
												} 
												else{
													echo '<a href="'.base_url('admin/aktifkan_user?id='.base64_encode($data->username)).'">
														<button class="btn btn-success btn-fab btn-fab-mini btn-round" data-toggle="tooltip" data-placement="top" title="Aktifkan User?">
															<i class="material-icons">done</i>
														</button>
													</a>';
												}
											?>
											
								    	</td>
					    			</tr>
					    <?php
					    	}
					    ?>		</tbody>
								</table>
		                    </div>
		                </div>
		            </div>
		    </div>

	    <nav class="col-sm-12">
	        <ul class="pagination pagination-success">
	            <!-- Pagination links -->
	             <?=$pagination;?>
	        </ul>
	    </nav>
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
</script>







        
