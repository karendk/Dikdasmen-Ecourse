<div class="container">
<br>
<?=$msg;?>
	<div class="panel panel-default col-sm-10">
		<div class="panel-body">
			<form class="form-horizontal" role="form" action="<?=base_url('guru/tambah_materi');?>" method="post" enctype="multipart/form-data">
			    <h2 class="form-signin-heading"></h2>
				<div class="form-group">  
				    <h4 class="col-sm-1">Judul</h4>
					<div class="col-sm-8">
				        <input id="judul_materi" maxlength="225" name="judul_materi" type="text" class="form-control" placeholder="...">
				    </div>
				    <?=form_error('judul_materi');?>
				    <h4 class="col-sm-1 control-label">Kelas</h4>
					<div class="col-sm-1">
				        <select name="kelas" class="form-control">	  	
						  	<option value="1" <?=($kelas=='1'?'selected':null);?>>1</option>
						  	<option value="2" <?=($kelas=='2'?'selected':null);?>>2</option>
						  	<option value="3" <?=($kelas=='3'?'selected':null);?>>3</option>
						  	<option value="4" <?=($kelas=='4'?'selected':null);?>>4</option>
						  	<option value="5" <?=($kelas=='5'?'selected':null);?>>5</option>
						  	<option value="6" <?=($kelas=='6'?'selected':null);?>>6</option>
						  	<option value="7" <?=($kelas=='7'?'selected':null);?>>7</option>
						  	<option value="8 "<?=($kelas=='8'?'selected':null);?>>8</option>
						  	<option value="9 "<?=($kelas=='9'?'selected':null);?>>9</option>
						  	<option value="10" <?=($kelas=='10'?'selected':null);?>>10</option>
						  	<option value="11" <?=($kelas=='11'?'selected':null);?>>11</option>
						  	<option value="12" <?=($kelas=='12'?'selected':null);?>>12</option>
						</select>
				    </div>				    
				    <?=form_error('kelas');?>
				</div>

				<div class="form-group"> 
					<div class="col-sm-12">
						<label hidden>Materi</label>
						<textarea name="materi" id="materi" class="notebook" placeholder="..." rows="15"></textarea>
					</div>
				</div>
				<?=form_error('materi');?>				
				<div class="form-group">  

				<h4 class="col-sm-2">Gambar</h4>
				<div class="col-sm-4">   	
					<input id="input-gambar" name="gambar" type='file' accept="image/jpg,image/jpeg,image/png" class="hidden"/>
					<div id="gambar" class="thumbnail over"  style="height: 200px; width: 200px;">
		          		<img id="preview" src="<?=base_url('/asset/preview.png');?>" alt="Gambar" height=100%/>
		          	</div>				    
				</div>
				<?=form_error('gambar');?>	
				</div>							
				<div class="">  
				    <h4 class="col-sm-2">File</h4>
					<div class="col-sm-4">
				        <input name="file" type='file' accept=".txt,.doc,.docx,.pdf,.xls,.xlsx,.ppt,.zip,.rar">
				    </div>
				    <?=form_error('file');?>
				</div>	
				<div align="right">
				    <button class="btn tombol" type="submit">Terbitkan</button>
				</div>
			</form>  
		</div>
	</div>
</div>
<script type="text/javascript">
  	function readURL(input) {
    	if (input.files && input.files[0]){
        	var reader = new FileReader();
          	reader.onload = function (e){
           	$('#preview').attr('src', e.target.result);
          	}
          	reader.readAsDataURL(input.files[0]);
      	}
    }
   	$("#input-gambar").change(function(){
    	readURL(this);
    });
</script>