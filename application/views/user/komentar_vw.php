<div class="container">
	<div class="panel panel-default col-sm-9">
		<div class="panel-body">
			<?php foreach ($detail_materi as $data) {
			?>
				<form role="form" action="<?=base_url('user/tambah_komentar/'.$data->id_materi);?>" method="post">
					<div class="form-group">
						<textarea name="komentar" class="form-control" rows="3" placeholder="Tulis komentar..." required></textarea>
					</div>
					<p>Komen sebagai: <b><?=$this->session->userdata('username'); ?></b></p>
				    <button type="submit" name="submit" class="btn tombol pull-right" title="komen"><span class="glyphicon glyphicon-comment"></span>
				    </button>
				</form>
			<?php 
			} ?>
		</div>
	</div>	
</div>