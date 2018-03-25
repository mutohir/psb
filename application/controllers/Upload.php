<?php
  
   class Upload extends CI_Controller {
	
      public function __construct() { 
         parent::__construct(); 
         $this->load->model('M_upload');
      }
		
      public function index() { 
         $this->load->view('admin/upload_foto'); 
      } 
		
      public function do_upload() { 
	      $nmfile = "foto_".time();
         $config['upload_path']   = './uploads/'; 
         $config['allowed_types'] = 'gif|jpeg|bmp|jpg|png'; 
         $config['max_size']      = '2048'; 
         $config['max_width']     = '1288'; 
         $config['max_height']    = '768';  
         $config['file_name']    = $nmfile;  
         // $this->load->library('upload', $config);
         $this->upload->initialize($config);
         $this->upload->do_upload('foto');
			$file_name = $this->upload->data();
         $data = array(
            'foto' => $file_name['foto']);
         $this->M_upload->do_upload($data);

      } 
   } 
?>