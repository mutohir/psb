<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_laporan_pendaftar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('Pdf');
		$this->load->model('M_dashboard');
	}
	public function index()
	{
		$data = $this->M_dashboard->fetch_data();
		$this->load->view('laporan/v_laporan_pendaftar', ['data'=>$data]);		
	}

}

/* End of file C_laporan_pendaftar.php */
/* Location: ./application/controllers/C_laporan_pendaftar.php */