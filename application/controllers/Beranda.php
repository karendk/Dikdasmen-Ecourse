<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Beranda extends CI_Controller{	
	public function __construct(){
		parent::__construct();	
	    //load the model      	    
		$this->load->model('model_data');
	}
	public function index(){
		$this->home();
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

	public function home(){
		$teks['title']="Dikdasmen - E-Course";
		$this->load->view("layout/load_css", $teks);
		$this->navbar();
	    //return the data in view  
		$this->load->view("beranda_vw");
		$this->load->view("layout/footer");
		$this->load->view("layout/load_js");
	} 
}
