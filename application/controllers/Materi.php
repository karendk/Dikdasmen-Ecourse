<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Materi extends CI_Controller{	
	public function __construct(){
		parent::__construct();	
	    //load the model      	    
		$this->load->model('model_data');
	}
	public function index(){
		$this->halaman();
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

	public function halaman($start=0){
		//load lib pagination
		$this->load->helper(array('html'));
		$this->load->library('pagination');
		//mendapatkan kelas dari user
        $kelas=$this->session->userdata('kelas');
        if ($this->session->userdata('level')==1) {
        	$config['total_rows'] = $this->model_data->total_data('materi');
		}
		else if ($this->session->userdata('level')==2) {
			$config['total_rows'] = $this->model_data->total_materi_per_kelas('materi',$kelas);
		}
        else{
        	$config['total_rows'] = $this->model_data->total_data('materi');
        }
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
        $config['base_url'] = base_url().'materi/halaman/';
        $this->pagination->initialize($config);

		//menentukan offset record dari uri segment
        $start=$this->uri->segment(3, 0);
		//ubah data menjadi tampilan per limit
        if ($this->session->userdata('level')==1) {
        	$materi=$this->model_data->get_data_limit('materi','id_materi',$config['per_page'],$start)->result();  
        }
        else if ($this->session->userdata('level')==2) {
        	$materi=$this->model_data->get_materi_per_kelas('materi','id_materi',$kelas,$config['per_page'],$start)->result(); 
        }
        else{
        	$materi=$this->model_data->get_data_limit('materi','id_materi',$config['per_page'],$start)->result(); 
        }
        
        $data=array(
            'materi' => $materi,
            'pagination' =>  $this->pagination->create_links(),
            'start' => $start
        );

		$data['materi_populer']=$this->model_data->top_materi();
		$data['buku_populer']=$this->model_data->top_download();
		$data['komentar_terbaru']=$this->model_data->recent_komentar();
		$teks['title']="Daftar Materi";
		$this->load->view("layout/load_css", $teks);		
		$this->navbar();
	    //return the data in view  
		$this->load->view("materi_vw", $data);			
		$this->load->view("layout/footer");
		$this->load->view("layout/load_js");
	} 

	public function detail($id=1){
		//tambah jumlah yang melihat materi
		$data=array(
			'id_materi'=>$id
		);
		$this->model_data->add_data('lihat_materi',$data);
		//ambil data detail materi
		$data['detail_materi']=$this->model_data->get_detail_materi($id);
		$data['detail_komentar']=$this->model_data->get_detail_komentar($id);
		//menambah jumlah user yg meihat materi
		$teks['title']="Materi";
		$this->load->view("layout/load_css", $teks);
		$this->navbar();	
		$data['materi_populer']=$this->model_data->top_materi();
		$data['buku_populer']=$this->model_data->top_download();
		$data['komentar_terbaru']=$this->model_data->recent_komentar();	
		$this->load->view("materi_detail_vw", $data);
		//menampilkan tambah komentar
		if ($this->session->has_userdata('login')) {
			$this->load->view("user/komentar_vw",$data);
		}
		else{			
			$this->load->view("syarat_komentar_vw",$data);
		}
		//menampilkaan komentar kosong  
		if ($data['detail_komentar']>0) {
			$this->load->view("user/daftar_komentar_vw", $data);
		}
		else{			
			$this->load->view("user/daftar_komentar_kosong_vw", $data);
		}
		$this->load->view("layout/footer");
		$this->load->view("layout/load_js");			
	}

	public function cari(){
		$kata=$this->input->post('cari');

		$cari=$data['materi'] = $this->model_data->search_materi('materi',$kata);
		if($cari==NULL){
			redirect(base_url('materi/kosong'));
		}
		else{
			$teks['title']="Cari Materi";
			$this->load->view("layout/load_css", $teks);		
			
			$this->navbar();
		    //return the data in view  
			$this->load->view("pencarian_vw", $data);
			$this->load->view("layout/footer");
			$this->load->view("layout/load_js");
		}
	}
	public function kosong(){
		$teks['title']="Tidak Ditemukan";
		$this->load->view("layout/load_css", $teks);
		$this->navbar();
	    //return the data in view  
		$this->load->view("kosong_vw");
		$this->load->view("layout/footer");
		$this->load->view("layout/load_js");
	}

	public function download($namafile,$id){		
		$this->load->helper('download');		
		$data1=array('id_materi'=>$id);
		$this->model_data->add_data('jumlah_download',$data1);
		$data = file_get_contents(base_url('asset/materi/file/'.$namafile));
		force_download($namafile,$data);
	}
}
