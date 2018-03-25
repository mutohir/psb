<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_admin extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('level') !== "admin") {
			redirect('auth');
		}
		$this->load->model('M_dashboard');
		$this->load->model('m_dashboard', 'm_dashboard', TRUE);
		$this->load->library('Pdf');
	}

	public function index() {
		$this->load->model('m_dashboard', 'm_dashboard', TRUE);
		$data['query'] = $this->m_dashboard->fetch_data();
		$data['level'] = $this->session->userdata('level');
		$data['username'] = $this->session->userdata('username');
		$data['user_id'] = $this->session->userdata('user_id');
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('admin/templates/footer', $data);
	}

	// Bagian Pendaftar

	public function laporan_pendaftar($id){
		$data = $this->M_dashboard->getsantri($id);
		$this->load->view('laporan/v_pendaftar', ['data'=>$data]);		
	}
	public function data_pendaftar() {
		$this->load->model('M_dashboard', 'm_dashboard', TRUE);
		$data['query'] = $this->m_dashboard->get_all_pendaftar();
		$data['level'] = $this->session->userdata('level');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/data_pendaftar', $data);
		$this->load->view('admin/templates/footer', $data);
	}
	function form_add_santri(){
		$this->load->model('m_dashboard');
		$data['query'] = $this->m_dashboard->fetch_data();
		$data['kodeunik'] = $this->m_dashboard->buat_kode();
		$data['level'] = $this->session->userdata('level');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/tambah_santri', $data);
		$this->load->view('admin/templates/footer', $data);
	}
	function form_add_pendaftar(){
		$this->load->model('m_dashboard');
		$data['query'] = $this->m_dashboard->fetch_data();
		$data['exist'] = '';
		$data['level'] = $this->session->userdata('level');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/tambah_pendaftar', $data);
		$this->load->view('admin/templates/footer', $data);
	}
	public function add_santri()
	{
		$this->load->model('M_dashboard', 'm_dashboard', TRUE);
		$datasantri = array();
		$datawali = array();
		$datauser = array();
		
		$datasantri['id_santri'] = $this->input->post('id_santri');
		$datasantri['id_wali'] = $this->input->post('id_wali');
		$datasantri['user_id'] = $this->input->post('user_id');
		$datasantri['no_pendaftaran'] = $this->input->post('no_pendaftaran');
		$datasantri['nama_santri'] = $this->input->post('nama_santri');
		$datasantri['alamat_santri'] = $this->input->post('alamat_santri');
		$datasantri['tmp_lahir'] = $this->input->post('tmp_lahir');
		$datasantri['tgl_lahir'] = $this->input->post('tgl_lahir');
		$datasantri['gender'] = $this->input->post('gender');
		$datasantri['status'] = $this->input->post('status');
		$datasantri['status_daftar'] = $this->input->post('status_daftar');
		$datasantri['telp_santri'] = $this->input->post('telp_santri');
		$datasantri['pekerjaan'] = $this->input->post('pekerjaan');
		// $datasantri['userfile'] = $image_name;
		// ayah
		$datawali['nama_ayah'] = $this->input->post('nama_ayah');
		$datawali['alamat_ayah'] = $this->input->post('alamat_ayah');
		$datawali['pekerjaan_ayah'] = $this->input->post('pekerjaan_ayah');
		$datawali['telp_ayah'] = $this->input->post('telp_ayah');
		// ibu
		$datawali['nama_ibu'] = $this->input->post('nama_ibu');
		$datawali['alamat_ibu'] = $this->input->post('alamat_ibu');
		$datawali['pekerjaan_ibu'] = $this->input->post('pekerjaan_ibu');
		$datawali['telp_ibu'] = $this->input->post('telp_ibu');
		// user
		$datauser['level'] = $this->input->post('level');
		$datauser['nama'] = $this->input->post('nama');
		$datauser['username'] = $this->input->post('username');
		$datauser['password'] = md5($this->input->post('password'));
		$datauser['email'] = $this->input->post('email');
		// $datauser['userfile'] = $image_name;

		if (isset($_POST['add'])) {

			// $config['upload_path'] = './uploads/';
			// $config['allowed_types'] = 'gif|jpg|jpeg|png|iso|dmg|zip|rar|doc|docx|xls|xlsx|ppt|pptx|csv|ods|odt|odp|pdf|rtf|sxc|sxi|txt';		
			// $config['max_size'] = '150';
			// $config['max_width'] = '1024';
			// $config['max_heigh'] = '768';
			
			// $this->upload->initialize($config);
			// // $this->load->library('upload', $config);
   //          if ( ! $this->upload->do_upload()){
   //              $error = array('error' => $this->upload->display_errors());
   //          } else {		
   //              $image_name = $this->upload->data();
   //              $data = array('upload_data' => $image_name);
   //          }			

			if ($this->m_dashboard->add_santri($datasantri,$datawali,$datauser)) {
				
				$this->session->set_flashdata('success', 'Data berhasil ditambahkan');
				redirect('admin/C_admin/','refresh');
			}
			else {
				$this->session->set_flashdata('error', 'Salah satu data gagal ditambahkan. Silahkan coba lagi.');
				redirect('admin/C_admin/','refresh');
			}			
			
			redirect('admin/C_admin/','refresh');
		}
	}
	public function add_pendaftar()
	{
		$data = array(
		'username' => $this->input->post('username'), 
		'password' => md5($this->input->post('password')),
		'email' => $this->input->post('email'),
		'level' => $this->input->post('level')
		);

		$this->load->model('M_dashboard');

		if ($this->M_dashboard->check_user_exist($data['username'])) {
			$data['level'] = $this->session->userdata('level');
			$data['user_id'] = $this->session->userdata('user_id');
			$data['exist'] = 'Username sudah ada, silahkan gunakan username lain.';
			$this->load->view('admin/templates/header', $data);
			$this->load->view('admin/tambah_pendaftar', $data);
			$this->load->view('admin/templates/footer', $data);
		} else {
			$this->M_dashboard->add_pendaftar($data);
			$this->session->set_flashdata('success', 'Data Akun berhasil ditambahkan.');
			redirect('admin/C_admin/data_pendaftar','refresh');
		}

		// if (isset($_POST['add'])) { 
		// $this->load->model('M_dashboard', 'm_dashboard', TRUE);
		// 	if ($this->m_dashboard->add_pendaftar()) {
		// 		$this->session->set_flashdata('success', 'Data Pendaftar berhasil ditambahkan');
		// 		redirect('admin/C_admin/data_pendaftar','refresh');
		// 	}
		// 	else {
		// 		$this->session->set_flashdata('error', 'Data Pendaftar gagal ditambahkan. Silahkan coba lagi.');
		// 		redirect('admin/C_admin/form_add_pendaftar','refresh');
		// 	}
		// 	redirect('admin/C_admin/add_pendaftar','refresh');
		// }
	}
	public function edit($id)
	{
		

   //      $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
   //      $config['upload_path'] = './uploads/foto_user'; //path folder
   //      $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
   //      $config['max_size'] = '2048'; //maksimum besar file 2M
   //      $config['max_width']  = '1288'; //lebar maksimum 1288 px
   //      $config['max_height']  = '768'; //tinggi maksimu 768 px
   //      $config['file_name'] = $nmfile; //nama yang terupload nantinya
   //      $this->upload->initialize($config);
        
   //      if($_FILES['userfile']['name'])
   //      {
   //          if (!$this->upload->do_upload('userfile'))
   //          {
   //          	$error = array('error' => $this->upload->display_errors());
   //      		$this->session->set_flashdata('error', 'Data tidak mendukung.');
   //      		redirect('admin/C_admin/','refresh');
			// } else {
 
			// 	//file is uploaded successfully
			// 	//now get the file uploaded data 
			// 	$image_name = $this->upload->data();
			// 	//get the uploaded file name
			// 	$image_name['userfile'] = $image_name['file_name'];
		 // }
			// 	//store pic data to the db
		$this->load->model('M_dashboard', 'm_dashboard', TRUE);
		if (isset($_POST['edit'])) {
			if ($this->m_dashboard->updatesantri($id)) {
				$this->session->set_flashdata('success', 'Data berhasil dirubah');
				redirect('admin/C_admin/','refresh');
			}
			else {
				$this->session->set_flashdata('error', 'Data gagal dirubah. Silahkan coba lagi.');
				redirect('admin/C_admin/','refresh');
			}

			}
		
		$data['santri'] = $this->m_dashboard->getsantri($id);
		$data['level'] = $this->session->userdata('level');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['username'] = $this->session->userdata('username');

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/edit_santri', $data);
		$this->load->view('admin/templates/footer', $data);
	}
	public function edit_pendaftar($id)
	{
		$this->load->model('M_dashboard', 'm_dashboard', TRUE);
		if (isset($_POST['edit'])) {
			if ($this->m_dashboard->updatependaftar($id)) {
				$this->session->set_flashdata('success', 'Data berhasil dirubah');
				redirect('admin/C_admin/data_pendaftar','refresh');
			}
			else {
				$this->session->set_flashdata('error', 'Data gagal dirubah. Silahkan coba lagi.');
				redirect('admin/C_admin/edit_pendaftar','refresh');
			}
			redirect('admin/C_admin/data_pendaftar','refresh');
		}
		
		$data['pendaftar'] = $this->m_dashboard->getpendaftar($id);
		$data['level'] = $this->session->userdata('level');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/edit_pendaftar', $data);
		$this->load->view('admin/templates/footer', $data);
	}
	public function delete_pendaftar($id)
	{
		$this->load->model('M_dashboard', 'm_dashboard', TRUE);
				if (isset($_POST['hapus'])) {
			if ($this->m_dashboard->delete_pendaftar($id)) {
				$this->session->set_flashdata('success', 'Data berhasil dihapus');
				redirect('admin/C_admin/data_pendaftar','refresh');
			}
			else {
				$this->session->set_flashdata('error', 'Data gagal dihapus. Silahkan coba lagi.');
				redirect('admin/C_admin/edit_pendaftar','refresh');
			}
			redirect('admin/C_admin/data_pendaftar','refresh');
		}
		$this->m_dashboard->delete_pendaftar($id);
		redirect('admin/C_admin/data_pendaftar','refresh');
	}
	public function lihat($id)
		{
		$this->load->model('M_dashboard', 'm_dashboard', TRUE);
		$data['santri'] = $this->m_dashboard->getsantri($id);
		// print_r($data['santri']);
		$data['level'] = $this->session->userdata('level');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/lihat_santri', $data);
		$this->load->view('admin/templates/footer', $data);
	}
	public function delete($id)
	{
		$this->load->model('M_dashboard', 'm_dashboard', TRUE);
		$this->m_dashboard->delete_santri($id);
		redirect('admin/C_admin','refresh');
	}
	public function lihat_pendaftar($id)
		{
		$this->load->model('M_dashboard', 'm_dashboard', TRUE);
		$data['admin'] = $this->m_dashboard->getpendaftar($id);
		$data['level'] = $this->session->userdata('level');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/lihat_pendaftar', $data);
		$this->load->view('admin/templates/footer', $data);
	}

	public function berkas()
	{
	  error_reporting(0);
	  $this->load->model('M_upload');
	  $data['username'] = $this->session->userdata('username');
	  $data['user_id'] = $this->session->userdata('user_id');
	  $data['berkas'] = $this->M_upload->getberkas();
	  $data['level'] = $this->session->userdata('level');
		$this->load->view('admin/templates/header', $data);
	  $this->load->view('admin/berkas', $data);
		$this->load->view('admin/templates/footer', $data);
	}

	public function panduan()
	{
		$data['panduan'] = $this->M_dashboard->panduan();
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['user_id'] = $this->session->userdata('user_id');
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/panduan', $data);
		$this->load->view('admin/templates/footer', $data);
	}

	public function add_panduan()
	{
		if (isset($_POST['add'])) {
		$this->load->model('M_dashboard', 'm_dashboard', TRUE);
			if ($this->m_dashboard->add_panduan()) {
				$this->session->set_flashdata('success', 'Data Jadwal berhasil ditambahkan');
				redirect('admin/C_admin/panduan','refresh');
			}
			else {
				$this->session->set_flashdata('error', 'Data Jadwal gagal ditambahkan. Silahkan coba lagi.');
				redirect('admin/C_admin/form_add_panduan','refresh');
			}
		}
	}
	function form_add_panduan(){
		$this->load->model('m_dashboard');
		$data['query'] = $this->m_dashboard->panduan();
		$data['level'] = $this->session->userdata('level');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/tambah_panduan', $data);
		$this->load->view('admin/templates/footer', $data);
	}
	public function edit_panduan($id)
	{
		$this->load->model('M_dashboard', 'm_dashboard', TRUE);
		if (isset($_POST['edit'])) {
			if ($this->m_dashboard->updatepanduan($id)) {
				$this->session->set_flashdata('success', 'Data berhasil dirubah');
				redirect('admin/C_admin/panduan','refresh');
			}
			else {
				$this->session->set_flashdata('error', 'Data gagal dirubah. Silahkan coba lagi.');
				redirect('admin/C_admin/edit_panduan','refresh');
			}
		}
		
		$data['panduan'] = $this->m_dashboard->getpanduan($id);;
		$data['level'] = $this->session->userdata('level');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/edit_panduan', $data);
		$this->load->view('admin/templates/footer', $data);
	}
	public function delete_panduan($id)
	{
		$this->load->model('M_dashboard', 'm_dashboard', TRUE);
		$this->m_dashboard->delete_panduan($id);
		redirect('admin/C_admin/panduan','refresh');
	}
	public function penerimaan()
	{
		$data['queries'] = $this->M_dashboard->fetch_data();
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['user_id'] = $this->session->userdata('user_id');
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/penerimaan', $data);
		$this->load->view('admin/templates/footer', $data);
	}

	// Bagian Petugas

	public function laporan_petugas($id){
		$data = $this->M_dashboard->getpetugas($id);
		$this->load->view('laporan/v_petugas', ['data'=>$data]);		
	}
	public function data_petugas() {
		$this->load->model('M_dashboard', 'm_dashboard', TRUE);
		$data['query'] = $this->m_dashboard->get_all_petugas();
		$data['level'] = $this->session->userdata('level');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/data_petugas', $data);
			$this->load->view('admin/templates/footer', $data);
	}
	function form_add_petugas(){
		$this->load->model('m_dashboard');
		$data['query'] = $this->m_dashboard->fetch_data();
		$data['level'] = $this->session->userdata('level');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/tambah_petugas', $data);
			$this->load->view('admin/templates/footer', $data);
	}
	public function add_petugas()
	{
		if (isset($_POST['add'])) {
		$this->load->model('M_dashboard', 'm_dashboard', TRUE);
			if ($this->m_dashboard->add_petugas()) {
				$this->session->set_flashdata('success', 'Data Petugas berhasil ditambahkan');
				redirect('admin/C_admin/data_petugas','refresh');
			}
			else {
				$this->session->set_flashdata('error', 'Data admin gagal ditambahkan. Silahkan coba lagi.');
				redirect('admin/C_admin/form_add_petugas','refresh');
			}
			redirect('admin/C_admin/add_petugas','refresh');
		}
	}
	public function edit_petugas($id)
	{
		$this->load->model('M_dashboard', 'm_dashboard', TRUE);
		if (isset($_POST['edit'])) {
			if ($this->m_dashboard->updatepetugas($id)) {
				$this->session->set_flashdata('success', 'Data berhasil dirubah');
				redirect('admin/C_admin/data_petugas','refresh');
			}
			else {
				$this->session->set_flashdata('error', 'Data gagal dirubah. Silahkan coba lagi.');
				redirect('admin/C_admin/edit_petugas','refresh');
			}
			redirect('admin/C_admin/data_petugas','refresh');
		}
		
		$data['petugas'] = $this->m_dashboard->getpetugas($id);;
		$data['level'] = $this->session->userdata('level');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/edit_petugas', $data);
			$this->load->view('admin/templates/footer', $data);
	}
	public function lihat_petugas($id)
		{
		$this->load->model('M_dashboard', 'm_dashboard', TRUE);
		$data['petugas'] = $this->m_dashboard->getpetugas($id);
		$data['level'] = $this->session->userdata('level');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/lihat_petugas', $data);
				$this->load->view('admin/templates/footer', $data);
	}
	public function delete_petugas($id)
	{
		$this->load->model('M_dashboard', 'm_dashboard', TRUE);
		$this->m_dashboard->delete_petugas($id);
		redirect('admin/C_admin/data_petugas','refresh');
	}
	
	// Bagian Berkas
	function form_upload_berkas(){
		$this->load->model('m_dashboard');
		$data['query'] = $this->m_dashboard->fetch_data();
		$data['kodeunik'] = $this->m_dashboard->buat_kode();
		$data['level'] = $this->session->userdata('level');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/berkas', $data);
			$this->load->view('admin/templates/footer', $data);
	}

	public function biaya()
		{
		$data['biaya'] = $this->m_dashboard->biaya();
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['user_id'] = $this->session->userdata('user_id');
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/biaya', $data);
		$this->load->view('admin/templates/footer', $data);
	}
	function form_add_biaya(){
		$this->load->model('m_dashboard');
		$data['query'] = $this->m_dashboard->biaya();
		$data['level'] = $this->session->userdata('level');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/tambah_biaya', $data);
		$this->load->view('admin/templates/footer', $data);
	}
	public function add_biaya()
	{
		if (isset($_POST['add'])) {
		$this->load->model('M_dashboard', 'm_dashboard', TRUE);
			if ($this->m_dashboard->add_biaya()) {
				$this->session->set_flashdata('success', 'Data Biaya berhasil ditambahkan');
				redirect('admin/C_admin/biaya','refresh');
			}
			else {
				$this->session->set_flashdata('error', 'Data Biaya gagal ditambahkan. Silahkan coba lagi.');
				redirect('admin/C_admin/form_add_biaya','refresh');
			}
		}
	}
	public function edit_biaya($id)
	{
		$this->load->model('M_dashboard', 'm_dashboard', TRUE);
		if (isset($_POST['edit'])) {
			if ($this->m_dashboard->updatebiaya($id)) {
				$this->session->set_flashdata('success', 'Data berhasil dirubah');
				redirect('admin/C_admin/biaya','refresh');
			}
			else {
				$this->session->set_flashdata('error', 'Data gagal dirubah. Silahkan coba lagi.');
				redirect('admin/C_admin/edit_biaya','refresh');
			}
		}
		
		$data['biaya'] = $this->m_dashboard->getbiaya($id);;
		$data['kategori_biaya'] = $this->session->userdata('kategori_biaya');
		$data['level'] = $this->session->userdata('level');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/edit_biaya', $data);
		$this->load->view('admin/templates/footer', $data);
	}

	public function delete_biaya($id)
	{
		$this->load->model('M_dashboard', 'm_dashboard', TRUE);
		$this->m_dashboard->delete_biaya($id);
		redirect('admin/C_admin/biaya','refresh');
	}
	
