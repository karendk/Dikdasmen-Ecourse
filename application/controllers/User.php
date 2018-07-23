<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller{	
	public function __construct(){
		parent::__construct();       	
	    //load the model 
		$this->load->model('model_data');
	}
	public function index(){
		$this->profil();
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
			}	
			else if ($this->session->userdata('level')==2 && $this->session->userdata('aktif')==1) {
			}	
			else{
				redirect(base_url());				
			}
		}
		else{
			redirect(base_url());
		}
	}
	public function profil(){
		if ($this->session->has_userdata('username')) {
			$data=array(
				'login'=>$this->session->userdata('login'),
				'id_user'=>$this->session->userdata('id_user'),
				'username'=>$this->session->userdata('username'),
				'level'=>$this->session->userdata('level'),
			);

			//mendapatkan data user
			$user=$this->model_data->get_user($data['username']);
			$data = array(
				'id_user'=>$user{0}->id_user,
				'username'=>$user{0}->username,
				'kelas'=>$user{0}->kelas,
				'sekolah'=>$user{0}->sekolah,
				'email'=>$user{0}->email,
				'level'=>$user{0}->level,
				'nama_lengkap'=>$user{0}->nama_lengkap,
				'jenis_kelamin'=>$user{0}->jenis_kelamin,
				'tgl_lahir'=>$user{0}->tgl_lahir,
				'no_hp'=>$user{0}->no_hp,
				'alamat'=>$user{0}->alamat,
				'status'=>$user{0}->status
			);

			//untuk menampilkan foto profil
			if($data['jenis_kelamin']=='L'){
				$data['foto']='avatar laki.png';
			}
			else if($data['jenis_kelamin']=='P'){
				$data['foto']='avatar perempuan.png';
			}
			else{
				$data['foto']='avatar.png';
			}

			$data['msg']=$this->session->userdata('session_msg');
			$teks['title']="Profil";
			$this->load->view("layout/load_css_profil", $teks);	

			$this->navbar(); //navbar

			//return the data in view  
			$this->load->view("user/profil_vw",$data);
			$this->load->view("layout/footer");
			$this->load->view("layout/load_js");

			$this->session->unset_userdata('session_msg');
		}
		else{
			header("Location:".base_url('login'));
		}		
	} 

	function update_profil(){
		if ($this->session->has_userdata('username')) {
			$this->load->library('form_validation');
			//form validator		
			$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'trim|required|max_length[40]');
			$this->form_validation->set_rules('kelas', 'Kelas', 'trim|required');
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
				$this->profil();
				//header("Location:".base_url('user'));
			}
			//jika benar
			else{
				$username=$this->session->userdata('username');			//dari session
				$validasi_guru=$this->session->userdata('validasi_guru');	
				$nama_lengkap=$this->input->post('nama_lengkap');		//dari post	
				$kelas=$this->input->post('kelas');	
				$sekolah=$this->input->post('sekolah');
				$jenis_kelamin=$this->input->post('jenis_kelamin');		
				$tgl_lahir=$this->input->post('tgl_lahir');
				$no_hp=$this->input->post('no_hp');
				$alamat=$this->input->post('alamat');
				$status=$this->input->post('status');

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
					'validasi_guru'=>$validasi_guru
				);

				//update user
				$user=$this->model_data->update_data('user_detail',$data);

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
				$this->session->set_userdata('kelas',$kelas);

				redirect(base_url('user#update'));
			}
		}
		else{
			header("Location:".base_url('login'));
		}
	}

	public function tambah_komentar($id_materi){
		//ambil nilai dari form
		$komentar=$this->input->post('komentar');
		$id_user=$this->session->userdata('id_user');
		//memasukan ke array
		$data= array(
			'komentar'=>$komentar,
			'id_materi'=>$id_materi,
			'id_user'=>$id_user
		);
		//menambah ke database
		$this->model_data->add_data('komentar',$data);			//database user
		redirect(base_url('materi/detail/'.$id_materi.'#komentar'));
	}

	public function profil_publik($username){

			//mendapatkan data user
			$user=$this->model_data->get_user_publik($username);
			$data = array(
				'username'=>$user{0}->username,
				'kelas'=>$user{0}->kelas,
				'sekolah'=>$user{0}->sekolah,
				'email'=>$user{0}->email,
				'level'=>$user{0}->level,
				'nama_lengkap'=>$user{0}->nama_lengkap,
				'jenis_kelamin'=>$user{0}->jenis_kelamin,
				'tgl_lahir'=>$user{0}->tgl_lahir,
				'no_hp'=>$user{0}->no_hp,
				'alamat'=>$user{0}->alamat,
				'status'=>$user{0}->status
			);
			//untuk menampilkan foto profil
			if($data['jenis_kelamin']=='L'){
				$data['foto']='avatar laki.png';
			}
			else if($data['jenis_kelamin']=='P'){
				$data['foto']='avatar perempuan.png';
			}
			else{
				$data['foto']='avatar.png';
			}
		$teks['title']="Profil";
		$this->load->view("layout/load_css_profil", $teks);		
		$this->navbar();
		//return the data in view  
		$this->load->view("user/profil_publik_vw",$data);
		$this->load->view("layout/footer");
		$this->load->view("layout/load_js");
	}
}
