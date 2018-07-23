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
					<a class="navbar-brand" href="#">Komentar</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<?php $this->load->view('admin/layout/navbar_vw');?>
					</ul>
				</div>
			</div>
		</nav>
		<div class="content">
			<div class="container-fluid" id="msg">
			<?=$msg?>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="container">
							
						<div class="card">
		                    <div class="card-header" data-background-color="green">
	                        <h4 class="title">Daftar Data</h4>
	                        <p class="category">Daftar data kosong</p>
		                    </div>
		                    <div class="card-content table-responsive">
		                        <table class="table table-hover">	
								    <tr>
								    	<td>Tidak Ada Data</td>
								    </tr>
								</table>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
	</div>
</div>
<script type="text/javascript">
	setTimeout(function() {
	    $('#msg').fadeOut('slow');
	}, 3000); // <-- time in milliseconds
</script>
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







        
