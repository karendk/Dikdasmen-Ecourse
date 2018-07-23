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
					<a class="navbar-brand" href="#">Komentar</a>
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
		                       	<a href="<?=base_url('materi');?>">
								<button class="btn btn-info">Buat Komentar Baru</button>
								</a>
		                    </div>

		                    <div class="card-content table-responsive">
		                        <table class="table">	
		                        	<thead class="text-primary">
								    	<th>ID</th>
								    	<th>ID User</th>
								    	<th>ID Materi</th>
								    	<th>Komentar</th>
								    	<th>Dibuat</th>
								    	<th>Aksi</th>
								    </thead>
						<?php foreach($komentar as $data)
					    	{ 
					    ?>			
					    			<tbody>
								    <tr>
								    	<td><?=$data->id_komentar;?></td>
								    	<td><?=$data->id_user;?></td>
								    	<td><?=$data->id_materi;?></td>
								    	<td><?=$data->komentar;?></td>
								    	<td><?=$data->tgl_dibuat;?></td>
								    	<td>
												<a href='' class='smoothScroll' data-toggle='modal' data-target='#hapus<?=$data->id_komentar;?>'>
												<button class="btn btn-success btn-sm btn-fab btn-fab-mini btn-round">
														<i class="material-icons">delete</i>
												</button>
											</a>
											<!--========================================HAPUS============================================ -->
								          	
								          	<!--Modal -->
								          	<div id="hapus<?=$data->id_komentar;?>" class="modal fade" role="dialog">
								            	<div class="modal-dialog">
									              	<div class="modal-content">
									                	<div class="modal-body">
									                  		<form role="form" action="<?=base_url('admin/hapus_komentar/').$data->id_komentar;?>" method="post">
									                  			<input name="id_komentar" value="<?=$data->id_komentar;?>" hidden>
											                    Anda ingin menghapus <strong><?=$data->komentar;?></strong>?
											                    <br>
											                    <button type="submit" name="submit" class="btn btn-default btn-sm" title="Hapus">
											                      Ok
											                    </button>
											                    <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">Batal</button>
										                  	</form>
									                	</div>
									              	</div>
								            	</div>
								          	</div>
								          <!--============================================HAPUS======================================= -->
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







        
