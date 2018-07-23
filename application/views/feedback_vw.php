<div class="container">    
	<br><br>
	<?=$msg;?>
    <div class="panel panel-default col-md-6 col-md-offset-3">
        <div class="panel-body">     
            <div align="center">
                <h2 class="title">Feedback</h2>
            </div>
                <div class="card-content">
                    <form role="form" action="<?=base_url('feedback/kirim_feedback');?>" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Nama Awal</label>
                                    <input id="f_nama" maxlength="40" name="f_nama" type="text" class="form-control">
                                </div>                                      
                                <?=form_error('f_nama');?>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Nama Akhir</label>
                                    <input name="l_nama" type="text" class="form-control">
                                </div>               
                                <?=form_error('l_nama');?>
                            </div>
                        </div>
                        <div class="row">                                           
                            <div class="col-md-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Email</label>
                                    <input name="email" type="email" class="form-control">
                                </div>
                                <?=form_error('email');?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Isi Feedback</label>
                                        <textarea name="message" id="message" class="form-control" rows="5"></textarea>
                                    </div>                                                  
                                    <?=form_error('message');?>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div align="right">
                            <button class="btn btn-success" type="submit">
                                Kirim
                            </button>
                        </div>
                    </form>
                </div>
        </div>
    </div>   
</div>