<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {

	public function index()
		{
			$data = $this->db->from('user');
			$this->load->view('masuk', $data);
		}	
	public function tambahakun()
		{
			$data = array(
			'username' => $this->input->post('username'), 
			'password' => $this->input->post('password'),
			'email' => $this->input->post('email'),
			'level' => $this->input->post('level')
		);
		$this->db->insert('user', $data);
		}

}

/* End of file M_home.php */
/* Location: ./application/models/M_home.php */