<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller{	
	public function __construct(){
		parent::__construct();	
	    //load the model      	    
		$this->load->model('model_data');		
		$this->load->library('form_validation');
	}
	public function index(){
		$this->login();
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

	public function login(){
		if ($this->session->has_userdata('login')) {
			header("Location:".base_url('user'));
		}
		else{
			//mendapatkan teks session			
			$data['msg']=$this->session->userdata('session_msg');
			$teks['title']="Login";
			$this->load->view("layout/load_css", $teks);		
			//$this->navbar();
			//return the data in view  
			$this->load->view("login_vw",$data);
			$this->load->view("layout/footer_fixed");
			$this->load->view("layout/load_js");
			//unset session
			$this->session->unset_userdata('session_msg');
		}		
	} 

	public function auth(){
		if ($this->session->has_userdata('login')) {
			header("Location:".base_url('user'));
		}
		else{
			//form validator		
			$this->form_validation->set_rules('username', 'username', 'trim|required');
			$this->form_validation->set_rules('password', 'password', 'trim|required');

			//jika fv salah
			if ($this->form_validation->run()==FALSE) {
				$this->login();
				//header("Location:".base_url('login'));
			}
			//jika benar
			else{
				//ambil nilai dari form
				$username=$this->input->post('username');
				$password=$this->input->post('password');
				//mencocokan ke database
				$user=$this->model_data->get_user_login($username,$password);

				if ($user==NULL) {
					$msg="<div class='alert alert-danger'>
						<a href='#'' class='close' data-dismiss='alert' aria-label='close'>
							<span aria-hidden='true'>
								<i class='material-icons'>clear</i>
							</span>
						</a>
						<div class='alert-icon'>
						    <i class='material-icons'>error_outline</i>
						</div>
					      <b>Error:</b> Username atau Password salah!
					</div>";
					$this->session->set_userdata('session_msg',$msg);
					header("Location:".base_url('login'));
				}
				else{
					$session_user = array(
						'login'=>TRUE,
						'id_user'=>$user{0}->id_user,
						'username'=>$user{0}->username,						
						'kelas'=>$user{0}->kelas,
						'level'=>$user{0}->level,						
						'validasi_guru'=>$user{0}->validasi_guru,		
						'aktif'=>$user{0}->aktif
					);
					if ($session_user['aktif']==1) {						
						//memasukan array user ke session
						$this->session->set_userdata($session_user);
						//$this->login();
						//header("Location:".base_url('user'));
						redirect(base_url('user'));
					}
					else{
						redirect(base_url('login/user_tidak_aktif'));
					}
				}		
			}
		}		
	}

	public function user_tidak_aktif(){
		$teks['title']="User Tidak Aktif";
		$this->load->view("layout/load_css", $teks);
		$this->navbar();
	    //return the data in view  
		$this->load->view("user_tidak_aktif_vw");
		$this->load->view("layout/footer");
		$this->load->view("layout/load_js");
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
		//header("Location:".base_url('login'));
	}
}
