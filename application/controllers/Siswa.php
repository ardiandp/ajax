<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Siswa');
	}

	public function index()
	{
		
	}

}

/* End of file Siswa.php */
/* Location: ./application/controllers/Siswa.php */