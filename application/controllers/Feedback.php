<?php
defined('BASEPATH') OR exit('No direct script acces allowed');
class Feedback extends CI_Controller{
	public function __construct(){
	parent::__construct();
	//load model data
	$this->load->model('model_data');
	$this->load->library('form_validation');
	}

	public function index(){
		$this->feedback();
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

	public function feedback(){
		$data['msg']=$this->session->userdata('session_msg');
		$teks['title']="Feedback";
		$this->load->view("layout/load_css", $teks);
		$this->navbar();
		//return the data in view  
		$this->load->view("feedback_vw",$data);
		$this->load->view("layout/footer");
		$this->load->view("layout/load_js");
		//unset session
		$this->session->unset_userdata('session_msg');	
	} 	
	public function kirim_feedback(){
		$this->form_validation->set_rules('f_nama', 'Nama Awal', 'required|max_length[40]');
		$this->form_validation->set_rules('l_nama', 'Nama Akhir', 'required|max_length[40]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|max_length[40]');
		$this->form_validation->set_rules('message', 'Isi Feedback', 'trim|required|max_length[300]');
		//jika fv salah
		if ($this->form_validation->run()==FALSE) {
			$this->feedback();
		}
		//jika benar
		else{
			$f_nama=$this->input->post('f_nama');
			$l_nama=$this->input->post('l_nama');
			$email=$this->input->post('email');
			$message=$this->input->post('message');
			//memasukkan ke array
			$data=array(
				'f_nama'=>$f_nama,
				'l_nama'=>$l_nama,
				'email'=>$email,
				'no_hp'=>$no_hp,
				'message'=>$message
				);
			//menambahkan ke database
			$this->model_data->add_data('feedback', $data);
			$msg="<div class='alert alert-success'>
					<a href='#'' class='close' data-dismiss='alert' aria-label='close'>
						<span aria-hidden='true'>
							<i class='material-icons'>clear</i>
						</span>
						</a>
					<div class='alert-icon'>
					    <i class='material-icons'>check</i>
					</div>
					<b>Berhasil:</b> feedback telah ditambahkan
				</div>";
			$this->session->set_userdata('session_msg',$msg);
			redirect(base_url('feedback'));
		}
	}
}
	