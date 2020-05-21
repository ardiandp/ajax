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
		$this->load->view('v_siswa');
	}

	public function ambildata()
	{
		$data=$this->M_Siswa->getdata();
		echo json_encode($data);
	}

	public function ambildatabynoinduk()
	{
		$noinduk=$this->input->post('noinduk');
		$data= $this->M_Siswa->getdatabynoinduk($noinduk);
		echo json_encode($data);
	}

	public function hapusdata()
	{
		$noinduk = $this->input->post('noinduk');
		$data = $this->M_Siswa->deletedata($noinduk);
		echo json_encode($data);
	}

	public function tambahdata()
	{
		$data=array(
			'noinduk'=>$this->input->post('noinduk'),
			'nama'=>$this->input->post('nama'),
			'alamat'=>$this->input->post('alamat'),
			'hobi'=>$this->input->post('hobi'),
		);

		$data = $this->M_Siswa->insertdata($data);
		echo json_encode($data);
	}

	public function perbaruidata()
	{
		$noinduk=$this->input->post('noinduk');
		$data=array(
			'noinduk'=>$this->input->post('noinduk'),
			'nama'=>$this->input->post('nama'),
			'alamat'=>$this->input->post('alamat'),
			'hobi'=>$this->input->post('hobi'),
		);
		$data= $this->M_Siswa->updatedata($data,$noinduk);
		echo json_encode($data);
	}

}

/* End of file Siswa.php */
/* Location: ./application/controllers/Siswa.php */