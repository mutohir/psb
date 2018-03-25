<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berkas extends CI_Controller {

public function __construct(){
    parent::__construct();
    
    $this->load->model('M_upload');
  }
  
  public function index(){
    error_reporting(0);
  $data['username'] = $this->session->userdata('username');
  $data['user_id'] = $this->session->userdata('user_id');
  $data['berkas'] = $this->M_upload->view();
  $data['level'] = $this->session->userdata('level');
	$this->load->view('pendaftar/templates/header', $data);
    $this->load->view('pendaftar/berkas', $data);
	$this->load->view('pendaftar/templates/footer', $data);
  }
  
  public function upload()
{       
    $this->load->library('upload');
    $dataInfo = array();
    $files = $_FILES;
    $cpt = count($_FILES['userfile']['name']);
    for($i=0; $i<$cpt; $i++)
    {           
        $_FILES['userfile']['name']= $files['userfile']['name'][$i];
        $_FILES['userfile']['type']= $files['userfile']['type'][$i];
        $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
        $_FILES['userfile']['error']= $files['userfile']['error'][$i];
        $_FILES['userfile']['size']= $files['userfile']['size'][$i];    

        $this->upload->initialize($this->atur());
        $this->upload->do_upload();
        $dataInfo[] = $this->upload->data();
    }

    $data = array(
      'user_id'=>$this->input->post('user_id'),
      'keterangan'=>$this->input->post('keterangan'),
      'berkas_1' => $dataInfo[0]['file_name'],
      'berkas_2' => $dataInfo[1]['file_name'],
      'berkas_3' => $dataInfo[2]['file_name'],
      'berkas_4' => $dataInfo[3]['file_name']
     );
     $result_set = $this->M_upload->save($data);
      redirect('pendaftar/berkas');
}

private function atur()
{   
    //upload an image options
    $config['upload_path']   = './uploads/berkas';
    $config['allowed_types'] = 'jpeg|bmp|jpg|png';
    $config['max_size']  = '2048';
    $config['remove_space'] = TRUE;
    return $config;
}
public function tambah(){
    $data = array();
    
    if(isset($_POST['submit'])){ // Jika user menekan tombol Submit (Simpan) pada form
      // lakukan upload file dengan memanggil function upload yang ada di M_upload.php
      $upload = $this->M_upload->upload();
      
      if($upload['result'] == "success"){ // Jika proses upload sukses
         // Panggil function save yang ada di M_upload.php untuk menyimpan data ke database
        $this->M_upload->save($upload);
        
        redirect('pendaftar/berkas'); // Redirect kembali ke halaman awal / halaman view data
      }else{ // Jika proses upload gagal
        $data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
      }
    }

	$data['username'] = $this->session->userdata('username');
	$data['user_id'] = $this->session->userdata('user_id');
	$data['level'] = $this->session->userdata('level');
    $this->load->view('pendaftar/templates/header', $data);
    $this->load->view('pendaftar/form', $data);
	$this->load->view('pendaftar/templates/footer', $data);
  }
//   public function ubah($id)
//   {
// 		if (isset($_POST['ubah'])) {
// 			if ($this->M_upload->updateberkas($id)) {
// 				$this->session->set_flashdata('success', 'Data berhasil dirubah');
// 				redirect('pendaftar/berkas/','refresh');
// 			}
// 			else {
// 				$this->session->set_flashdata('error', 'Data gagal dirubah. Silahkan coba lagi.');
// 				redirect('pendaftar/berkas/ubah','refresh');
// 			}
// 			redirect('pendaftar/berkas/','refresh');
// 		}
//   	$data['berkas'] = $this->M_upload->getberkas($id);
//   	$data['username'] = $this->session->userdata('username');
// 	$data['user_id'] = $this->session->userdata('user_id');
// 	$data['level'] = $this->session->userdata('level');
//     $this->load->view('pendaftar/templates/header', $data);
//     $this->load->view('pendaftar/ubah_berkas', $data);
// 	$this->load->view('pendaftar/templates/footer', $data);
//   }
  public function hapus($id)
  {
  	$this->M_upload->hapus($id);
  	redirect('pendaftar/berkas','refresh');
  }

}

/* End of file berkas.php */
/* Location: ./application/controllers/pendaftar/berkas.php */