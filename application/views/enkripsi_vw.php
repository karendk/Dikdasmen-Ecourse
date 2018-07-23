<div class="container">
	<br><br>
		<!-- Tabs with icons on Card -->
			<div class="card card-nav-tabs">
				<div class="header" style="background-color: #9E9E9E;">
				<!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
					<div class="nav-tabs-navigation">
						<div class="nav-tabs-wrapper">
							<ul class="nav nav-tabs" data-tabs="tabs">
								<li class="active">
									<a href="#encrypt" data-toggle="tab">	
										Encrypt
									</a>
								</li>
								<li>
									<a href="#decrypt" data-toggle="tab">		
										Decrypt
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="content">
					<div class="tab-content text-center">
						<div class="tab-pane active" id="encrypt">
							<form action="" class="form-signin" role="form" id="form" method="POST">
									<div class="form-group label-floating">
										<label class="control-label">Original Text</label>
										<textarea id="ori" class="form-control" rows="5"></textarea>
									</div>
									<div>Encrypted Text</div>						
									<textarea id="enc" class="form-control cursor" rows="5" style="cursor:text; text-transform: uppercase;" disabled></textarea>
							</form>
						</div>
						<div class="tab-pane" id="decrypt">
							<form action="" class="form-signin" role="form" id="form2" method="POST">					
								<div class="form-group label-floating">
									<label class="control-label">Encrypted Text</label>
									<textarea id="sec" class="form-control" rows="5"></textarea>
								</div>
									<div>Decrypted Text</div>						
									<textarea id="dec" class="form-control cursor" rows="5" style="cursor:text; text-transform: uppercase;" disabled></textarea>
							</form>
						</div>
					</div>
				</div>
			</div>
		<!-- End Tabs with icons on Card -->
		</div>
	<br><br>
</div>