//Bagian Jadwal
	public function jadwal()
		{
		$data['query'] = $this->M_dashboard->jadwal();
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['user_id'] = $this->session->userdata('user_id');
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/jadwal', $data);
		$this->load->view('admin/templates/footer', $data);
	}
	public function jadwal_ngaji()
		{
		$data['query'] = $this->M_dashboard->ngaji();
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['user_id'] = $this->session->userdata('user_id');
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/jadwal_ngaji', $data);
		$this->load->view('admin/templates/footer', $data);
	}
	public function form_add_jadwal_ngaji(){
		$this->load->model('m_dashboard');
		$data['query'] = $this->m_dashboard->ngaji();
		$data['level'] = $this->session->userdata('level');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/tambah_ngaji', $data);
		$this->load->view('admin/templates/footer', $data);
	}
	public function edit_ngaji($id)
	{
		$this->load->model('M_dashboard', 'm_dashboard', TRUE);
		if (isset($_POST['edit'])) {
		if ($this->m_dashboard->updatengaji($id)) {
			$this->session->set_flashdata('success', 'Data berhasil dirubah');
			redirect('admin/C_admin/jadwal_ngaji','refresh');
		}
		else {
			$this->session->set_flashdata('error', 'Data gagal dirubah. Silahkan coba lagi.');
			redirect('admin/C_admin/edit_ngaji','refresh');
		}
		}
		$data['query'] = $this->m_dashboard->getngaji($id);;
		$data['level'] = $this->session->userdata('level');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/edit_ngaji', $data);
		$this->load->view('admin/templates/footer', $data);
	}

		public function add_jadwal_ngaji()
	{
		if (isset($_POST['add'])) {
		$this->load->model('M_dashboard', 'm_dashboard', TRUE);
			if ($this->m_dashboard->add_jadwal_ngaji()) {
				$this->session->set_flashdata('success', 'Data Jadwal berhasil ditambahkan');
				redirect('admin/C_admin/jadwal_ngaji','refresh');
			}
			else {
				$this->session->set_flashdata('error', 'Data Jadwal gagal ditambahkan. Silahkan coba lagi.');
				redirect('admin/C_admin/form_add_jadwal_ngaji','refresh');
			}
		}
	}
	public function delete_jadwal_ngaji($id)
	{
		$this->load->model('M_dashboard', 'm_dashboard', TRUE);
		$this->m_dashboard->delete_jadwal_ngaji($id);
		redirect('admin/C_admin/jadwal_ngaji','refresh');
	}

	public function add_jadwal()
	{
		if (isset($_POST['add'])) {
		$this->load->model('M_dashboard', 'm_dashboard', TRUE);
			if ($this->m_dashboard->add_jadwal()) {
				$this->session->set_flashdata('success', 'Data Jadwal berhasil ditambahkan');
				redirect('admin/C_admin/jadwal','refresh');
			}
			else {
				$this->session->set_flashdata('error', 'Data Jadwal gagal ditambahkan. Silahkan coba lagi.');
				redirect('admin/C_admin/form_add_jadwal','refresh');
			}
		}
	}
	function form_add_jadwal(){
		$this->load->model('m_dashboard');
		$data['query'] = $this->m_dashboard->jadwal();
		$data['level'] = $this->session->userdata('level');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/tambah_jadwal', $data);
		$this->load->view('admin/templates/footer', $data);
	}
	public function edit_jadwal($id)
	{
		$this->load->model('M_dashboard', 'm_dashboard', TRUE);
		if (isset($_POST['edit'])) {
			if ($this->m_dashboard->updatejadwal($id)) {
				$this->session->set_flashdata('success', 'Data berhasil dirubah');
				redirect('admin/C_admin/jadwal','refresh');
			}
			else {
				$this->session->set_flashdata('error', 'Data gagal dirubah. Silahkan coba lagi.');
				redirect('admin/C_admin/edit_jadwal','refresh');
			}
		}
		
		$data['jadwal'] = $this->m_dashboard->getjadwal($id);;
		$data['level'] = $this->session->userdata('level');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/edit_jadwal', $data);
		$this->load->view('admin/templates/footer', $data);
	}
	public function delete_jadwal($id)
	{
		$this->load->model('M_dashboard', 'm_dashboard', TRUE);
		$this->m_dashboard->delete_jadwal($id);
		redirect('admin/C_admin/jadwal','refresh');
	}
	//Bagian Profil

	public function profil($id)
		{
		$this->load->model('M_dashboard', 'm_dashboard', TRUE);
		$data['query'] = $this->m_dashboard->getprofil($id);
		$data['level'] = $this->session->userdata('level');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/profil', $data);
		$this->load->view('admin/templates/footer', $data);
	}
	public function edit_profil($id)
	{
		$this->load->model('M_dashboard', 'm_dashboard', TRUE);
		if (isset($_POST['edit'])) {
			if ($this->m_dashboard->updateprofil($id)) {
				$this->session->set_flashdata('success', 'Data berhasil dirubah');
				redirect('admin/C_admin/profil/'.$id,'refresh');
			}
			else {
				$this->session->set_flashdata('error', 'Data gagal dirubah. Silahkan coba lagi.');
				redirect('admin/C_admin/edit_profil','refresh');
			}
			redirect('admin/C_admin/profil/'.$id,'refresh');
		}
		
		$data['profil'] = $this->m_dashboard->getprofil($id);
		$data['level'] = $this->session->userdata('level');
		$data['username'] = $this->session->userdata('username');
		$data['user_id'] = $this->session->userdata('user_id');
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/edit_profil', $data);
			$this->load->view('admin/templates/footer', $data);
	}
	public function form_foto_profil()
	{
		$data['level'] = $this->session->userdata('level');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/edit_foto_profil', $data);
			$this->load->view('admin/templates/footer', $data);
	}

	function download($filename = NULL) {
	    // read file contents
	    $data = file_get_contents(base_url('/uploads/berkas/'.$filename));
	    force_download($filename, $data);
	}

