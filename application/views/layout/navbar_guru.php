<style>
  .affix {
    top: 0;
    width: 100%;
    -webkit-transition: all .5s ease-in-out;
    transition: all .5s ease-in-out;
    /*background-color: rgba(63,81,181,0.6)  !important; */
    background-color: rgba(0,0,0,0.4)  !important;
  }
  .affix a {
    -webkit-transition: all .5s ease-in-out;
    transition: all .5s ease-in-out;
  }
  .affix-top a{   
  }
  .affix-top{  

  }
  </style>
<nav class="navbar navbar-fixed-top navbar-inverse"  data-spy="affix" data-offset-top="80">
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
          <a href="<?=base_url('guru'); ?>" style="color: white">
            Mengajar
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
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?="Hai, ".$this->session->username;?><b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li>
              <a href="<?=base_url('user/profil'); ?>">
                Profil
              </a>
            </li>         
            <li>
              <a href='<?=base_url('login/logout');?>'>
                Logout
              </a> 
            </li>
          </ul>
        </li>
      </ul>   
    </div>
  </div>
</nav>