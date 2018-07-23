<div class="container">
	<br><br>	
	<div class="col-lg-9">
		<?php foreach($berita as $data)
			{
		?>
		    <div class="panel panel-default col-sm-12">
		    	<div class="panel-body">    
		        	<h3>
		        		<a href="<?=base_url('berita/detail/').$data->id_berita;?>">
		        			<?=substr(strip_tags($data->judul_berita), 0, 24).'..';?>	        				
		        		</a>
		        	</h3>
		        	<div align="justify">
		        		<p><?=substr(strip_tags($data->berita), 0, 160).'..';?></p>
		        		<span class="label label-default"><?=substr(strip_tags($data->tgl_dibuat), 0, 20).'';?></span>
		    		</div>
		    	</div>
		    </div>	      		
	    <?php
	    	}
	    ?>   
    </div> 
    <?php $this->load->view('populer_vw'); ?>
    <nav class="col-sm-12">
        <ul class="pagination pagination-primary">
            <!-- Pagination links -->
             <?=$pagination;?>
        </ul>
    </nav>
</div>














