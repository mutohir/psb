<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Akun extends CI_Model {

public function tambah($data)
	{
		$this->db->insert('user',$data);
		// $id = $this->db->insert_id();
		// return $id;
	}
public function check_user_exist($username)
	{
			$this->db->where('username', $username);	
			$this->db->from('user');
			$query = $this->db->get();
			if ($query->num_rows() > 0) {
				return $query->result();
			}else {
				return $query->result();
				return false;
			}
	}
}

/* End of file M_Akun.php */
/* Location: ./application/models/M_Akun.php */