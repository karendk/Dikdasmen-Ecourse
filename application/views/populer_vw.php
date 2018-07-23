<div class="col-lg-3">
	<div class="card">
		<div class="nav-tabs-navigation">
			<div class="nav-tabs-wrapper">
				<ul class="nav nav-tabs navbar navbar-inverse" data-tabs="tabs">
					<li>
						<a href="#materi" data-toggle="tab">
							<i class="material-icons">library_books</i>
							Materi Populer
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="content">
			<div class="tab-content">
				<div class="list-group">
					<?php 
						$i=1;
						foreach($materi_populer as $data){							
					?>	
					  		<a href="<?=base_url('materi/detail/').$data->id_materi;?>" class="list-group-item">  
						    	<span class="badge"><?=$data->total;?></span>
			        			<?=$i.'. '.substr(strip_tags($data->judul_materi), 0, 20).'..';?>
						  	</a>  
				  	<?php 
				  		$i++;} 
				  	?>
				</div>	 
			</div>
		</div>
	</div>
</div>
<div class="col-lg-3">
	<div class="card">
		<div class="nav-tabs-navigation">
			<div class="nav-tabs-wrapper">
				<ul class="nav nav-tabs navbar navbar-inverse" data-tabs="tabs">
					<li>
						<a href="#buku" data-toggle="tab">
							<i class="material-icons">file_download</i>
							Buku Terlaris
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="content">
			<div class="tab-content">
				<div class="tab-pane active" id="buku">
					<div class="list-group">
						<?php 
							$i=1;
							foreach($buku_populer as $data){							
						?>	
						  		<a href="<?=base_url('materi/detail/').$data->id_materi;?>" class="list-group-item">  
							    	<span class="badge"><?=$data->total;?></span>
									<?=$i.'. '.substr(strip_tags($data->file), 0, 20).'..';?>
								</a>  
						<?php 
							$i++;} 
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-lg-3">
	<div class="card">
		<div class="nav-tabs-navigation">
			<div class="nav-tabs-wrapper">
				<ul class="nav nav-tabs navbar navbar-inverse" data-tabs="tabs">
					<li>
						<a href="#buku" data-toggle="tab">
							<i class="material-icons">comment</i>
							Komentar terbaru
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="content">
			<div class="tab-content">
				<div class="tab-pane active" id="buku">
					<div class="list-group">
						<?php 
							$i='-';
							foreach($komentar_terbaru as $data){							
						?>	
						  		<a href="<?=base_url('materi/detail/').$data->id_materi;?>" class="list-group-item">  
							    	<span class="badge"><?=$data->username;?></span> 
									<?=$i.' '.substr(strip_tags($data->komentar), 0, 20).'-';?>
									<u><div style="font-size: 8pt;"><?=$data->tgl_dibuat;?></div></u>
								</a>  
						<?php 
							} 
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>