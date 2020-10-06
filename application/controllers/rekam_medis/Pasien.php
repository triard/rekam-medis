<?php
class Pasien extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model("pasien_model");
		$this->load->model("user_model");
		$this->load->library('form_validation');
		$this->load->library('session');
		if($this->user_model->isNotLogin()) redirect(site_url('login'));
		if ($this->session->userdata('user_logged')->role != "rekam_medis") {
		$this->session->set_flashdata('message', 'Maaf anda belum login!');
         redirect('Login', 'refresh');	
	
		}
	}
	
	public function list()
	{
		$data['pacient'] = $this->pasien_model->getAll();
		$this->load->view("rekam_medis/pasien/list", $data);
	}

	public function detail($id)
	{
		$data['pasien'] = $this->pasien_model->getById($id);
		$this->load->view("rekam_medis/pasien/detail", $data);
	}

	public function add()
	{
		$pacient = $this->pasien_model;
		$validation = $this->form_validation;
		$validation->set_rules($pacient->rules());

		if($validation->run()){
			$pacient->save();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		 }
		$this->load->view("rekam_medis/pasien/new_form");
	}

	public function edit($id= null)
	{
		if (!isset($id)) redirect('rekam_medis/pasien');
       
        $pasien = $this->pasien_model;
        $validation = $this->form_validation; 
        $validation->set_rules($pasien->rules());

        if ($validation->run()) {
            $pasien->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["pasien"] = $pasien->getById($id);
        if (!$data["pasien"]) show_404();
        
        $this->load->view("rekam_medis/pasien/edit_form", $data);
	}

	public function delete($id=null)
    {
		if (!isset($id)) show_404();
        
        if ($this->pasien_model->delete($id)) {
			$this->session->set_flashdata('message', 'Data berhasil dihapus');
            redirect(site_url('rekam_medis/pasien/list'));
        }
    }
}
