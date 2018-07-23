<div class="container">	
	<!-- Gambar Profil-->
	<div class="col-sm-4" >
	<br>
		<div class="user" align="middle">
		    <a class="link smoothScroll" href="#katabijak" >
		    	<div class="over" style="width: 100%;height: 100%;">
		    	<?="<img src=".str_replace(' ', '%20', ''.base_url('asset/user/').$foto.'')." width='100%' class='grow';>";?>
		    	</div>
		        <!--<div class="user-info">
		            <h2 class="h2"><?=$username;?></h2>
		            <div class="bio-reveal">
		                <p class="paragraf">
		                 <?=$status;?>
		                </p>
		            </div>
		        </div>-->
		    </a>
		</div>
	</div>
	<!-- Gambar Profil-->
	
	<div class="col-sm-4">
		<br>
		<ul class="list-group">
		  	<li class="list-group-item">Nama Pengguna</li>
		  	<li class="list-group-item">Nama Lengkap</li>
		  	<li class="list-group-item">Kelas</li>
		  	<li class="list-group-item">Sekolah</li>
		  	<li class="list-group-item">E-mail</li>
		  	<li class="list-group-item">No Telp</li>
		  	<li class="list-group-item">Tanggal Lahir</li>
		  	<li class="list-group-item">Jenis Kelamin</li>
		  	<li class="list-group-item">Alamat</li>
		  	<li class="list-group-item">Status</li>
		</ul>
	</div>
	<div class="col-sm-4">
		<br>
		<ul class="list-group">
		  	<li class="list-group-item">: <?=$username;?></li>
		  	<li class="list-group-item">: <?=$nama_lengkap;?></li>
		  	<li class="list-group-item">: <?=$kelas;?></li>
		  	<li class="list-group-item">: <?=$sekolah;?></li>
		  	<li class="list-group-item">: <?=$email;?></li>
		  	<li class="list-group-item">: <?=$no_hp;?></li>
		  	<li class="list-group-item">: <?=$tgl_lahir;?></li>
		  	<li class="list-group-item">: 
			  	<?php 
				  	if ($jenis_kelamin=='L') {
				   		echo "Laki-Laki";				   		
				   		$check_l="checked";
				   		$check_p="";
				   	}
				  	else if ($jenis_kelamin=='P') {
				   		echo "Perempuan";	
				   		$check_l="";			   		
				   		$check_p="checked";
				   	}  
				  	else{
				  		$check_l="";			   		
				   		$check_p="";
				  	} 
			  	?>
		  	</li>
		  	<li class="list-group-item">: <?=$alamat;?></li>
		  	<li class="list-group-item">: <?=$status;?></li>
		</ul>
	</div>
</div>