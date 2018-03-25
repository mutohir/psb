<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_dashboard extends CI_Model {
	
	//Bagian Santri
	public function fetch_data()
	{
		$this->db->select('*');
		$this->db->from('data_santri');
		$this->db->order_by("id_santri", "DESC");
		$this->db->join('data_wali', 'data_wali.id_wali = data_santri.id_wali');
		$this->db->join('user', 'user.user_id = data_santri.user_id');
		$query = $this->db->get();
		return $query;
	}
	public function getsantri($id)
	{
		$this->db->select('*');
		$this->db->where('id_santri', $id);
		$this->db->from('data_santri');
		$this->db->join('data_wali', 'data_wali.id_wali = data_santri.id_wali');
		$this->db->join('user', 'user.user_id = data_santri.user_id');
		$query = $this->db->get();
		return $query->row();
	}
	public function add_santri($datasantri,$datawali,$datauser)
	{
		
		$this->db->insert('data_wali', $datawali);
		$id_wali = $this->db->insert_id();
		$datasantri['id_wali'] = $id_wali;

		$this->db->insert('user', $datauser);
		$user_id = $this->db->insert_id();
		$datasantri['user_id'] = $user_id;

		$this->db->insert('data_santri', $datasantri);
		$id_santri = $this->db->insert_id();
		return $insert_id = $this->db->insert_id();
	}
	function delete_santri($id)
	{
	    $this->db->delete('data_santri', array('id_santri' => $id));
		$this->db->delete('data_wali', array('id_wali' => $id));
		$this->db->delete('user', array('user_id' => $id));
	}
	public function updatesantri($id){
	$update_santri = array(
		'user_id'=>$this->input->post('user_id'),
		'no_pendaftaran'=>$this->input->post('no_pendaftaran'),
		'nama_santri'=>$this->input->post('nama_santri'),
		'alamat_santri'=>$this->input->post('alamat_santri'),
		'tmp_lahir'=>$this->input->post('tmp_lahir'),
		'tgl_lahir'=>$this->input->post('tgl_lahir'),
		'gender'=>$this->input->post('gender'),
		'status'=>$this->input->post('status'),
		'status_daftar'=>$this->input->post('status_daftar'),
		'telp_santri'=>$this->input->post('telp_santri'),
		'pekerjaan'=>$this->input->post('pekerjaan'),
		// 'userfile'=>$image_name,
		);
	$this->db->where('id_santri', $id);
	$this->db->update('data_santri', $update_santri,array('id_santri'=>$id));
	return $id;
	// $update_user = array(	
	// 	'username'=>$this->input->post('username'),
	// 	'password'=>md5($this->input->post('password')),
	// 	'email'=>$this->input->post('email'),
	// 	'level'=>$this->input->post('level'),
	// 	);
	// $this->db->where('user_id', $id);
	// $this->db->update('user', $update_user,array('user_id'=>$id));

	// $update_wali = array(
	// 	'nama_ayah'=> $this->input->post('nama_ayah'),
	// 	'alamat_ayah'=> $this->input->post('alamat_ayah'),
	// 	'pekerjaan_ayah'=> $this->input->post('pekerjaan_ayah'),
	// 	'telp_ayah'=> $this->input->post('telp_ayah'),
	// 	// ibu
	// 	'nama_ibu'=> $this->input->post('nama_ibu'),
	// 	'alamat_ibu'=> $this->input->post('alamat_ibu'),
	// 	'pekerjaan_ibu'=> $this->input->post('pekerjaan_ibu'),
	// 	'telp_ibu'=> $this->input->post('telp_ibu')
	// 	);
	// $this->db->where('id_wali', $id_wali);
	// $this->db->update('data_wali', $update_wali,array('id_wali'=>$id_wali));
	// 	return $id_wali;
	
	}

	//Bagian Petugas

	public function get_all_petugas()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->order_by("user_id", "DESC");
		$this->db->where('level','petugas');
		$query = $this->db->get();
		return $query->result();
	}
	public function add_petugas()
	{
		$add_petugas = array(
		'nama'=>$this->input->post('nama'),
		'username'=>$this->input->post('username'),
		'email'=>$this->input->post('email'),
		'password'=>md5($this->input->post('password')),
		'level'=>$this->input->post('level')
		);
		$this->db->insert('user', $add_petugas);
		$id = $this->db->insert_id();
		return $id;
	}
	public function getpetugas($id)
	{
		$this->db->select('*');
		$this->db->where('user_id', $id);
		// $this->db->where('level','petugas');
		$this->db->from('user');
		$query = $this->db->get();
		return $query->row();
	}
	function delete_petugas($id)
	{
	$this->db->where('user_id', $id);
	$this->db->delete('user');
	}
	public function updatepetugas($id)
	{
		$update_petugas = array(
		'nama'=>$this->input->post('nama'),
		'username'=>$this->input->post('username'),
		'email'=>$this->input->post('email'),
		'password'=>md5($this->input->post('password')),
		'level'=>$this->input->post('level')
		);
		$this->db->where('user_id', $id);
		$this->db->update('user', $update_petugas,array('user_id'=>$id));
		return $id;
	}

	// Bagian Pendaftar

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

	public function get_all_pendaftar()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->order_by("user_id", "DESC");
		$this->db->where('level','pendaftar');
		$query = $this->db->get();
		return $query->result();
	}
	public function getpendaftar($id)
	{
		$this->db->select('*');
		$this->db->where('user_id', $id);
		// $this->db->where('level','petugas');
		$this->db->from('user');
		$query = $this->db->get();
		return $query->row();
	}
	public function add_pendaftar($data)
	{
		$add_pendaftar = array(
		'nama'=>$this->input->post('nama'),
		'username'=>$this->input->post('username'),
		'email'=>$this->input->post('email'),
		'password'=>md5($this->input->post('password')),
		'level'=>$this->input->post('level')
		);
		$this->db->insert('user', $add_pendaftar);
		$id = $this->db->insert_id();
		return $id;
	}
	function delete_pendaftar($id)
	{
	$this->db->where('user_id', $id);
	$this->db->delete('user');
	}
	public function updatependaftar($id)
	{
		$update_pendaftar = array(
		'username'=>$this->input->post('username'),
		'email'=>$this->input->post('email'),
		'password'=>md5($this->input->post('password')),
		'level'=>$this->input->post('level')
		);
		$this->db->where('user_id', $id);
		$this->db->update('user', $update_pendaftar,array('user_id'=>$id));
		return $id;
	}
	public function panduan()
	{
		$this->db->select('*');
		$this->db->from('panduan');
		$panduan = $this->db->get();
		return $panduan->result();
	}
	public function statistik()
	{
		$this->db->select('*');
		$this->db->where('alamat_santri');
		$this->db->from('data_santri');
		$statisik = $this->db->get();
		return $statisik->result();
	}
	public function biaya()
	{
		$this->db->select('*');
		$this->db->from('biaya');
		$biaya = $this->db->get();
		return $biaya->result();
	}
	public function updatebiaya($id)
	{
		$biaya = array(
		'kategori_biaya'=>$this->input->post('kategori_biaya'),
		'alokasi'=>$this->input->post('alokasi'),
		'jumlah'=>$this->input->post('jumlah'),
		'total'=>$this->input->post('total')
		);
		$this->db->where('id_biaya', $id);
		$this->db->update('biaya', $biaya,array('id_biaya'=>$id));
		return $id;
	}
	public function getbiaya($id)
	{
		$this->db->select('*');
		$this->db->where('id_biaya', $id);
		// $this->db->where('level','petugas');
		$this->db->distinct('kategori_biaya');
		$this->db->from('biaya');
		$this->db->group_by('kategori_biaya');
		$query = $this->db->get();
		return $query->row();
	}
	public function add_biaya()
	{
		$biaya = array(
		'kategori_biaya'=>$this->input->post('kategori_biaya'),
		'jumlah'=>$this->input->post('jumlah'),
		'alokasi'=>$this->input->post('alokasi'),
		'total'=>$this->input->post('total')
		);
		$this->db->insert('biaya', $biaya);
		$id = $this->db->insert_id();
		return $id;
	}
	public function add_panduan()
	{
		$panduan = array(
		'judul_panduan'=>$this->input->post('judul_panduan'),
		'isi_panduan'=>$this->input->post('isi_panduan')
		);
		$this->db->insert('panduan', $panduan);
		$id = $this->db->insert_id();
		return $id;
	}
	public function updatepanduan($id)
	{
		$panduan = array(
		'judul_panduan'=>$this->input->post('judul_panduan'),
		'isi_panduan'=>$this->input->post('isi_panduan')
		);
		$this->db->where('id_panduan', $id);
		$this->db->update('panduan', $panduan,array('id_panduan'=>$id));
		return $id;
	}
	public function getpanduan($id)
	{
		$this->db->select('*');
		$this->db->where('id_panduan', $id);
		$this->db->from('panduan');
		$query = $this->db->get();
		return $query->row();
	}
	public function delete_panduan($id)
	{
		$this->db->where('id_panduan', $id);
		$this->db->delete('panduan');
	}
	public function delete_biaya($id)
		{
			$this->db->where('id_biaya', $id);
			$this->db->delete('biaya');
		}

	//Bagian Jadwal

	public function jadwal()
	{
		$this->db->select('*');
		$this->db->from('jadwal');
		$this->db->order_by('tgl_akhir', 'asc');
		$query = $this->db->get();
		return $query->result();
	}
	public function add_jadwal()
	{
		$jadwal = array(
		'nama_kegiatan'=>$this->input->post('nama_kegiatan'),
		'tgl_awal'=>$this->input->post('tgl_awal'),
		'tgl_akhir'=>$this->input->post('tgl_akhir')
		);
		$this->db->insert('jadwal', $jadwal);
		$id = $this->db->insert_id();
		return $id;
	}
	public function add_jadwal_ngaji()
	{
		$ngaji = array(
		'kelas'=>$this->input->post('kelas'),
		'waktu'=>$this->input->post('waktu'),
		'kitab'=>$this->input->post('kitab'),
		'ustad'=>$this->input->post('ustad'),
		'tempat'=>$this->input->post('tempat')
		);
		$this->db->insert('ngaji', $ngaji);
		$id = $this->db->insert_id();
		return $id;
	}
	public function updatejadwal($id)
	{
		$jadwal = array(
		'nama_kegiatan'=>$this->input->post('nama_kegiatan'),
		'tgl_awal'=>$this->input->post('tgl_awal'),
		'tgl_akhir'=>$this->input->post('tgl_akhir')
		);
		$this->db->where('id_jadwal', $id);
		$this->db->update('jadwal', $jadwal,array('id_jadwal'=>$id));
		return $id;
	}
	public function ngaji()
	{
		$this->db->select('*');
		$this->db->from('ngaji');
		$query = $this->db->get();
		return $query->result();
	}
	public function updatengaji($id)
	{
		$ngaji = array(
		'kelas'=>$this->input->post('kelas'),
		'waktu'=>$this->input->post('waktu'),
		'kitab'=>$this->input->post('kitab'),
		'ustad'=>$this->input->post('ustad'),
		'tempat'=>$this->input->post('tempat')
		);
		$this->db->where('id_ngaji', $id);
		$this->db->update('ngaji', $ngaji,array('id_ngaji'=>$id));
		return $id;
	}
	public function getngaji($id)
	{
		$this->db->select('*');
		$this->db->where('id_ngaji', $id);
		// $this->db->where('level','petugas');
		$this->db->from('ngaji');
		$ngaji = $this->db->get();
        return $ngaji->result();
	}
	public function getjadwal($id)
	{
		$this->db->select('*');
		$this->db->where('id_jadwal', $id);
		// $this->db->where('level','petugas');
		$this->db->from('jadwal');
		$query = $this->db->get();
		return $query->row();
	}
	public function delete_jadwal($id)
	{
		$this->db->where('id_jadwal', $id);
		$this->db->delete('jadwal');
	}

	public function delete_jadwal_ngaji($id)
	{
		$this->db->where('id_ngaji', $id);
		$this->db->delete('ngaji');
	}

	// Bagian Profil

	public function getprofil($id)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_id', $id);
		$query = $this->db->get();
		return $query->row();
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
	

	// Bagian Upload
	public function do_upload($id)
	{
		$data = array('foto' => $this->input->post('foto'));
			$this->db->where('id_santri', $id);
		$query = $this->db->update('data_santri', $data);
		if ($query) {
				redirect('admin/C_admin','refresh');
			}else {
				echo "Gagal Upload Gambar";
			}
		return $id;
	}
		// public function do_upload()
	// {
						// 	$add_berkas = array(
	//         'foto_3x4'=>$this->input->post('foto_3x4'),
											// 		'fc_skhun'=>$this->input->post('fc_skhun'),
											// 		'fc_ijazah'=>$this->input->post('fc_ijazah'),
											// 		'fc_akte'=>$this->input->post('fc_akte')
											// 		);
						// 	    $config['upload_path']          = './uploads/';
	//         $config['allowed_types']        = 'gif|jpg|png';
	//         $config['max_size']             = '100';
	//         $config['max_width']            = '1024';
	//         $config['max_height']           = '768';
	//         // $this->load->library('upload', $config);
						//         	$this->upload->initialize($config);
	
						// 	$this->db->insert('berkas', $add_berkas);
						// 	$id = $this->db->insert_id();
						// 	return $id;
	// }

	// Bagian Fitur
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
/* End of file M_dashboard.php */
/* Location: ./application/models/M_dashboard.php */