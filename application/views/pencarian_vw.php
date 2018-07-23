<div class="container">
	<br><br>
	<?php foreach($materi as $data)
    	{ 
    ?>
    <div class="coloumn">
	  	<div class="col-sm-12 col-md-4">
	    	<div class="thumbnail">
		    	<div class="over"  style="height: 240px; width: 100%;">
	          	<?php echo "<img src=".str_replace(' ', '%20', ''.base_url('asset/materi/gambar/').$data->gambar.'')." alt='Motor' width='100%' class='grow';>";?>
	          	</div>
	      		<div class="caption">
	        		<h3>
	        			<a href="<?=base_url('materi/detail/').$data->id_materi;?>">
	        				<?=substr(strip_tags($data->judul_materi), 0, 20).'..';?>	        				
	        			</a>
	        		</h3>
	        		<p><?=substr(strip_tags($data->materi), 0, 30).'...';?></p>

	        			<div class="col-sm-12" align="right">
			              <a href="<?=base_url('materi/detail/').$data->id_materi;?>" class="btn btn-success btn-sm" role="button">Selengkapnya</a>       
			            </div>
			            <hr>
	        		<span class="label label-default">Kelas: <?=$data->kelas;?></span>
	        		<span class="label label-default"><?=substr(strip_tags($data->tgl_dibuat), 0, 4).'';?></span>
	        		<span class="label label-default"><i class="glyphicon glyphicon-comment"></i> <?=$this->model_data->total_komentar_per_materi('komentar',$data->id_materi);?></span>
	      		</div>
	    	</div>
	  	</div>
	</div>
    <?php
    	}
    ?>
</div>