public function hapus($id)
  {
  	$this->load->model('M_upload');
  	$this->M_upload->hapus($id);
  	redirect('admin/C_admin/berkas','refresh');
  }

	//Bagian Upload

	// public function do_upload($id) {
	// $nmfile = "foto_".time();
	// $config['upload_path']   = './uploads/';
	// $config['allowed_types'] = 'gif}jpeg|bmp|jpg|png';
	// $config['max_size']      = '2048';
	// $config['max_width']     = '1288';
	// $config['max_height']    = '768';
	// $config['file_name']    = $nmfile;
	// // $this->load->library('upload', $config);
	// $this->upload->initialize($config);
	// $this->upload->do_upload('foto');
	// $file_name = $this->upload->data();
	// $this->M_dashboard->do_upload($id);
	// }
	
	//Bagian Kebutuhan Santri
	
	public function kebutuhan_santri()
		{
		$this->load->model('M_dashboard', 'm_dashboard', TRUE);
		$data['profil'] = $this->m_dashboard->fetch_data();
		$data['level'] = $this->session->userdata('level');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/kebutuhan_santri', $data);
		$this->load->view('admin/templates/footer', $data);
	}

	//Bagian Logout
	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('auth');
	}
}
/* End of file C_admin.php */
/* Location: ./application/controllers/admin/C_admin.php */