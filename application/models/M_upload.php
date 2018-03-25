<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_upload extends CI_Model {

public function view(){
    $level = $this->session->userdata('level');
    $user_id = $this->session->userdata('user_id');
    $id_berkas = $this->ambilid($user_id)->id_berkas;
    // Query for Selection data
    $this->db->select('*');
    $this->db->from('berkas');
    $this->db->order_by("id_berkas", "DESC");
    $this->db->join('user', 'berkas.user_id = user.user_id');

    if ($level == "pendaftar") {
      $this->db->where('id_berkas', $id_berkas);
    }
    $query = $this->db->get();
    return $query->result();
}
public function getberkas()
  {
    $this->db->select('*');
    $this->db->from('berkas');
    $this->db->order_by("id_berkas", "DESC");
    $this->db->join('user', 'user.user_id = berkas.user_id');
    $query = $this->db->get();
    return $query->result();
  }
 public function ambilid($user_id)
  {
    $this->db->select('*');
    $this->db->from('berkas');
    $this->db->where('user_id', $user_id);
    $query = $this->db->get();
    return $query->row();
  }

  // Fungsi untuk melakukan proses upload file
  public function upload(){
    $config['upload_path']   = './uploads/berkas';
    $config['allowed_types'] = 'jpg|png|jpeg|pdf';
    $config['max_size']  = '2048';
    $config['remove_space'] = TRUE;
  
	$this->upload->initialize($config);
    // $this->load->library('upload', $config); // Load konfigurasi uploadnya
    if($this->upload->do_upload()){ // Lakukan upload dan Cek jika proses upload berhasil
      // Jika berhasil :
      $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
      return $return;
    }else{
      // Jika gagal :
      $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
      return $return;
    }
  }
  // Fungsi untuk menyimpan data ke database
  public function save($data){
    // $data = array(
    //   'user_id'=>$this->input->post('user_id'),
    //   'deskripsi'=>$this->input->post('input_deskripsi'),
    //   'nama_file' => $upload['file']['file_name'],
    //   'skhun' => $upload['file']['file_name'],
    //   'ukuran_file' => $upload['file']['file_size'],
    //   'tipe_file' => $upload['file']['file_type']
    // );
      
      $this->db->insert('berkas', $data);
      $id_berkas = $this->db->insert_id();
      $id = $this->db->insert_id();
      return $id;
  }
  // public function getberkas($id)
  // {
	 //  	$this->db->select('*');
		// $this->db->where('id_berkas', $id);
		// $this->db->from('berkas');
		// $berkas = $this->db->get();
		// return $berkas->row();
  // }
  // public function updateberkas($id)
  // {
  // 	$data = array(
		// 'deskripsi'=>$this->input->post('input_deskripsi'),
	 //    'nama_file' => $upload['file']['file_name'],
	 //      'ukuran_file' => $upload['file']['file_size'],
	 //      'tipe_file' => $upload['file']['file_type']
		// );
		// $this->db->where('id_berkas', $id);
		// $this->db->update('berkas', $data,array('id_berkas'=>$id));
		// return $id;
  // }
  public function hapus($id)
  {
  	 $this->db->where('id_berkas',$id);
     $query = $this->db->get('berkas');
     $row = $query->row();

     unlink("./uploads/berkas/$row->berkas_1");
     unlink("./uploads/berkas/$row->berkas_2");
     unlink("./uploads/berkas/$row->berkas_3");
     unlink("./uploads/berkas/$row->berkas_4");

     $this->db->delete('berkas', array('id_berkas' => $id));
  }
}

/* End of file M_upload.php */
/* Location: ./application/models/M_upload.php */