<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller {
	public function index()
	{
		$data['exist'] = '';
		$this->load->view('daftar_akun',$data);
	}

	public function tambah()
	{
		$data = array(
		'nama' => $this->input->post('nama'), 
		'username' => $this->input->post('username'), 
		'password' => md5($this->input->post('password')),
		'email' => $this->input->post('email'),
		'level' => $this->input->post('level')
		);

		$this->load->model('M_Akun');

		if ($this->M_Akun->check_user_exist($data['username'])) {
			$data['exist'] = 'Username sudah ada, silahkan gunakan username lain.';
			$this->load->view('daftar_akun', $data);
		} else {
			$this->M_Akun->tambah($data);
			$this->session->set_flashdata('success', 'Akun berhasil dibuat. Silahkan masuk dengan akun Anda.');
			redirect('auth','refresh');
		}

		// if (isset($_POST['add'])) {
		// 	if ($this->M_Akun->tambah()) {
		// 		$this->session->set_flashdata('success', 'Akun berhasil dibuat. Silahkan masuk dengan akun Anda.');
		// 		redirect('Auth','refresh');
		// 	}
		// 	else {
		// 		$this->session->set_flashdata('error', 'Akun gagal dibuat. Silahkan coba lagi.');
				
		// 		$this->load->view('daftar_akun', $data);
		// 	}
		// 	redirect('Auth','refresh');
		// }		
	}
}

/* End of file Akun.php */
/* Location: ./application/controllers/Akun.php */