<div class="container">
	<br><br>
	<?php foreach($detail_materi as $data)
    	{ 
    ?>
    <div class="panel panel-default col-sm-12 col-md-9">
	    <div class="panel-body">
	    	<img src="<?=base_url('asset/materi/gambar/').$data->gambar;?>" class="img-responsive">
	       	<h3><?=$data->judul_materi;?></h3>
	    	<hr>
	    	<i><h5 style="font-size: 11pt;" align="right">Penulis: <?=$data->nama_lengkap;?> | <?=$data->tgl_dibuat;?></h5></i>
	       	<p align="justify"><?=$data->materi;?></p>
	    	<hr>
	       	<h3>Download</h3>
	       	<a href="<?=base_url('materi/download/'.$data->file);?>"><?=$data->file;?></a>
	  	</div>
	</div>
    <?php
    	}
    ?>
</div>