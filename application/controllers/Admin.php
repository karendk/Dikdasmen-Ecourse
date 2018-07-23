<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller{	
	public function __construct(){
		parent::__construct();	
	    //load the model      	    
		$this->load->model('model_data');
		$this->load->library('form_validation');		
	}
	
	public function index(){
		$this->dashboard();
	}

	public function navbar(){
		if ($this->session->has_userdata('level')) {
			if ($this->session->userdata('level')==0) {
				$this->load->view("layout/navbar_admin");
			}
			else if ($this->session->userdata('level')==1 && $this->session->userdata('validasi_guru')==1) {
				$this->load->view("layout/navbar_guru");
			}	
			else{				
				$this->load->view("layout/navbar_user");
			}
		}
		else{
			$this->load->view("layout/navbar");
		}		
	}

	public function inisiasi(){
		if ($this->session->has_userdata('level')) {
			if ($this->session->userdata('level')==0 && $this->session->userdata('aktif')==1) {
			}
			else if ($this->session->userdata('level')==1  && $this->session->userdata('validasi_guru')==1 && $this->session->userdata('aktif')==1) {
				redirect(base_url());
			}	
			else if ($this->session->userdata('level')==2 && $this->session->userdata('aktif')==1) {
				redirect(base_url());
			}	
			else{
				redirect(base_url());
			}
		}
		else{
			redirect(base_url());
		}
	}
	
	public function tambah_user(){
		$this->inisiasi();
		//form validator		
		$this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[user.username]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|max_length[16]');
		$this->form_validation->set_rules('repassword', 'Repassword', 'required|matches[password]');
		$this->form_validation->set_rules('kelas', 'Kelas', 'trim|required|max_length[2]');
		$this->form_validation->set_rules('level', 'Sebagai', 'trim|required|max_length[2]');
		//jika fv salah
		if ($this->form_validation->run()==FALSE) {
			$this->user();
		}
		//jika benar
		else{
			//ambil nilai dari form
			$username=$this->input->post('username');
			$email=$this->input->post('email');
			$password=$this->input->post('password');
			$kelas=$this->input->post('kelas');
			$level=$this->input->post('level');
			//memasukan ke array
			$data=array(
				'username'=>$username,
				'email'=>$email,
				'password'=>MD5($password),
				'level'=>$level
			);
			$data2=array(
				'username'=>$username,
				'kelas'=>$kelas );
			//menambah ke database
			$this->model_data->add_data('user',$data);			//database user
			$this->model_data->add_data('user_detail',$data2);	//database user_detail				
			$msg="<div class='alert alert-success'>
					<a href='#'' class='close' data-dismiss='alert' aria-label='close'>
						<span aria-hidden='true'>
							<i class='material-icons'>clear</i>
						</span>
						</a>
					<div class='alert-icon'>
					    <i class='material-icons'>check</i>
					</div>
					<b>Berhasil:</b> user baru telah ditambahkan
				</div>";
			$this->session->set_userdata('session_msg',$msg);
			redirect(base_url('admin/user'));
		}
	}

	public function edit_user(){
		$this->inisiasi();		
		$patokan=base64_decode($this->input->get('id'));
		//mendapatkan data user
		$user=$this->model_data->get_user($patokan);
		$data = array(
			'id_user'=>$user{0}->id_user,
			'username'=>$user{0}->username,
			'kelas'=>$user{0}->kelas,
			'sekolah'=>$user{0}->sekolah,
			'nama_lengkap'=>$user{0}->nama_lengkap,
			'jenis_kelamin'=>$user{0}->jenis_kelamin,
			'tgl_lahir'=>$user{0}->tgl_lahir,
			'no_hp'=>$user{0}->no_hp,
			'alamat'=>$user{0}->alamat,
			'status'=>$user{0}->status,
			'level'=>$user{0}->level,
			'email'=>$user{0}->email
		);
		$data['msg']=$this->session->userdata('session_msg');
		$teks['title']="Edit User";
		$data['sidebar']=2;
		$this->load->view("layout/load_admin_css", $teks);
		//return the data in view  
		$this->load->view("admin/edit_user_vw",$data);
		$this->load->view("layout/load_admin_js");
		$this->session->unset_userdata('session_msg');	
	}

	public function nonaktifkan_user(){
		$this->inisiasi();		
		$patokan=base64_decode($this->input->get('id'));
		//mendapatkan data user
		$user=$this->model_data->get_user($patokan);
		$data = array(
			'level'=>$user{0}->level
		);
		if($data['level']==0){
			$msg="<div class='alert alert-warning'>
					<a href='#'' class='close' data-dismiss='alert' aria-label='close'>
						<span aria-hidden='true'>
							<i class='material-icons'>clear</i>
						</span>
					</a>
					<div class='alert-icon'>
					    <i class='material-icons'>warning</i>
					</div>
					<b>Gagal:</b> Admin tidak bisa dinonaktifkan
				</div>";
			$this->session->set_userdata('session_msg',$msg);
			redirect(base_url('admin/user'));	
		}
		else{
			$data = array(
			'aktif'=>'0'
			);
			$this->model_data->update_data2('user',$data,$patokan);		
			$msg="<div class='alert alert-success'>
						<a href='#'' class='close' data-dismiss='alert' aria-label='close'>
							<span aria-hidden='true'>
								<i class='material-icons'>clear</i>
							</span>
						</a>
						<div class='alert-icon'>
						    <i class='material-icons'>clear</i>
						</div>
						<b>Sukses:</b> User telah di nonaktifkan
					</div>";
				$this->session->set_userdata('session_msg',$msg);
			redirect(base_url('admin/user'));	
		}		
	}

	public function aktifkan_user(){
		$this->inisiasi();		
		$patokan=base64_decode($this->input->get('id'));
		//mendapatkan data user
		$data = array(
			'aktif'=>'1'
		);
		$this->model_data->update_data2('user',$data,$patokan);		
		$msg="<div class='alert alert-success'>
					<a href='#'' class='close' data-dismiss='alert' aria-label='close'>
						<span aria-hidden='true'>
							<i class='material-icons'>clear</i>
						</span>
					</a>
					<div class='alert-icon'>
					    <i class='material-icons'>clear</i>
					</div>
					<b>Sukses:</b> User telah aktifkan
				</div>";
			$this->session->set_userdata('session_msg',$msg);
		redirect(base_url('admin/user'));	
	}

	function update_profil(){
		$this->inisiasi();	
		$patokan=$this->input->post('patokan');
		//form validator		
		$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'trim|required|max_length[40]');
		$this->form_validation->set_rules('kelas', 'Kelas', 'trim|required');
		$this->form_validation->set_rules('level', 'Posisi', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('sekolah', 'Sekolah', 'trim|required|max_length[40]');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'trim|required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
		$this->form_validation->set_rules('no_hp', 'No Hp', 'trim|required|min_length[10]|max_length[15]');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required|max_length[300]');
		$this->form_validation->set_rules('status', 'Status', 'trim|required|max_length[300]');
		//jika fv salah
		if ($this->form_validation->run()==FALSE) {
			$msg="<div class='alert alert-warning'>
					<a href='#'' class='close' data-dismiss='alert' aria-label='close'>
						<span aria-hidden='true'>
							<i class='material-icons'>clear</i>
						</span>
					</a>
					<div class='alert-icon'>
					    <i class='material-icons'>warning</i>
					</div>
					<b>Perhatian:</b> Perhatikan isi
				</div>";
			$this->session->set_userdata('session_msg',$msg);
			//mendapatkan data user
			$user=$this->model_data->get_user($patokan);
			$data = array(
				'id_user'=>$user{0}->id_user,
				'username'=>$user{0}->username,
				'kelas'=>$user{0}->kelas,
				'sekolah'=>$user{0}->sekolah,
				'nama_lengkap'=>$user{0}->nama_lengkap,
				'jenis_kelamin'=>$user{0}->jenis_kelamin,
				'tgl_lahir'=>$user{0}->tgl_lahir,
				'no_hp'=>$user{0}->no_hp,
				'alamat'=>$user{0}->alamat,
				'status'=>$user{0}->status,
				'level'=>$user{0}->level,
				'email'=>$user{0}->email
			);
			$data['msg']=$this->session->userdata('session_msg');
			$teks['title']="Edit User";
			$data['sidebar']=2;
			$this->load->view("layout/load_admin_css", $teks); 
			$this->load->view("admin/edit_user_vw",$data);
			$this->load->view("layout/load_admin_js");
			$this->session->unset_userdata('session_msg');
			//redirect(base_url('admin/edit_user?id='.base64_encode($patokan)));
		}
		//jika benar
		else{
			$username=$this->input->post('username');			//dari session
			$nama_lengkap=$this->input->post('nama_lengkap');		//dari post	
			$kelas=$this->input->post('kelas');	
			$sekolah=$this->input->post('sekolah');
			$jenis_kelamin=$this->input->post('jenis_kelamin');		
			$tgl_lahir=$this->input->post('tgl_lahir');
			$no_hp=$this->input->post('no_hp');
			$alamat=$this->input->post('alamat');
			$status=$this->input->post('status');			
			$level=$this->input->post('level');						
			$email=$this->input->post('email');	
			$data=array(
				'username'=>$username,
				'nama_lengkap'=>$nama_lengkap,
				'kelas'=>$kelas,
				'sekolah'=>$sekolah,
				'jenis_kelamin'=>$jenis_kelamin,
				'tgl_lahir'=>$tgl_lahir,
				'no_hp'=>$no_hp,
				'alamat'=>$alamat,
				'status'=>$status,
			);
			$data2=array(
				'username'=>$username,
				'email'=>$email,
				'level'=>$level
			);
			//update user
			$this->model_data->update_data2('user_detail',$data,$patokan);
			$this->model_data->update_data2('user',$data2,$patokan);
			$msg="<div class='alert alert-success'>
					<a href='#'' class='close' data-dismiss='alert' aria-label='close'>
						<span aria-hidden='true'>
							<i class='material-icons'>clear</i>
						</span>
					</a>
					<div class='alert-icon'>
					    <i class='material-icons'>check</i>
					</div>
					<b>Berhasil:</b> Update data diri selesai.
				</div>";
			$this->session->set_userdata('session_msg',$msg);
			redirect(base_url('admin/user'));
		}
	}

	public function dashboard(){
		$this->inisiasi();
		$data=array(
			'user'=>$this->model_data->total_data('user'),
			'materi'=>$this->model_data->total_data('materi'),
			'komentar'=>$this->model_data->total_data('komentar'),
			'berita'=>$this->model_data->total_data('berita'),
			'feedback'=>$this->model_data->total_data('feedback'),
			'lihat_materi'=>$this->model_data->total_data('lihat_materi'),
			'jumlah_download'=>$this->model_data->total_data('jumlah_download')
		);
		$data['sidebar']=1;
		$data['msg']=$this->session->userdata('session_msg');
		$teks['title']="Dashboard";
		$this->load->view("layout/load_admin_css", $teks);	
	    //return the data in view  
		$this->load->view("admin/dashboard_vw", $data);
		$this->load->view("layout/load_admin_js");
		//unset session
		$this->session->unset_userdata('session_msg');
	} 

	public function user(){
		$this->inisiasi();
		//load lib pagination
		$this->load->helper(array('html'));
		$this->load->library('pagination');
		//mendapatkan id user
        $id_user=$this->session->userdata('id_user');
		$config['total_rows'] = $this->model_data->total_all_user();
        $config['per_page'] =6;
        $config['uri_segment'] = 3; 
        //mengatur tag
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_link'] = '&#x25B6;';
        $config['prev_link'] = '&#x25C0;';
        //url setiap link
        $config['base_url'] = base_url().'admin/user/';
        $this->pagination->initialize($config);
		//menentukan offset record dari uri segment
        $start=$this->uri->segment(3, 0);
		//ubah data menjadi tampilan per limit
		$user=$this->model_data->get_all_user('id_user',$config['per_page'],$start); 
        $data=array(
            'user' => $user,
            'pagination' =>  $this->pagination->create_links(),
            'start' => $start
        );        
		$data['sidebar']=2;
		$data['msg']=$this->session->userdata('session_msg');
		$teks['title']="user";
		$this->load->view("layout/load_admin_css", $teks);	
	    //return the data in view  
	    if ($user) {
			$this->load->view("admin/user_vw", $data);
		}
		else{			
			$this->load->view("admin/kosong_vw", $data);
		}
		$this->load->view("layout/load_admin_js");
		//unset session
		$this->session->unset_userdata('session_msg');
	}

	public function materi(){
		$this->inisiasi();
		//load lib pagination
		$this->load->helper(array('html'));
		$this->load->library('pagination');
		//mendapatkan id user
        $id_user=$this->session->userdata('id_user');
		$config['total_rows'] = $this->model_data->total_data_admin('materi');
        $config['per_page'] =6;
        $config['uri_segment'] = 3; 
        //mengatur tag
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_link'] = '&#x25B6;';
        $config['prev_link'] = '&#x25C0;';
        //url setiap link
        $config['base_url'] = base_url().'admin/materi/';
        $this->pagination->initialize($config);
		//menentukan offset record dari uri segment
        $start=$this->uri->segment(3, 0);
		//ubah data menjadi tampilan per limit
		$materi=$this->model_data->get_data_admin('materi','id_materi',$config['per_page'],$start)->result(); 
        $data=array(
            'materi' => $materi,
            'pagination' =>  $this->pagination->create_links(),
            'start' => $start
        );        
		$data['sidebar']=3;
		$data['msg']=$this->session->userdata('session_msg');
		$teks['title']="Materi";
		$this->load->view("layout/load_admin_css", $teks);	
	    //return the data in view  
	    if ($materi) {
			$this->load->view("admin/materi_vw", $data);
		}
		else{			
			$this->load->view("admin/kosong_vw", $data);
		}
		$this->load->view("layout/load_admin_js");
		//unset session
		$this->session->unset_userdata('session_msg');
	}

	public function komentar(){
		$this->inisiasi();
		//load lib pagination
		$this->load->helper(array('html'));
		$this->load->library('pagination');
		//mendapatkan id user
        $id_user=$this->session->userdata('id_user');
		$config['total_rows'] = $this->model_data->total_data_admin('komentar');
        $config['per_page'] =6;
        $config['uri_segment'] = 3; 
        //mengatur tag
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_link'] = '&#x25B6;';
        $config['prev_link'] = '&#x25C0;';
        //url setiap link
        $config['base_url'] = base_url().'admin/komentar/';
        $this->pagination->initialize($config);
		//menentukan offset record dari uri segment
        $start=$this->uri->segment(3, 0);
		//ubah data menjadi tampilan per limit
		$komentar=$this->model_data->get_data_admin('komentar','id_komentar',$config['per_page'],$start)->result(); 
        $data=array(
            'komentar' => $komentar,
            'pagination' =>  $this->pagination->create_links(),
            'start' => $start
        );        
		$data['sidebar']=4;
		$data['msg']=$this->session->userdata('session_msg');
		$teks['title']="Komentar";
		$this->load->view("layout/load_admin_css", $teks);	
	    //return the data in view  
	    if ($komentar) {
			$this->load->view("admin/komentar_vw", $data);
		}
		else{			
			$this->load->view("admin/kosong_vw", $data);
		}
		$this->load->view("layout/load_admin_js");
		//unset session
		$this->session->unset_userdata('session_msg');
	}

	public function konfirmasi_guru(){
		$this->inisiasi();
		//$data['konfirmasi_guru']=$this->model_data->get_user_konfirmasi();
		$data['validasi_guru']=$this->model_data->get_user_konfirmasi();

		$data['sidebar']=6;
		$data['msg']=$this->session->userdata('session_msg');
		$teks['title']="Konfirmasi Guru";
		$this->load->view("layout/load_admin_css", $teks);	
	    //return the data in view  
	    if ($data['validasi_guru']) {
			$this->load->view("admin/konfirmasi_guru_vw", $data);
		}
		else{			
			$this->load->view("admin/kosong_vw", $data);
		}
		$this->load->view("layout/load_admin_js");
		//unset session
		$this->session->unset_userdata('session_msg');
	}

	public function validasi_guru(){
		$patokan=base64_decode($this->input->get('id'));
		$this->inisiasi();
		$data = array(
        	'validasi_guru'=>'1'
		);
		$this->model_data->validation_guru($patokan,$data);
		$msg="<div class='alert alert-success'>
							<a href='#'' class='close' data-dismiss='alert' aria-label='close'>
								<span aria-hidden='true'>
									<i class='material-icons'>clear</i>
								</span>
							</a>
							<div class='alert-icon'>
							    <i class='material-icons'>check</i>
							</div>
							<b>Berhasil:</b> ".$patokan." telah valid sebagai guru
						</div>";
		$this->session->set_userdata('session_msg',$msg);
		redirect(base_url('admin/konfirmasi_guru'));
	}

	public function hapus_komentar(){		
		$id_komentar=$this->input->post('id_komentar');
		$this->model_data->delete_data('id_komentar',$id_komentar,'komentar');
		$msg="<div class='alert alert-success'>
							<a href='#'' class='close' data-dismiss='alert' aria-label='close'>
								<span aria-hidden='true'>
									<i class='material-icons'>clear</i>
								</span>
							</a>
							<div class='alert-icon'>
							    <i class='material-icons'>check</i>
							</div>
							<b>Berhasil:</b> komentar telah dihapus
						</div>";
		$this->session->set_userdata('session_msg',$msg);
		redirect(base_url('admin/komentar'));
	}

/*TABLE*/

}