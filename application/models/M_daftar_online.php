<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_daftar_online extends CI_Model {

	public function buatbiodata()
		{
			// santri
		$datasantri = array(
		'id_santri' => $this->input->post('id_santri'),
		'id_wali' => $this->input->post('id_wali'),
		'user_id' => $this->input->post('user_id'),
		'no_pendaftaran' => $this->input->post('no_pendaftaran'),
		'nama_santri' => $this->input->post('nama_santri'),
		'alamat_santri' => $this->input->post('alamat_santri'),
		'tmp_lahir' => $this->input->post('tmp_lahir'),
		'tgl_lahir' => $this->input->post('tgl_lahir'),
		'gender' => $this->input->post('gender'),
		'status' => $this->input->post('status'),
		'status_daftar' => $this->input->post('status_daftar'),
		'telp_santri' => $this->input->post('telp_santri'),
		'pekerjaan' => $this->input->post('pekerjaan'),
		// 'userfile' => $data
		);
	// ayah		
		$datawali = array(
		'nama_ayah' => $this->input->post('nama_ayah'),
		'alamat_ayah' => $this->input->post('alamat_ayah'),
		'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
		'telp_ayah' => $this->input->post('telp_ayah'),
		// ibu
		'nama_ibu' => $this->input->post('nama_ibu'),
		'alamat_ibu' => $this->input->post('alamat_ibu'),
		'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
		'telp_ibu' => $this->input->post('telp_ibu'),
		);
		// user
		// $datauser = array(
		// 'nama' => $this->input->post('nama'),
		// 'username' => $this->input->post('username'),
		// 'level' => $this->input->post('level'),
		// 'password' => md5($this->input->post('password')),
		// 'email' => $this->input->post('email'),
		// );

			$this->db->insert('data_wali', $datawali);
			$id_wali = $this->db->insert_id();
			$datasantri['id_wali'] = $id_wali;

			// $this->db->insert('user', $datauser);
			// $user_id = $this->db->insert_id();
			// $datasantri['user_id'] = $this->db->insert_id('user');

			$this->db->insert('data_santri', $datasantri);
			$id_santri = $this->db->insert_id();
			$id = $this->db->insert_id();
			return $id;
		}

	public function tampil_data()
	{
		$level = $this->session->userdata('level');
		$user_id = $this->session->userdata('user_id');
		$id_santri = $this->sudahdaftar($user_id)->id_santri;
		// Query for Selection data
		$this->db->select('*');
		$this->db->from('data_santri');
		$this->db->order_by("id_santri", "DESC");
		$this->db->join('data_wali', 'data_wali.id_wali = data_santri.id_wali');
		$this->db->join('user', 'user.user_id = data_santri.user_id');			

		if ($level == "pendaftar") {
			$this->db->where('id_santri', $id_santri);
		} 

		$query = $this->db->get();
		return $query->result();

	}
	public function getsantri($id)
	{
		$this->db->select('*');
		$this->db->from('data_santri');
	    $this->db->join('data_wali', 'data_wali.id_wali = data_santri.id_wali','left');
		$this->db->join('user', 'user.user_id = data_santri.user_id','left');
		$this->db->where('id_santri', $id);
		$id = $this->db->get();
		return $id->row();
	}

	public function sudahdaftar($id)
	{
		$this->db->select('*');
		$this->db->where('user_id', $id);
		$this->db->from('data_santri');
		$query = $this->db->get();
		return $query->row();
	}
	public function getprofil($id)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_id', $id);
		$query = $this->db->get();
		return $query->row();
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

	public function updateprofil($id)
	{
		$update_profil = array(
		'nama'=>$this->input->post('nama'),
		'username'=>$this->input->post('username'),
		'email'=>$this->input->post('email'),
		// 'password'=>md5($this->input->post('password')),
		'level'=>$this->input->post('level')
		);
		$this->db->where('user_id', $id);
		$this->db->update('user', $update_profil,array('user_id'=>$id));
		return $id;
	}

	public function jadwal()
	{
		$this->db->select('*');
		$this->db->from('jadwal');
		$query = $this->db->get();
		return $query->result();
	}
	public function biaya()
	{
		$this->db->select('*');
		$this->db->from('biaya');
		$biaya = $this->db->get();
		return $biaya->result();
	}
	public function ngaji()
	{
		$this->db->select('*');
		$this->db->from('ngaji');
		$query = $this->db->get();
		return $query->result();
	}

	public function panduan()
	{
		$this->db->select('*');
		$this->db->from('panduan');
		$query = $this->db->get();
		return $query->result();
	}

	public function update($id){
	$update_santri = array(
		'no_pendaftaran'=>$this->input->post('no_pendaftaran'),
		'nama_santri'=>$this->input->post('nama_santri'),
		'alamat_santri'=>$this->input->post('alamat_santri'),
		'tmp_lahir'=>$this->input->post('tmp_lahir'),
		'tgl_lahir'=>$this->input->post('tgl_lahir'),
		'gender'=>$this->input->post('gender'),
		'status'=>$this->input->post('status'),
		'status_daftar'=>$this->input->post('status_daftar'),
		'telp_santri'=>$this->input->post('telp_santri'),
		'pekerjaan'=>$this->input->post('pekerjaan')
	);
	$this->db->where('id_santri', $id);
	$this->db->update('data_santri', $update_santri,array('id_santri'=>$id));

	$update_wali = array(
		'nama_ayah'=> $this->input->post('nama_ayah'),
		'alamat_ayah'=> $this->input->post('alamat_ayah'),
		'pekerjaan_ayah'=> $this->input->post('pekerjaan_ayah'),
		'telp_ayah'=> $this->input->post('telp_ayah'),
		// ibu
		'nama_ibu'=> $this->input->post('nama_ibu'),
		'alamat_ibu'=> $this->input->post('alamat_ibu'),
		'pekerjaan_ibu'=> $this->input->post('pekerjaan_ibu'),
		'telp_ibu'=> $this->input->post('telp_ibu')
	);
	$this->db->where('id_wali', $id);
	$this->db->update('data_wali', $update_wali,array('id_wali'=>$id));

		return $id;

	// $this->db->trans_start();
	
	}
	function ambil_gambar(){
		$all_pics = $this->db->get('berkas');
		$this->db->join('data_santri', 'data_santri.id_santri = berkas.id_berkas');
		return $all_pics->result();
	}

	function get_insert($data){
       $this->db->insert('berkas', $data);
       return TRUE;
    }

	function buat_kode()   {
	$this->db->select('RIGHT(data_santri.id_santri,2) as kode', FALSE);
	$this->db->order_by('id_santri','DESC');
	$this->db->limit(1);
	$query = $this->db->get('data_santri');      //cek dulu apakah ada sudah ada kode di tabel.
	if($query->num_rows() <> 0){
	//jika kode ternyata sudah ada.
	$data = $query->row();
	$kode = intval($data->kode) + 1;
	}
	else{
	//jika kode belum ada
	$kode = 1;
	}
	$kodemax = str_pad($kode, 2, "0", STR_PAD_LEFT);
	$kodejadi = "AM-18020".$kodemax;
	return $kodejadi;
	}
}

/* End of file M_daftar_online.php */
/* Location: ./application/models/M_daftar_online.php */