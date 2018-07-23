<div class="navbar nav-justified navbar-fixed-top navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?=base_url(); ?>" style="color: white">
        <img src="<?=base_url('asset/logo.png');?>" class="logo">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        E-COURSE
      </a>
    </div>
    <div class="collapse navbar-collapse navHeaderCollapse">
      <ul class="nav navbar-nav" style="margin-top: 0px; margin-bottom: 0px;">
        <li>
          <a href="<?=base_url('materi'); ?>" style="color: white">
            Materi
          </a>
        </li> 
        <li>
          <a href="<?=base_url('berita'); ?>" style="color: white">
            Berita
          </a>
        </li>  
        <li>
          <a href="<?=base_url('feedback'); ?>" style="color: white">
            Feedback
          </a>
        </li>  
      </ul>
      <ul class="nav navbar-nav navbar-right" style="margin-top: 0px; margin-bottom: 0px;">
        <form action="<?=base_url('materi/cari');?>" class="navbar-form navbar-left" role="form" method="POST">
          <div class="form-group">
            <input name="cari" type="text" class="form-control" placeholder="Cari">
          </div>
        </form>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Registrasi<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li  class="active">
              <a href="<?=base_url('daftar'); ?>">
                Daftar
              </a>
            </li>         
            <li>
              <a href='' data-toggle="modal" data-target="#loginModal">
                Login
              </a> 
            </li>
          </ul>
        </li>
      </ul>   
    </div>
  </div>
</div>


  <!-- Modal -->
<div id="loginModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      </div>
      <div class="modal-body">
        <h3 class="modal-title" align="center">Silahkan Login</h3>
        <form class="form-signin" role="form" action="<?=base_url('login/auth');?>" method="post" >
          <h2 class="form-signin-heading" align="center"></h2>
          <div class="form-group label-floating">
            <label class="control-label">Username</label>
            <input name="username" type="text" class="form-control" required autofocus>
          </div>
          <div class="form-group label-floating">
            <label class="control-label">Password</label>
            <input name="password" type="password" class="form-control" required>
          </div>
          <button class="btn btn-block tombol" type="submit">Login</button>
          <br>Belum punya akun? Daftar
          <a href='<?=base_url('daftar');?>'>disini</a>
        </form>
      </div>
      <div class="modal-footer">
        <br>
      </div>
    </div>
  </div>
</div>