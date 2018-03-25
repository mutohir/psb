<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Login extends CI_Model {

	public function is_logged_in($username,$password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$this->db->from('user');
		$query = $this->db->get();
		if ($query->num_rows()==1) {
			return $query->result();
		}else{
			return FALSE;
		}
	}
	
	public function tambahakun()
		{
			$data = array(
			'username' => $this->input->post('username'), 
			'password' => md5($this->input->post('password')),
			'email' => $this->input->post('email'),
			'level' => $this->input->post('level')
		);
			$this->db->insert('user', $data);
		}

	// function getLoginData($user,$pass)
	// {
	// 	$user = $user;
	// 	$pass = MD5($pass);
	// 	$query = $this->db->get_where('user', array('username' => $user, 'password' => $pass));

	// 	if (count($query->result()) > 0) {
	// 		foreach ($query->result() as $q) {
	// 			foreach ($query->result() as $qu) {
	// 				$sess_data['logged_in'] = TRUE;
	// 				$sess_data['id_user'] = $qu->id_user;
	// 				$sess_data['username'] = $qu->username;
	// 				$sess_data['password'] = $qu->password;
	// 				$sess_data['level'] = $qu->level;
					
	// 				$this->session->set_userdata($sess_data);
	// 			}
	// 	if ($cek->level == 'admin') {
	// 		$this->session->set_flashdata('success', 'Login Berhasil!');
	// 		redirect('admin/index');
	// 	}
	// 	elseif ($cek->level == 'panitia') {
	// 		$this->session->set_flashdata('success', 'Login Berhasil!');
	// 		redirect('panitia/index');
	// 	}
	// 	}
	// 	else{
	// 		$this->session->set_flashdata('error', 'username atau password yang anda masukkan salah.');
	// 		redirect('login')
	// 	}
	// 	}
	// }

}

/* End of file M_Login.php */
/* Location: ./application/models/M_Login.php */