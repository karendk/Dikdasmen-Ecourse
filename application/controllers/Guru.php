<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Guru extends CI_Controller{	
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

	public function inisiasi(){
		if ($this->session->has_userdata('level')) {
			if ($this->session->userdata('level')==0 && $this->session->userdata('aktif')==1) {
			}
			else if ($this->session->userdata('level')==1  && $this->session->userdata('validasi_guru')==1 && $this->session->userdata('aktif')==1) {
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

	public function halaman($start=0){
		$this->inisiasi();
		//load lib pagination
		$this->load->helper(array('html'));
		$this->load->library('pagination');
		//mendapatkan id user
        $id_user=$this->session->userdata('id_user');
		$config['total_rows'] = $this->model_data->total_materi_guru('materi',$id_user);
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
        $config['base_url'] = base_url().'guru/halaman/';
        $this->pagination->initialize($config);
		//menentukan offset record dari uri segment
        $start=$this->uri->segment(3, 0);
		//ubah data menjadi tampilan per limit
		$materi=$this->model_data->get_materi_guru('materi','id_materi',$id_user,$config['per_page'],$start)->result(); 
        $data=array(
            'materi' => $materi,
            'pagination' =>  $this->pagination->create_links(),
            'start' => $start
        );        
		$data['msg']=$this->session->userdata('session_msg');
		$teks['title']="Daftar Materi";
		$this->load->view("layout/load_css", $teks);		
		$this->navbar();
	    //return the data in view  
		$this->load->view("guru/mengajar_vw", $data);
		$this->load->view("layout/footer");
		$this->load->view("layout/load_js");
		//unset session
		$this->session->unset_userdata('session_msg');
	} 

/*ADD*/
	public function buat_materi(){		
		$id_materi=$this->input->post('id_materi');
		$data['detail_materi']=$this->model_data->get_detail_materi($id_materi);
		//mendapatkan teks session			
		$data['msg']=$this->session->userdata('session_msg');
		$data['kelas']=$this->session->userdata('kelas');
		$teks['title']="Materi Baru";
		$this->load->view("layout/load_css", $teks);		
		$this->navbar();
	    //return the data in view  
	    $this->load->view("layout/tinymci");
		$this->load->view("guru/buat_materi_vw", $data);
		$this->load->view("layout/footer");
		$this->load->view("layout/load_js");
		//unset session
		$this->session->unset_userdata('session_msg');
	}

	public function tambah_materi(){		
		$this->load->library('form_validation');
		$this->inisiasi();		
		//form validator		
		$this->form_validation->set_rules('judul_materi', 'Judul Materi', 'required');
		$this->form_validation->set_rules('materi', 'Materi', 'required');
		$this->form_validation->set_rules('kelas', 'Kelas', 'trim|required|max_length[2]');
		//jika fv salah
		if ($this->form_validation->run()==FALSE) {
			$this->buat_materi();
			//redirect(base_url('guru/buat_materi'));
		}
		//jika benar
		else{		
			$gambar=$this->upload_gambar();		//upload gambar
			if ($gambar==NULL) {
			redirect(base_url('guru/buat_materi'));
			}
			else{
				$file=$this->upload_file();		//upload file
				if ($file==NULL) {
				redirect(base_url('guru/buat_materi'));
				}
				else{
					//ambil nilai dari form
					$judul_materi=$this->input->post('judul_materi');
					$materi=$this->input->post('materi');
					$kelas=$this->input->post('kelas');
					//memasukan ke array
					$data= array(
					'judul_materi'=>$judul_materi,
					'materi'=>$materi,
					'gambar'=>$gambar,
					'file'=>$file,
					'kelas'=>$kelas,
					'id_user'=>$this->session->userdata('id_user')
					);
					//menambah ke database
					$this->model_data->add_materi('materi',$data);			//database materi			
					$msg="<div class='alert alert-success'>
							<a href='#'' class='close' data-dismiss='alert' aria-label='close'>
								<span aria-hidden='true'>
									<i class='material-icons'>clear</i>
								</span>
							</a>
							<div class='alert-icon'>
							    <i class='material-icons'>check</i>
							</div>
							<b>Berhasil:</b> Materi baru ditambahkan
						</div>";
					$this->session->set_userdata('session_msg',$msg);
					redirect(base_url('guru/halaman'));
				}
			}			
		}		
	}

/*UPDATE*/
	public function edit_materi(){
 		$id_materi=base64_decode($this->input->get('id'));
		$data['detail_materi']=$this->model_data->get_detail_materi_guru($id_materi);
		$data['detail_komentar']=$this->model_data->get_detail_komentar($id_materi);
		//mendapatkan teks session			
		if ($data['detail_materi']){
			$data['msg']=$this->session->userdata('session_msg');
			$teks['title']="Edit Materi";
			$this->load->view("layout/load_css", $teks);		
			$this->navbar();
		    $this->load->view("layout/tinymci");
			$this->load->view("guru/edit_materi_vw", $data);
			//menampilkaan komentar kosong  
			if ($data['detail_komentar']>0) {
				$this->load->view("guru/daftar_komentar_vw", $data);
			}
			else{			
				$this->load->view("guru/daftar_komentar_kosong_vw", $data);
			}
			$this->load->view("layout/footer");
			$this->load->view("layout/load_js");
			//unset session
			$this->session->unset_userdata('session_msg');
		}
		else{
			echo "nggak ada";
		}
	}

	function update_materi(){
		$this->load->library('form_validation');
		$this->inisiasi();				
 		$id_materi=$this->input->post('id_materi');
		//form validator		
		$this->form_validation->set_rules('judul_materi', 'Judul Materi', 'required');
		$this->form_validation->set_rules('materi', 'Materi', 'required');
		$this->form_validation->set_rules('kelas', 'Kelas', 'trim|required|max_length[2]');
		//jika fv salah
		if ($this->form_validation->run()==FALSE){
			redirect(base_url('guru/edit_materi?id='.base64_encode($id_materi)));
		}
		//jika benar
		else{		
			$gambar=$this->upload_gambar();		//upload gambar
			if ($gambar==NULL) {
			//ambil nilai dari form
					$judul_materi=$this->input->post('judul_materi');
					$materi=$this->input->post('materi');
					$kelas=$this->input->post('kelas');
					//memasukan ke array
					$data= array(
						'judul_materi'=>$judul_materi,
						'materi'=>$materi,
						'kelas'=>$kelas,
					);
					//menambah ke database
					$this->model_data->update_materi('materi',$data, $id_materi);			//database materi
					$msg="<div class='alert alert-success'>
							<a href='#'' class='close' data-dismiss='alert' aria-label='close'>
								<span aria-hidden='true'>
									<i class='material-icons'>clear</i>
								</span>
							</a>
							<div class='alert-icon'>
							    <i class='material-icons'>check</i>
							</div>
							<b>Berhasil:</b> Materi telah di update
						</div>";
					$this->session->set_userdata('session_msg',$msg);
					redirect(base_url('guru/halaman'));
			//redirect(base_url('guru/edit_materi?id='.base64_encode($id_materi)));
			}
			else{
				$file=$this->upload_file();		//upload file
				if ($file==NULL) {
				//ambil nilai dari form
					$judul_materi=$this->input->post('judul_materi');
					$materi=$this->input->post('materi');
					$kelas=$this->input->post('kelas');
					//memasukan ke array
					$data= array(
						'judul_materi'=>$judul_materi,
						'materi'=>$materi,
						'gambar'=>$gambar,
						'kelas'=>$kelas,
					);
					//menghapus file
					$nama_file=$this->model_data->get_file($id_materi);
					$gambar_old=$nama_file{0}->gambar;
					$this->h_gambar($gambar_old);
					//menambah ke database
					$this->model_data->update_materi('materi',$data, $id_materi);			//database materi
					$msg="<div class='alert alert-success'>
							<a href='#'' class='close' data-dismiss='alert' aria-label='close'>
								<span aria-hidden='true'>
									<i class='material-icons'>clear</i>
								</span>
							</a>
							<div class='alert-icon'>
							    <i class='material-icons'>check</i>
							</div>
							<b>Berhasil:</b> Materi telah di update
						</div>";
					$this->session->set_userdata('session_msg',$msg);
					redirect(base_url('guru/halaman'));
				//redirect(base_url('guru/edit_materi?id='.base64_encode($id_materi)));
				}
				else{
					//ambil nilai dari form
					$judul_materi=$this->input->post('judul_materi');
					$materi=$this->input->post('materi');
					$kelas=$this->input->post('kelas');
					//memasukan ke array
					$data= array(
						'judul_materi'=>$judul_materi,
						'materi'=>$materi,
						'gambar'=>$gambar,
						'kelas'=>$kelas,
					);
					//menghapus file
					$nama_file=$this->model_data->get_file($id_materi);
					$file_old=$nama_file{0}->file;	
					$this->hapus_file($gambar_old,$file_old);
					//menambah ke database
					$this->model_data->update_materi('materi',$data, $id_materi);			//database materi			
					$msg="<div class='alert alert-success'>
							<a href='#'' class='close' data-dismiss='alert' aria-label='close'>
								<span aria-hidden='true'>
									<i class='material-icons'>clear</i>
								</span>
							</a>
							<div class='alert-icon'>
							    <i class='material-icons'>check</i>
							</div>
							<b>Berhasil:</b> Materi telah di update
						</div>";
					$this->session->set_userdata('session_msg',$msg);
					redirect(base_url('guru/halaman'));
				}
			}			
		}		
	}

/*HAPUS*/
	public function hapus_materi($nama_gambar,$nama_file){
 		$id_materi=$this->input->post('id_materi');
		//data
 		$komentar=$this->model_data->total_komentar_per_materi('komentar',$id_materi);
 		if ($komentar==0) {
 			$this->model_data->delete_materi($id_materi);
			$this->hapus_file($nama_gambar,$nama_file);
 		}
 		else{
 			$this->model_data->delete_materi($id_materi);
 			$this->model_data->delete_komentar($id_materi);
			$this->hapus_file($nama_gambar,$nama_file);
 		}
 		//mesage			
		$msg="<div class='alert alert-success'>
				<a href='#'' class='close' data-dismiss='alert' aria-label='close'>
					<span aria-hidden='true'>
						<i class='material-icons'>clear</i>
					</span>
				</a>
				<div class='alert-icon'>
				    <i class='material-icons'>check</i>
				</div>
				<b>Berhasil:</b> Materi telah dihapus
			</div>";
		$this->session->set_userdata('session_msg',$msg);
 		redirect(base_url('guru/halaman'));
 	}

 	private function hapus_file($nama_gambar,$nama_file){
 		unlink("./asset/materi/gambar/".$nama_gambar);
		unlink("./asset/materi/file/".$nama_file);
 	}
 	private function h_gambar($nama_gambar){
 		unlink("./asset/materi/gambar/".$nama_gambar);
 	}

/*UPLOAD*/
	public function upload_gambar(){
       	$this->load->library(array('upload'));
	    $nama_gambar = "img_".time(); //nama file + fungsi time
	    $config['upload_path']='./asset/materi/gambar';
	    $config['allowed_types']='gif|jpg|png|jpeg|bmp';
	    $config['max_size']='2048';
	    $config['max_width']='3000';
	    $config['max_height']='3000';
	    $config['file_name']=$nama_gambar; //nama yang terupload nantinya
	    $this->upload->initialize($config);
	    if (!$this->upload->do_upload('gambar')) {    
			$msg="<div class='alert alert-warning'>
					<a href='#'' class='close' data-dismiss='alert' aria-label='close'>
						<span aria-hidden='true'>
							<i class='material-icons'>clear</i>
						</span>
					</a>
					<div class='alert-icon'>
					    <i class='material-icons'>check</i>
					</div>
					<b>Gagal Upload Gambar:</b> ". $this->upload->display_errors('', '')."
				</div>";
            $this->session->set_userdata('session_msg',$msg);   
			//$this->buat_materi();
			return NULL;
		}
        else{        	 
	    	$config2['image_library'] = 'gd2'; 
            $config2['source_image'] = $this->upload->upload_path.$this->upload->file_name;
            $config2['new_image'] = './asset/materi/gambar'; // folder tempat menyimpan hasil resize
			$config2['maintain_ratio'] = TRUE;
			$config2['quality'] = '60%';  
            $config2['width'] = 800; //lebar setelah resize menjadi 100 px
            $config2['height'] = 800; //lebar setelah resize menjadi 100 px
            $this->load->library('image_lib',$config2);
            if(!$this->image_lib->resize()){
				$msg="<div class='alert alert-warning'>
						<a href='#'' class='close' data-dismiss='alert' aria-label='close'>
							<span aria-hidden='true'>
								<i class='material-icons'>clear</i>
							</span>
						</a>
						<div class='alert-icon'>
						    <i class='material-icons'>warning</i>
						</div>
						<b>Gagal Resize:</b> ". $this->image_lib->display_errors('', '')."
					</div>";
                $this->session->set_userdata('session_msg',$msg); 
            }           
			$msg="<div class='alert alert-success'>
					<a href='#'' class='close' data-dismiss='alert' aria-label='close'>
						<span aria-hidden='true'>
								<i class='material-icons'>clear</i>
							</span>
						</a>
						<div class='alert-icon'>
						    <i class='material-icons'>check</i>
						</div>
						<b>Berhasil:</b> Upload gambar
					</div>";
           	$this->session->set_userdata('session_msg',$msg); 
			//redirect(base_url('guru/buat_materi'));
			$gbr = $this->upload->data();
			return $gbr['file_name'];
        }
    }

	function upload_file(){
       	$this->load->library(array('upload'));
        $config_file['upload_path']='./asset/materi/file'; //nama folder untuk menyimpan file
		$config_file['overwrite']='FALSE';
		$config_file['allowed_types']='txt|doc|docx|pdf|xls|xlsx|ppt|zip|rar';
		$config_file['max_size']='2048'; //ukuran maksimal file
		$config_file['max_width']='0';
		$config_file['max_height']='0';
	    $this->upload->initialize($config_file);
		if (!$this->upload->do_upload('file')){
			$msg="<div class='alert alert-warning'>
					<a href='#'' class='close' data-dismiss='alert' aria-label='close'>
						<span aria-hidden='true'>
							<i class='material-icons'>clear</i>
						</span>
					</a>
					<div class='alert-icon'>
					    <i class='material-icons'>warning</i>
					</div>
					<b>Gagal Upload File:</b> ".$this->upload->display_errors()."
				</div>";
			$this->session->set_userdata('session_msg',$msg);
			return NULL;
		}
		else{	       
			$msg="<div class='alert alert-success'>
					<a href='#'' class='close' data-dismiss='alert' aria-label='close'>
						<span aria-hidden='true'>
								<i class='material-icons'>clear</i>
							</span>
						</a>
						<div class='alert-icon'>
						    <i class='material-icons'>close</i>
						</div>
						<b>Berhasil:</b> Upload
					</div>";
           	$this->session->set_userdata('session_msg',$msg); 
			$file=$this->upload->data();
			return $file['file_name'];
		}	
    }
}