<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
class Model_data extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
/*ADD*/
	//untuk tambah data
	function add_data($table,$data){
		$this->db->insert($table,$data);		
	}


/*EDIT*/
	//untuk edit data, otomatis where primary key
	function update_data($table,$data){
		$this->db->replace($table, $data);	
	}
	//untuk edit data memakai where
	function update_data2($table,$data,$id){
		$this->db->where('username', $id);
		$this->db->update($table, $data);
	}


/*GET*/
	//untuk login
	function get_user_login($username, $password){
		$this->db->select('u.id_user,u.username,u.level,u.aktif,d.kelas,d.validasi_guru');
	   	$this->db->from('user as u');
	  	$this->db-> join('user_detail as d','u.username=d.username');
		$this->db->where('u.username', $username);
		$this->db->where('u.password', MD5($password));
		$this->db->limit(1);
	 
	   	$query=$this->db->get();	 
	   	if($query->num_rows()==1){
	    	return $query->result();
	   	}
	   	else{
	    	return NULL;
	   	}
	}
	//untuk profil
	function get_user($username){
		$this->db-> select('u.id_user, u.username,u.password,u.email, u.level, d.nama_lengkap,d.kelas,d.sekolah,d.jenis_kelamin,d.tgl_lahir,d.no_hp,d.alamat,d.status');
	   	$this->db-> from('user as u');
	  	$this->db-> join('user_detail as d','u.username=d.username');

		$this->db->where('u.username', $username);
		$this->db->limit(1);
	 
	   	$query=$this->db->get();	 
	   	if($query->num_rows()==1){
	    	return $query->result();
	   	}
	   	else{
	    	return NULL;
	   	}
	}
	//untuk profil publik
	function get_user_publik($username){
		$this->db-> select('u.username,u.email, u.level, 
			d.kelas,d.sekolah,d.nama_lengkap,d.jenis_kelamin,d.tgl_lahir,d.no_hp,d.alamat,d.status');
	   	$this->db-> from('user as u');
	  	$this->db-> join('user_detail as d','u.username=d.username');

		$this->db->where('u.username', $username);
		$this->db->limit(1);
	 
	   	$query=$this->db->get();	 
	   	if($query->num_rows()==1){
	    	return $query->result();
	   	}
	   	else{
	    	return NULL;
	   	}
	}

/*UMUM*/
	//count
	function total_data($table) {
        $this->db->from($table);
        return $this->db->count_all_results();
    }
    //tampilkan dengan limit
    function get_data_limit($table,$by,$limit,$start) {
        $this->db->order_by($by, 'DESC');
        $this->db->limit($limit, $start);
        return $this->db->get($table);
    }
    //ambil data
    function get_data($table,$id){
		$this->db-> select('*');
	   	$this->db-> from($table);
		$this->db->where('id_materi', $id);
		$this->db->limit(1);

	   	$query=$this->db->get();	 
	   	if($query->num_rows()==1){
	    	return $query->result();
	   	}
	   	else{
	    	return NULL;
	   	}
    }
    function delete_data($kolom,$id,$table){
		$this->db->where($kolom, $id);
		$this->db->delete($table);
	}

/*MATERI*/
	//top materi
	function recent_komentar(){
		$this->db-> select('k.id_komentar,k.id_materi,k.komentar,k.tgl_dibuat,d.nama_lengkap,d.username');
	   	$this->db-> from('komentar as k');
	  	$this->db-> join('user as u','u.id_user=k.id_user');
	  	$this->db-> join('user_detail as d','u.username=d.username');	
		$this->db->order_by('k.tgl_dibuat', 'desc');
        $this->db->limit(5);	 
	   	$query=$this->db->get();
		if($query->num_rows()>0){
	    	return $query->result();
	   	}
	   	else{
	    	return NULL;
	   	}
	}
	function top_data($table){
		$query=$this->db->query('select id_materi, count(id_lihat_materi) as total
		from '.$table.' 
		group by id_materi
		ORDER BY total DESC
		LIMIT 5');
		if($query->num_rows()>0){
	    	return $query->result();
	   	}
	   	else{
	    	return NULL;
	   	}
	}
	function top_materi(){
		$query=$this->db->query('
		select l.id_materi, count(l.id_lihat_materi) as total, m.judul_materi
		from lihat_materi as l 
		join materi as m on l.id_materi=m.id_materi 
		group by id_materi 
		ORDER BY total DESC
		LIMIT 5');
		if($query->num_rows()>0){
	    	return $query->result();
	   	}
	   	else{
	    	return NULL;
	   	}
	}
	function top_download(){
		$query=$this->db->query('
		select l.id_materi, count(l.id_jumlah_download) as total, m.judul_materi, m.file
		from jumlah_download as l 
		join materi as m on l.id_materi=m.id_materi 
		group by id_materi 
		ORDER BY total DESC
		LIMIT 5');
		if($query->num_rows()>0){
	    	return $query->result();
	   	}
	   	else{
	    	return NULL;
	   	}
	}
	//count
	function total_materi_per_kelas($table,$kelas) {
        $this->db->from($table);	
		$this->db->where('kelas', $kelas);
        return $this->db->count_all_results();
    }
    //total banyaknya materi dilihat
	function total_lihat_materi($table,$id_materi) {
        $this->db->from($table);	
		$this->db->where('id_materi', $id_materi);
        return $this->db->count_all_results();
    }
    //total banyaknya download 
	function total_download_materi($table,$id_materi) {
        $this->db->from($table);	
		$this->db->where('id_materi', $id_materi);
        return $this->db->count_all_results();
    }
    //total komentar per materi
	function total_komentar_per_materi($table,$id_materi) {
        $this->db->from($table);	
		$this->db->where('id_materi', $id_materi);
        return $this->db->count_all_results();
    }
    //tampilkan materi per kelas
    function get_materi_per_kelas($table,$by,$kelas,$limit,$start) {    	
		$this->db->where('kelas', $kelas);
        $this->db->order_by($by, 'DESC');
        $this->db->limit($limit, $start);
        return $this->db->get($table);
    }
    //ambil join materi untuk posting
    function get_detail_materi($id){
		$this->db-> select('m.id_materi,m.judul_materi,m.materi,m.tgl_dibuat,m.file,m.gambar,m.kelas,
			d.nama_lengkap');
	   	$this->db-> from('materi as m');
	  	$this->db-> join('user as u','u.id_user=m.id_user');
	  	$this->db-> join('user_detail as d','u.username=d.username');

		$this->db->where('m.id_materi', $id);
		$this->db->limit(1);

	   	$query=$this->db->get();	 
	   	if($query->num_rows()==1){
	    	return $query->result();
	   	}
	   	else{
	    	return NULL;
	   	}
    }
    //ambil join komentar, materi, user untuk posting
    function get_detail_komentar($id){
		$this->db-> select('k.id_komentar,k.id_materi,k.komentar,k.tgl_dibuat,d.nama_lengkap,d.username');
	   	$this->db-> from('komentar as k');
	  	$this->db-> join('user as u','u.id_user=k.id_user');
	  	$this->db-> join('user_detail as d','u.username=d.username');
		$this->db->where('k.id_materi', $id);		
		$this->db->order_by('k.tgl_dibuat', 'desc');
	   	$query=$this->db->get();	 
	   	if($query->num_rows()>0){
	    	return $query->result();
	   	}
	   	else{
	    	return NULL;
	   	}
    }


    function total_search_materi($table,$kata){
		$this->db->select();
		$this->db->from($table);
		$this->db->like("judul_materi", $kata, 'both');
		$this->db->or_like("materi", $kata, 'both');
		$this->db->order_by('tgl_dibuat', 'desc');
		$query=$this->db->get();	 
	   	if($query->num_rows()>0){
	    	return $this->db->count_all_results();
	   	}
	   	else{
	    	return NULL;
	   	}
	}
	function search_materi($table,$kata){
		$this->db->select();
		$this->db->from($table);
		$this->db->like("judul_materi", $kata, 'both');
		$this->db->or_like("materi", $kata, 'both');
		$this->db->order_by('tgl_dibuat', 'desc');
		$query=$this->db->get();	 
	   	if($query->num_rows()>0){
	    	return $query->result();
	   	}
	   	else{
	    	return NULL;
	   	}
	}

/*GURU*/
	//count
	function total_materi_guru($table,$where) {
        $this->db->from($table);	
		$this->db->where('id_user', $where);
        return $this->db->count_all_results();
    }
    //tampilkan materi yang dibuat
    function get_materi_guru($table,$order,$where,$limit,$start) {    	
		$this->db->where('id_user', $where);
        $this->db->order_by($order, 'DESC');
        $this->db->limit($limit, $start);
        return $this->db->get($table);
    }
    //ambil join materi untuk posting
    function get_detail_materi_guru($id){
		$this->db-> select('m.id_materi,m.judul_materi,m.materi,m.tgl_dibuat,m.file,m.gambar,m.kelas,
			d.nama_lengkap');
	   	$this->db-> from('materi as m');
	  	$this->db-> join('user as u','u.id_user=m.id_user');
	  	$this->db-> join('user_detail as d','u.username=d.username');

		$this->db->where('m.id_materi', $id);
		$this->db->limit(1);

	   	$query=$this->db->get();	 
	   	if($query->num_rows()==1){
	    	return $query->result();
	   	}
	   	else{
	    	return NULL;
	   	}
    }    
	//tambah materi
	function add_materi($table,$data){
		$this->db->insert($table,$data);		
	}
	function delete_materi($id_materi){
		$this->db->where('id_materi', $id_materi);
		$this->db->delete('materi');
	}
	function delete_komentar($id_materi){
		$this->db->where('id_materi', $id_materi);
		$this->db->delete('komentar');
	}
	function update_materi($table,$data,$id){
		$this->db->where('id_materi', $id);
		$this->db->update($table, $data);
	}
	//untuk nama file
	function get_file($id){
		$this->db->select('gambar,file');
	   	$this->db->from('materi');
		$this->db->where('id_materi', $id);
		$this->db->limit(1);	 
	   	$query=$this->db->get();	 
	   	if($query->num_rows()==1){
	    	return $query->result();
	   	}
	   	else{
	    	return NULL;
	   	}
	}
	//tampil total berita
	function total_berita() {
        $this->db->from("berita");	
        return $this->db->count_all_results();
    }
    function get_berita($table,$by,$limit,$start) {  
        $this->db->order_by($by, 'DESC');
        $this->db->limit($limit, $start);
        return $this->db->get($table);
    }

    function total_feedback(){
    	$this->db->from("feedback");
    	return $this->db->count_all_results();
    }
    function get_feedback($table,$by,$limit,$start) {  
        $this->db->order_by($by, 'DESC');
        $this->db->limit($limit, $start);
        return $this->db->get($table);
    }
    function tampil_berita(){
    	return $this->db->get('berita');
    }

    function delete_berita($id){
    	$this->db->where('id_berita', $id);
    	$query=$this->db->get('berita');
    	$row=$query->row();
    	unlink("berita/$row->judul_berita");
    	$this->db->delete('table',array('id_berita' => $id));

    }
	function update_berita($table,$data,$id){
		$this->db->where('id_berita', $id);
		$this->db->update($table, $data);
	}

	 //ambil join materi untuk posting
    function get_detail_berita($id){
		$this->db-> select('m.id_berita,m.judul_berita,m.berita,m.tgl_dibuat,m.gambar,
			d.nama_lengkap');
	   	$this->db-> from('berita as m');
	  	$this->db-> join('user as u','u.id_user=m.id_user');
	  	$this->db-> join('user_detail as d','u.username=d.username');

		$this->db->where('m.id_berita', $id);
		$this->db->limit(1);

	   	$query=$this->db->get();	 
	   	if($query->num_rows()==1){
	    	return $query->result();
	   	}
	   	else{
	    	return NULL;
	   	}
    }    
    
    function add_berita($table,$data){
		$this->db->insert($table,$data);		
	}
/*ADMIN*/
	function get_user_konfirmasi(){
		$this->db-> select('u.username,u.level,u.email,d.kelas,d.nama_lengkap,d.username');
	   	$this->db-> from('user as u');
	  	$this->db-> join('user_detail as d','u.username=d.username');
		$this->db->where('u.level', '1');	
		$this->db->where('d.validasi_guru', '0');		
		$this->db->order_by('u.id_user', 'desc');
	   	$query=$this->db->get();	 
	   	if($query->num_rows()>0){
	    	return $query->result();
	   	}
	   	else{
	    	return NULL;
	   	}
	}

	function validation_guru($where,$data){
		$this->db->where('username', $where);
		$this->db->update('user_detail', $data);
	}
	function total_data_admin($table) {
        $this->db->from($table);	
        return $this->db->count_all_results();
    }
    //tampilkan materi yang dibuat
    function get_data_admin($table,$order,$limit,$start) {  
        $this->db->order_by($order, 'DESC');
        $this->db->limit($limit, $start);
        return $this->db->get($table);
    }
    //tampilkan user
    function total_all_user() {    	
		$this->db-> select('u.id_user');
	   	$this->db-> from('user as u');
	  	$this->db-> join('user_detail as d','u.username=d.username');
        return $this->db->count_all_results();
    }
    function get_all_user($order,$limit,$start){
		$this->db-> select('u.id_user,u.username,u.email, u.level,u.aktif, 
			d.kelas,d.sekolah,d.nama_lengkap,d.jenis_kelamin,d.tgl_lahir,d.no_hp,d.alamat,d.status');
	   	$this->db-> from('user as u');
	  	$this->db-> join('user_detail as d','u.username=d.username');
        $this->db->order_by($order, 'DESC');
        $this->db->limit($limit, $start);
	   	$query=$this->db->get();	 
	   	if($query->num_rows()>0){
	    	return $query->result();
	   	}
	   	else{
	    	return NULL;
	   	}
	}
}