<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_siswa extends CI_Model {

	public function getdata()
	{
		return $this->db->get('tb_siswa')->result();
	}

	public function getdatabynoinduk($noinduk)
	{
		$this->db->where('noinduk', $noinduk);
		return $this->db->get('tb_siswa')->result();
	}

	public function deletedata($noinduk)
	{
		$this->db->where('noinduk', $noinduk);
		$this->db->delete('tb_siswa');
	}

	public function insertdata($data)
	{
		$this->db->insert('tb_siswa', $data);
	}

	public function updatedata($data,$noinduk)
	{
		$this->db->where('noinduk', $noinduk);
		$this->db->update('tb_siswa', $data);
	}

	

}

/* End of file M_siswa.php */
/* Location: ./application/models/M_siswa.php */