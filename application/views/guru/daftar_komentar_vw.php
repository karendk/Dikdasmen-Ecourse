<div class="container">
	<div class="panel panel-default col-sm-10">
			<div class="table-responsive">
				<table class="panel-body table table-hover">	
				    <tr>
				    	<td>Id</td>
				    	<td>Komentar</td>
				    	<td>Pengguna</td>
				    	<td>Tanggal</td>
				    </tr>
			<?php foreach($detail_komentar as $data)
			   	{ 
			?>
				    <tr>
				    	<td><?=$data->id_komentar;?></td>
				    	<td>
			       			<?=$data->komentar;?>	  
				    	</td>
				    	<td>
				    		<b><a  href="<?=base_url('user/profil_publik/').$data->username;?>" ><?=$data->nama_lengkap;?></a></b>
				    	</td>				    	
				    	<td><?=$data->tgl_dibuat;?></td>
				    </tr>
			<?php
			   	}
			?>
				</table>			
			</div>
	</div>
</div>