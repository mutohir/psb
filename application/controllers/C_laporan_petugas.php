<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_laporan_petugas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('Pdf');
		$this->load->model('M_dashboard');
	}
	public function index()
	{
		$data = $this->M_dashboard->get_all_petugas();
		$this->load->view('laporan/v_laporan_petugas', ['data'=>$data]);		
	}

}

/* End of file C_laporan_pendaftar.php */
/* Location: ./application/controllers/C_laporan_pendaftar.php */