<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
  function createData()
  {
    $data = array (
      'nama' => $this->input->post('nama'),
      'npm' => $this->input->post('npm')
    );
    $this->db->insert('mahasiswa', $data);
  }

  function getAllData(){
    $query = $this->db->query('SELECT * FROM mahasiswa');
    return $query->result();
  }

	function editData($id_mahasiswa, $nama_mahasiswa, $npm){
		$data = array(
			'nama' => $nama_mahasiswa,
			'npm' => $npm
		);
		$this->db->Where('mahasiswa', $id_mahasiswa);
		$res = $this->db->Update('mahasiswa', $data);
		if($res) return true;
		else return false;
	}


}
