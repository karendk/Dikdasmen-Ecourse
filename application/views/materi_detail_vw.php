<div class="container">
	<br><br>
	<?php foreach($detail_materi as $data)
    	{ 
    ?>
    <div class="panel panel-default col-sm-9">
	    <div class="panel-body">
	    	<img src="<?=base_url('asset/materi/gambar/').$data->gambar;?>" class="img-responsive">
	       	<h3><?=$data->judul_materi;?></h3>
	    	<hr>
	    	<i><h5 style="font-size: 11pt;" align="right">Penulis: <?=$data->nama_lengkap;?> | <?=$data->tgl_dibuat;?></h5></i>
	       	<p align="justify"><?=$data->materi;?></p>
	    	<hr>
	       	<h3>Unduh Materi</h3>
	       	<a href="<?=base_url('materi/download/'.$data->file.'/'.$data->id_materi);?>"><?=$data->file;?></a>
	        <span class="label label-default">
	        	<i class="glyphicon glyphicon-download-alt"></i> 
	        	<?=$this->model_data->total_download_materi('jumlah_download',$data->id_materi);?>
	        </span> 	        
	  	</div>
	</div>
    <?php
    	}
    ?>
    <?php $this->load->view('populer_vw'); ?>
</div>