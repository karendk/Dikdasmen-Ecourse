<div class="wrapper"><?php 
	$data['sidebar']=$sidebar;
	$this->load->view("admin/layout/sidebar_vw",$data); ?>
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
					<a class="navbar-brand" href="#">Dashboard</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<?php $this->load->view('admin/layout/navbar_vw');?>
					</ul>
				</div>
			</div>
		</nav>
		<div class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="card card-stats">
							<div class="card-header" data-background-color="green">
								<i class="material-icons">person</i>
							</div>
							<div class="card-content">
								<p class="category">User</p>
								<h3 class="title" id="user"><?=$user;?></h3>
							</div>
							<div class="card-footer">
								<div class="stats">
									<i class="material-icons">update</i> Just Updated
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="card card-stats">
							<div class="card-header" data-background-color="green">
								<i class="material-icons">library_books</i>
							</div>
							<div class="card-content">
								<p class="category">Materi</p>
								<h3 class="title" id="materi"><?=$materi;?></h3>
							</div>
							<div class="card-footer">
								<div class="stats">
									<i class="material-icons">update</i> Just Updated
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="card card-stats">
							<div class="card-header" data-background-color="green">
								<i class="material-icons">comments</i>
							</div>
							<div class="card-content">
								<p class="category">Komentar</p>
								<h3 class="title" id="komentar"><?=$komentar;?></h3>
							</div>
							<div class="card-footer">
								<div class="stats">
									<i class="material-icons">update</i> Just Updated
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="card card-stats">
							<div class="card-header" data-background-color="green">
								<i class="material-icons">feedback</i>
							</div>
							<div class="card-content">
								<p class="category">Berita</p>
								<h3 class="title" id="berita"><?=$berita;?></h3>
							</div>
							<div class="card-footer">
								<div class="stats">
									<i class="material-icons">update</i> Just Updated
								</div>
							</div>
						</div>
					</div>					
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="card card-stats">
							<div class="card-header" data-background-color="green">
								<i class="material-icons">rss_feed</i>
							</div>
							<div class="card-content">
								<p class="category">Feedback</p>
								<h3 class="title" id="feedback"><?=$feedback;?></h3>
							</div>
							<div class="card-footer">
								<div class="stats">
									<i class="material-icons">update</i> Just Updated
								</div>
							</div>
						</div>
					</div>				
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="card card-stats">
							<div class="card-header" data-background-color="green">
								<i class="material-icons">pageview</i>
							</div>
							<div class="card-content">
								<p class="category">Materi dilihat</p>
								<h3 class="title" id="feedback"><?=$lihat_materi;?></h3>
							</div>
							<div class="card-footer">
								<div class="stats">
									<i class="material-icons">update</i> Just Updated
								</div>
							</div>
						</div>
					</div>				
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="card card-stats">
							<div class="card-header" data-background-color="green">
								<i class="material-icons">file_download</i>
							</div>
							<div class="card-content">
								<p class="category">Materi didownload</p>
								<h3 class="title" id="feedback"><?=$jumlah_download;?></h3>
							</div>
							<div class="card-footer">
								<div class="stats">
									<i class="material-icons">update</i> Just Updated
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header card-chart" data-background-color="blue">
								<div class="ct-chart" id="emailsSubscriptionChart"></div>
							</div>
							<div class="card-content">
								<h4 class="title">Statistik Data</h4>
								<p class="category"></p>
							</div>
							<div class="card-footer">
								<div class="stats">
								<i class="material-icons">update</i> Just Updated
								</div>
							</div>
						</div>
					</div>
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
