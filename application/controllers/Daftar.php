<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Daftar extends CI_Controller{	
	public function __construct(){
		parent::__construct();	
	    //load the model      	    
		$this->load->model('model_data');		
		$this->load->library('form_validation');
	}
	public function index(){
		$this->daftar();
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

	public function daftar(){
		if ($this->session->has_userdata('login')) {
			header("Location:".base_url('user'));
		}
		else{
			//mendapatkan teks session			
			$data['msg']=$this->session->userdata('session_msg');
			$teks['title']="Pendaftaran";
			$this->load->view("layout/load_css", $teks);		
			$this->navbar();
			//return the data in view  
			$this->load->view("daftar_vw",$data);
			$this->load->view("layout/footer");
			//$this->load->view("layout/footer_fixed");
			$this->load->view("layout/load_js");
			//unset session
			$this->session->unset_userdata('session_msg');
		}		
	} 

	public function proses_daftar(){
		if ($this->session->has_userdata('login')) {
			header("Location:".base_url('user'));
		}
		else{
			//form validator		
			$this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[user.username]');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|max_length[16]');
			$this->form_validation->set_rules('repassword', 'Repassword', 'required|matches[password]');
			$this->form_validation->set_rules('kelas', 'Kelas', 'trim|required|max_length[2]');
			$this->form_validation->set_rules('level', 'Sebagai', 'trim|required|max_length[2]');

			//jika fv salah
			if ($this->form_validation->run()==FALSE) {
				$this->daftar();
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
				if ($level==1) {
					$msg="<div class='alert alert-success'>
							<a href='#'' class='close' data-dismiss='alert' aria-label='close'>
								<span aria-hidden='true'>
									<i class='material-icons'>clear</i>
								</span>
							</a>
							<div class='alert-icon'>
							    <i class='material-icons'>check</i>
							</div>
							<b>Berhasil:</b> Silahkan konfirmasi ke <a>ADMIN</a> untuk login sebagai guru
						</div>";
				}
				else{					
					$msg="<div class='alert alert-success'>
							<a href='#'' class='close' data-dismiss='alert' aria-label='close'>
								<span aria-hidden='true'>
									<i class='material-icons'>clear</i>
								</span>
							</a>
							<div class='alert-icon'>
							    <i class='material-icons'>check</i>
							</div>
							<b>Berhasil:</b> Silahkan login dengan username dan password tadi..
						</div>";
				}
				$this->session->set_userdata('session_msg',$msg);
				redirect(base_url('login'));
			}
		}		
	}
}
