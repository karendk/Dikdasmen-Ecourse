<?php
defined('BASEPATH') OR exit('No direct script acces allowed');
class Berita extends CI_Controller{
	public function __construct(){
		parent::__construct();
		//load the model
		$this->load->model('model_data');		
	}

	public function index(){
		$this->berita();
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

	public function berita($start=0){
		//load lib pagination
		$this->load->helper(array('html'));
		$this->load->library('pagination');
		//mendapatkan kelas dari user
        $kelas=$this->session->userdata('kelas');        
		$config['total_rows']=$this->model_data->total_berita(); 
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
        $config['base_url'] = base_url().'berita/halaman/';
        $this->pagination->initialize($config);
		//menentukan offset record dari uri segment
        $start=$this->uri->segment(3, 0);
		//ubah data menjadi tampilan per limit
        $berita=$this->model_data->get_berita('berita','id_berita',$config['per_page'],$start)->result();        
        $data=array(
            'berita' => $berita,
            'pagination' =>  $this->pagination->create_links(),
            'start' => $start
        );
		$teks['title']="Berita";
		$this->load->view("layout/load_css", $teks);		
		$this->navbar();
		$data['materi_populer']=$this->model_data->top_materi();
		$data['buku_populer']=$this->model_data->top_download();
		$data['komentar_terbaru']=$this->model_data->recent_komentar();
	    //return the data in view  
		$this->load->view("berita_vw", $data);
		$this->load->view("layout/footer");
		$this->load->view("layout/load_js");
	} 
	public function tabel_berita(){
		$data['berita']=$this->model_data->tampil_data()->result();
		$this->load->view('v_tmpil', $data);
	}



}