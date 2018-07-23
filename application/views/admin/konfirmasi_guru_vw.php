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
					<a class="navbar-brand" href="#">Konfirmasi Guru</a>
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
	                        <h4 class="title">Daftar Guru</h4>
	                        <p class="category">Daftar user yang mendaftar sebagai guru</p>
	                        </div>
	                        <div class="card-content table-responsive">
	                            <table class="table">
	                                <thead class="text-primary">
	                                  	<th>Username</th>
	                                   	<th>Email</th>
	                                   	<th>Kelas</th>
	                                   	<th>Konfirmasi</th>
	                                </thead>
	                                <tbody>
	        <?php foreach($validasi_guru as $data)
		    	{ 
		    ?>							<tr>
	                                       	<td>
	      										<a  href="<?=base_url('user/profil_publik/').$data->username;?>" ><?=$data->username;?></a>
	      									</td>
	        								<td><?=$data->email;?></td>
	        								<td><?=$data->kelas;?></td>
	        								<td>
	        								<a href='' class='smoothScroll' data-toggle='modal' data-target='#konfirm<?=$data->username;?>'>
												<button class="btn btn-success btn-sm btn-fab btn-fab-mini btn-round">
														<i class="material-icons">edit</i>
												</button>
											</a>
	        			<!--========================================konfirm============================================ -->
			          	<!--Modal -->
			          	<div id="konfirm<?=$data->username;?>" class="modal fade" role="dialog" tabindex="-1">
			            	<div class="modal-dialog">
				              	<div class="modal-content">
				                	<div class="modal-body">
						                    Konfirmasi <strong><?=$data->username;?></strong> sebagai guru?
						                    <br>
						                    <a  href="<?=base_url('admin/validasi_guru?id='.base64_encode($data->username));?>" >
							                    <button type="submit" name="submit" class="btn btn-default btn-sm" title="Hapus">
							                      Ok
							                    </button>
						                    </a>
						                    <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">Batal</button>
				                	</div>
				              	</div>
			            	</div>
			          	</div>
			          <!--============================================HAPUS======================================= -->
	        								</td>
	                                    </tr>
		    <?php
		    	}
		    ?>
	                                </tbody>
	                            </table>
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







        
