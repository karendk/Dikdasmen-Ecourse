<div class="container">
	<br>
	<div id="msg">
		<?=$msg;?>
	</div><br>
	<div class="panel panel-default">
		<div class="panel-body table-responsive">
			<a href="<?=base_url('guru/buat_materi');?>">
				<button class="btn btn-success">Buat Materi Baru</button>
			</a>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="table-responsive">
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
							    <button class="btn btn-primary btn-fab btn-fab-mini btn-round">
									<i class="material-icons">mode_edit</i>
								</button>
						    </a>
							<a href='' class='smoothScroll' data-toggle='modal' data-target='#hapus<?=$data->id_materi;?>'>
							<button class="btn btn-primary btn-sm btn-fab btn-fab-mini btn-round">
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
    <nav class="col-sm-12">
        <ul class="pagination pagination-primary">
            <!-- Pagination links -->
             <?=$pagination;?>
        </ul>
    </nav>
</div>
<script type="text/javascript">
	setTimeout(function() {
	    $('#msg').fadeOut('slow');
	}, 3000); // <-- time in milliseconds
</script>