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
					<a class="navbar-brand" href="#">Materi</a>
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
		                        <a href="<?=base_url('guru/buat_materi');?>">
								<button class="btn btn-info">Buat Materi Baru</button>
							</a>
		                    </div>
		                    <div class="card-content table-responsive">
		                        <table class="panel-body table table-hover">	
								    <tr>
								    	<td>ID</td>
								    	<td>Kelas</td>
								    	<td>Judul</td>
								    	<td>Dibuat</td>
								    	<td>Komentar</td>
								    	<td>Gambar</td>
								    	<td>Aksi</td>
								    </tr>
						<?php foreach($materi as $data)
					    	{ 
					    ?>
								    <tr>
								    	<td><?=$data->id_materi;?></td>
								    	<td><?=$data->kelas;?></td>
								    	<td>
								    		<a href="<?=base_url('materi/detail/').$data->id_materi;?>">
						        				<?=substr(strip_tags($data->judul_materi), 0, 225).'.';?>	        				
						        			</a>
								    	</td>
								    	<td><?=$data->tgl_dibuat;?></td>
								    	<td><?=$this->model_data->total_komentar_per_materi('komentar',$data->id_materi);?></td>
								    	<td>
									    	<div class="kotak">				    		
							          		<?php echo "<img src=".str_replace(' ', '%20', ''.base_url('asset/materi/gambar/').$data->gambar.'')." alt='Motor';>";?>
									    	</div>				    	
								    	</td>
								    	<td>	
											    <a href="<?=base_url('guru/edit_materi?id='.base64_encode($data->id_materi));?>">
												    <button class="btn btn-success btn-fab btn-fab-mini btn-round">
														<i class="material-icons">mode_edit</i>
													</button>
											    </a>
												<a href='' class='smoothScroll' data-toggle='modal' data-target='#hapus<?=$data->id_materi;?>'>
												<button class="btn btn-success btn-sm btn-fab btn-fab-mini btn-round">
														<i class="material-icons">delete</i>
												</button>
											</a>
											<!--========================================HAPUS============================================ -->
								          	
								          	<!--Modal -->
								          	<div id="hapus<?=$data->id_materi;?>" class="modal fade" role="dialog">
								            	<div class="modal-dialog">
									              	<div class="modal-content">
									                	<div class="modal-body">
									                  		<form role="form" action="<?=base_url('guru/hapus_materi/').$data->gambar.'/'.$data->file;?>" method="post">
									                  			<input name="id_materi" value="<?=$data->id_materi;?>" hidden>
											                    Anda ingin menghapus <strong><?=$data->judul_materi;?></strong>?
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
					    ?>
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
<script type="text/javascript">
	setTimeout(function() {
	    $('#msg').fadeOut('slow');
	}, 3000); // <-- time in milliseconds
</script>
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







        
