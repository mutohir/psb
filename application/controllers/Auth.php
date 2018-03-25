<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$this->load->view('v_login');
	}

	public function cek_login(){
		
		$data = array(
			'username' => $this->input->post('username', TRUE),
			'username' => $this->input->post('username', TRUE),
			'password' => md5($this->input->post('password', TRUE))
			);
		$this->load->model('Model_user'); // load model_user
		$hasil = $this->Model_user->cek_user($data);

		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['logged_in'] = 'Sudah Loggin';
				$sess_data['user_id'] = $sess->user_id;
				$sess_data['username'] = $sess->username;
				$sess_data['email'] = $sess->email;
				$sess_data['level'] = $sess->level;
				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('level')=='admin') {
				redirect('admin/C_admin');
			}
			elseif ($this->session->userdata('level')=='petugas') {
				redirect('petugas/C_petugas');
			}	
			elseif ($this->session->userdata('level')=='pendaftar') {
				redirect('pendaftar/C_pendaftar');
			}		
		}
		else {
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}
	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */