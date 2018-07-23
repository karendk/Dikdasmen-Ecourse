<div class="sidebar" data-color="green" data-image="<?=base_url('/asset/sidebar.jpg');?>">
		<div class="logo">
			<a href="<?=base_url();?>" class="simple-text">
				DIKDASMEN PWM
			</a>
		</div>
	    <div class="sidebar-wrapper">
	        <ul class="nav">
	            <li class="<?=($sidebar=='1'?'active':null);?>" >
	                <a href="<?=base_url('admin');?>">
	                    <i class="material-icons">dashboard</i>
	                    <p>Dashboard</p>
	                </a>
	            </li>
	            <li class="<?=($sidebar=='2'?'active':null);?>">
		            <a href="<?=base_url('admin/user');?>">
		                <i class="material-icons">person</i>
	                    <p>User</p>
	                </a>
	            </li>
	            <li class="<?=($sidebar=='3'?'active':null);?>">
	                <a href="<?=base_url('admin/materi');?>">
	                    <i class="material-icons">library_books</i>
	                    <p>Materi</p>
	                </a>
	            </li>
	            <li class="<?=($sidebar=='4'?'active':null);?>">
	                <a href="<?=base_url('admin/komentar');?>">
	                    <i class="material-icons">comments</i>
	                    <p>Komentar</p>
	                </a>
	            </li>
	            <!--<li class="<?=($sidebar=='5'?'active':null);?>">
	                <a href="<?=base_url('admin/berita');?>">
	                    <i class="material-icons">feedback</i>
	                    <p>Berita</p>
	                </a>
	            </li>-->
	            <li class="<?=($sidebar=='6'?'active':null);?>">
	                <a href="<?=base_url('admin/konfirmasi_guru');?>">
	                    <i class="material-icons text-gray">notifications</i>
	                    <p>Konfirmasi</p>
	                </a>
	            </li>
	        </ul>
	   	</div>
	</div>