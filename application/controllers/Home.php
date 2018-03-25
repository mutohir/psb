<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('M_dashboard');
	}
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('index');
		$this->load->view('templates/footer');
	}

	public function jadwal()
	{
		$data['query'] = $this->M_dashboard->jadwal();
		$this->load->view('templates/header');
		$this->load->view('jadwal',$data);
		$this->load->view('templates/footer');
	}
	public function rutinitas()
		{
			$data['query'] = $this->M_dashboard->ngaji();
			$this->load->view('templates/header');
			$this->load->view('rutinitas',$data);
			$this->load->view('templates/footer');
		}

	public function statistik()
	{
		$data['query'] = $this->M_dashboard->statistik();
		$this->load->view('templates/header');
		$this->load->view('statistik',$data);
		$this->load->view('templates/footer');
	}

	public function daftar_online()
	{
		$this->load->view('templates/header');
		$this->load->view('daftar_online');
		$this->load->view('templates/footer');
	}

	public function daftar_ulang()
	{
		$this->load->view('templates/header');
		$this->load->view('daftar_ulang');
		$this->load->view('templates/footer');
	}
	public function pengumuman()
	{
		$this->load->view('templates/header');
		$this->load->view('daftar_ulang');
		$this->load->view('templates/footer');
	}
	public function tes()
	{
		$this->load->view('templates/header');
		$this->load->view('tes');
		$this->load->view('templates/footer');
	}
	public function biaya()
	{
		$data['biaya'] = $this->M_dashboard->biaya();
		$this->load->view('templates/header');
		$this->load->view('biaya',$data);
		$this->load->view('templates/footer');
	}
	public function panduan()
	{
		$data['panduan'] = $this->M_dashboard->panduan();
		$this->load->view('templates/header');
		$this->load->view('panduan',$data);
		$this->load->view('templates/footer');
	}
	public function kontak()
	{
		$this->load->view('templates/header');
		$this->load->view('kontak');
		$this->load->view('templates/footer');
	}
	public function masuk()
	{
		$data = $this->load->model('home');
		$this->load->view('masuk');
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */