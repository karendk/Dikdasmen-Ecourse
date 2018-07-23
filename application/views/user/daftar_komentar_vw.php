<div class="container">
 	<div class="panel panel-default col-sm-12 col-md-9">
	    <div class="panel-body">
	    	<a href="" name="komentar"></a>	      	
	       	<h3>Komentar</h3>
		    <?php foreach($detail_komentar as $data)
		    	{ 
		    ?>
	     		<hr>
	      		<h5 style="font-size: 11pt;"><b><a  href="<?=base_url('user/profil_publik/').$data->username;?>" ><?=$data->nama_lengkap;?></a></b>, <?=$data->tgl_dibuat;?></h5>
	        	<p align="justify"><?=$data->komentar;?></p>
		    <?php
		    	}
		    ?>
	    </div>
	</div>
</div>