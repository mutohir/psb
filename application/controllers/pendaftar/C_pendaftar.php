z<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_pendaftar extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('level') !== "pendaftar")
		{
		redirect('Auth');
			}
		$this->load->model('M_daftar_online');
		$this->load->model('M_daftar_online','m_daftar_online', TRUE);
		$this->load->library('pdf');
	}
	public function index()
	{
		error_reporting(0);
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['santri'] = $this->m_daftar_online->tampil_data();
		$data['user_id'] = $this->session->userdata('user_id');
		$data['id_santri'] = $this->session->userdata('id_santri');
		$this->load->view('pendaftar/templates/header', $data);
		$this->load->view('pendaftar/index', $data);
		$this->load->view('pendaftar/templates/footer', $data);
	}
	public function lihat_santri($id)
	{
		$this->load->model('m_daftar_online');
		$data['query'] = $this->m_daftar_online->getsantri($id);
		$data['kodeunik'] = $this->m_daftar_online->buat_kode();
		$data['username'] = $this->session->userdata('username');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['level'] = $this->session->userdata('level');
		$this->load->view('pendaftar/templates/header', $data);
		$this->load->view('pendaftar/lihat_santri', $data);
		$this->load->view('pendaftar/templates/footer', $data);
	}
	public function daftar()
	{
		error_reporting(0);
		$this->load->model('m_daftar_online');
		$data['data'] = $this->m_daftar_online->tampil_data();
		$data['kodeunik'] = $this->m_daftar_online->buat_kode();
		$data['username'] = $this->session->userdata('username');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['level'] = $this->session->userdata('level');
		$this->load->view('pendaftar/templates/header', $data);
		$this->load->view('pendaftar/daftar', $data);
		$this->load->view('pendaftar/templates/footer', $data);
	}
	public function seleksi()
	{
		$data['query'] = $this->m_daftar_online->tampil_data();
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['user_id'] = $this->session->userdata('user_id');
		$this->load->view('pendaftar/templates/header', $data);
		$this->load->view('pendaftar/seleksi', $data);
		$this->load->view('pendaftar/templates/footer', $data);
	}
	public function panduan()
	{
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['query'] = $this->m_daftar_online->panduan();
		$data['user_id'] = $this->session->userdata('user_id');
		$this->load->view('pendaftar/templates/header', $data);
		$this->load->view('pendaftar/panduan', $data);
		$this->load->view('pendaftar/templates/footer', $data);
	}
	public function inputbiodata()
	{
			$this->load->model('M_daftar_online');
			$this->load->model('M_dashboard', 'm_dashboard', TRUE);

			// $datasantri = array(
			// 'id_santri' => $this->input->post('id_santri'),
			// 'id_wali' => $this->input->post('id_wali'),
			// 'user_id' => $this->input->post('user_id'),
			// 'no_pendaftaran' => $this->input->post('no_pendaftaran'),
			// 'nama_santri' => $this->input->post('nama_santri'),
			// 'alamat_santri' => $this->input->post('alamat_santri'),
			// 'tmp_lahir' => $this->input->post('tmp_lahir'),
			// 'tgl_lahir' => $this->input->post('tgl_lahir'),
			// 'gender' => $this->input->post('gender'),
			// 'status' => $this->input->post('status'),
			// 'status_daftar' => $this->input->post('status_daftar'),
			// 'telp_santri' => $this->input->post('telp_santri'),
			// 'pekerjaan' => $this->input->post('pekerjaan')
			// );
			// // ayah		
			// $datawali = array(
			// 'nama_ayah' => $this->input->post('nama_ayah'),
			// 'alamat_ayah' => $this->input->post('alamat_ayah'),
			// 'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
			// 'telp_ayah' => $this->input->post('telp_ayah'),
			// // ibu
			// 'nama_ibu' => $this->input->post('nama_ibu'),
			// 'alamat_ibu' => $this->input->post('alamat_ibu'),
			// 'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
			// 'telp_ibu' => $this->input->post('telp_ibu')
			// );
			// 	// 	// user
			// $datauser = array(
			// 'level' => $this->input->post('level'),
			// 'nama' => $this->input->post('nama'),
			// 'username' => $this->input->post('username'),
			// 'password' => md5($this->input->post('password')),
			// 'email' => $this->input->post('email')
			// );

	  //       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
	  //       $config['upload_path'] = './uploads/foto_user'; //path folder
	  //       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	  //       $config['max_size'] = '2048'; //maksimum besar file 2M
	  //       $config['max_width']  = '1288'; //lebar maksimum 1288 px
	  //       $config['max_height']  = '768'; //tinggi maksimu 768 px
	  //       $config['file_name'] = $nmfile; //nama yang terupload nantinya
	  //       $this->upload->initialize($config);

			// if($_FILES['userfile']['name'])
   //      {
   //          if (!$this->upload->do_upload('userfile'))
   //          {
   //          	$error = array('error' => $this->upload->display_errors());
   //      		$this->session->set_flashdata('error', 'Data tidak mendukung.');
   //      		redirect('pendaftar/C_pendaftar','refresh');
			// }else {		
			// 	// $upload_data = $this->upload->data();
   //              // $data['userfile'] = $upload_data['file_name'];
   //              // $data = $_FILES['userfile']['name'];
	  //           //file is uploaded successfully
			// 	//now get the file uploaded data 
			// 	$upload_data = $this->upload->data();
 
			// 	//get the uploaded file name
			// 	$data['userfile'] = $upload_data['file_name'];
   //          }	
 
				//store pic data to the db
			if ($this->M_daftar_online->buatbiodata()) {
				$this->session->set_flashdata('success', 'Data berhasil diunggah.');
				redirect('pendaftar');
			} else {
				$this->session->set_flashdata('error', 'Salah satu data gagal ditambahkan. Silahkan coba lagi.');
				redirect('pendaftar/daftar','refresh');
			}

			// }
	}
	public function biodata($id)
		{
		$this->load->model('M_daftar_online');
		$data['query'] = $this->M_daftar_online->sudahdaftar($id);
		$data['user_id'] = $this->session->userdata('user_id');
		$data['id_santri'] = $this->session->userdata('id_santri');
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$this->load->view('pendaftar/templates/header', $data);
		$this->load->view('pendaftar/biodata', $data);
		$this->load->view('pendaftar/templates/footer', $data);
	}
	public function edit($id){
	$this->load->model('M_daftar_online', 'm_daftar_online', TRUE);
		if (isset($_POST['edit'])) {
			if ($this->m_daftar_online->update($id)) {
				$this->session->set_flashdata('success', 'Data berhasil dirubah');
						$data['user_id'] = $this->session->userdata('user_id');
		$data['level'] = $this->session->userdata('level');
		$data['username'] = $this->session->userdata('username');
		$this->load->view('pendaftar/templates/header', $data);
		$this->load->view('pendaftar/edit_biodata_santri', $data);
		$this->load->view('pendaftar/templates/footer', $data);
			}
			else {
				$this->session->set_flashdata('error', 'Data gagal dirubah. Silahkan coba lagi.');
						$data['user_id'] = $this->session->userdata('user_id');
		$data['level'] = $this->session->userdata('level');
		$data['username'] = $this->session->userdata('username');
		$this->load->view('pendaftar/templates/header', $data);
		$this->load->view('pendaftar/edit_biodata_santri', $data);
		$this->load->view('pendaftar/templates/footer', $data);
			}
			redirect('pendaftar/C_pendaftar','refresh');
		}
		
		$data['santri'] = $this->m_daftar_online->getsantri($id);
		$data['user_id'] = $this->session->userdata('user_id');
		$data['level'] = $this->session->userdata('level');
		$data['username'] = $this->session->userdata('username');
		$this->load->view('pendaftar/templates/header', $data);
		$this->load->view('pendaftar/edit_biodata_santri', $data);
		$this->load->view('pendaftar/templates/footer', $data);
	
	}
	public function update($id)
	{
		if ($this->input->post('edit')) {
			$this->input->post('id_santri');
			$this->M_daftar_online->update($id);
			redirect('pendaftar/','refresh');
		} else {
			redirect('pendaftar/edit/'.$id,'refresh');
		}
		
	}
	public function profil($id)
		{
		$data['profil'] = $this->m_daftar_online->getprofil($id);
		$data['nama'] = $this->session->userdata('nama');
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['user_id'] = $this->session->userdata('user_id');
		$this->load->view('pendaftar/templates/header', $data);
		$this->load->view('pendaftar/profil', $data);
		$this->load->view('pendaftar/templates/footer', $data);
	}

	public function jadwal_ngaji()
		{
		$data['query'] = $this->m_daftar_online->ngaji();
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['user_id'] = $this->session->userdata('user_id');
		$this->load->view('pendaftar/templates/header', $data);
		$this->load->view('pendaftar/jadwal_ngaji', $data);
		$this->load->view('pendaftar/templates/footer', $data);
	}
	
	public function jadwal()
		{
		$data['query'] = $this->m_daftar_online->jadwal();
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['user_id'] = $this->session->userdata('user_id');
		$this->load->view('pendaftar/templates/header', $data);
		$this->load->view('pendaftar/jadwal', $data);
		$this->load->view('pendaftar/templates/footer', $data);
	}

	public function biaya()
		{
		$data['biaya'] = $this->m_daftar_online->biaya();
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['user_id'] = $this->session->userdata('user_id');
		$this->load->view('pendaftar/templates/header', $data);
		$this->load->view('pendaftar/biaya', $data);
		$this->load->view('pendaftar/templates/footer', $data);
	}
	public function berkas()
		{
		// $data['jadwal'] = $this->m_daftar_online->getjadwal();
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['user_id'] = $this->session->userdata('user_id');
		$this->load->view('pendaftar/templates/header', $data);
		$this->load->view('pendaftar/berkas', $data);
		$this->load->view('pendaftar/templates/footer', $data);
	}
	public function edit_profil($id)
	{
		if (isset($_POST['edit'])) {
			if ($this->m_daftar_online->updateprofil($id)) {
				$this->session->set_flashdata('success', 'Data berhasil dirubah');
				redirect('pendaftar/C_pendaftar/profil/'.$id,'refresh');
			}
			else {
				$this->session->set_flashdata('error', 'Data gagal dirubah. Silahkan coba lagi.');
				redirect('pendaftar/edit_profil/'.$id,'refresh');
			}
			redirect('pendaftar/C_pendaftar/profil/'.$id,'refresh');
		}
		
		$data['profil'] = $this->m_daftar_online->getprofil($id);
		$data['level'] = $this->session->userdata('level');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['username'] = $this->session->userdata('username');
		$this->load->view('pendaftar/templates/header', $data);
		$this->load->view('pendaftar/edit_profil', $data);
		$this->load->view('pendaftar/templates/footer', $data);
	}

	public function upload_berkas()
	{
		$this->load->library('upload');
		$this->load->model('M_daftar_online');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './uploads/berkas'; //path folder
        $config['allowed_types'] = '*'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '2048'; //maksimum besar file 2M
        $config['max_width']  = '1288'; //lebar maksimum 1288 px
        $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya
        $this->upload->initialize($config);
		// $data['id_berkas'] = $this->input->post('id_berkas');
		$data = array(
      'deskripsi'=>$this->input->post('input_deskripsi'),
      'nama_file' => $upload['file']['file_name'],
      'ukuran_file' => $upload['file']['file_size'],
      'tipe_file' => $upload['file']['file_type']
    );
        
        if($_FILES['input_gambar']['name'])
        {
            if (!$this->upload->do_upload('input_gambar'))
            {$error = array('error' => $this->upload->display_errors());
        		$this->session->set_flashdata('error', 'Data tidak mendukung.');
        		redirect('pendaftar/berkas','refresh');
			}else{
 
				//file is uploaded successfully
				//now get the file uploaded data 
				$upload_data = $this->upload->data();
 
				//get the uploaded file name
				$data['input_gambar'] = $upload_data['file_name'];
 
				//store pic data to the db
				$this->load->model('M_upload');
				$this->M_upload->save($upload);
				$this->session->set_flashdata('success', 'Data berhasil diunggah.');
				redirect('pendaftar/berkas');
			}
        }
    }
	
		public function laporan_pendaftar($id){
		$data = $this->M_daftar_online->getsantri($id);
		$this->load->view('laporan/v_pendaftar', ['data'=>$data]);		
	}
	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('password');
		session_destroy();
		redirect('auth');
	}
}
/* End of file C_pendaftar.php */
/* Location: ./application/controllers/panitia/C_pendaftar.php */