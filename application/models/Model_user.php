<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model {

		public function cek_user($data) {
			$query = $this->db->get_where('user', $data);
			return $query;
		}

	}

/* End of file Model_user.php */
/* Location: ./application/models/Model_user.php */