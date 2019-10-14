<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CrudController extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Crud_model');

  }
	public function home()
	{
    $data['result'] = $this->Crud_model->getAllData();

		$this->load->view('crudView',$data);
	}

  public function create()
  {
    $this->Crud_model->createData();
    redirect("/mahasiswa");
  }

  public function edit(){

    $nama = $this->input->post('nama');
    $npm = $this->input->post('npm');
    $id_mahasiswa = $this->input->post('id_mahasiswa');
    $res = $this->Crud_model->editData($id_mahasiswa, $nama_mahasiswa, $npm);
    if($res){
     $this->session->set_flashdata('info_success', 'Berhasil mengubah konten');
     redirect('/content-text');
    }
    else if(!$res){
     $this->session->set_flashdata('info_failed', 'Gagal update database konten');
     redirect('/content-text');
    }
  }

}
