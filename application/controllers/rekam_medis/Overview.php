<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model("pasien_model");
		$this->load->model("pmasuk_model");
		$this->load->model("diagnosa_model");
		$this->load->model("pkeluar_model");
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model("user_model");
		if($this->user_model->isNotLogin()) redirect(site_url('login'));
		if ($this->session->userdata('user_logged')->role != "rekam_medis") {
			$this->session->set_flashdata('message', 'Maaf anda belum login!');
            redirect('Login', 'refresh');
		}
	}

	public function index()
	{
		$data['pasien'] = $this->pasien_model->getCountPasien();
		$data['masuk'] = $this->pmasuk_model->	getCountPasienMasuk();
		$data['keluar'] = $this->pkeluar_model->getCountPasienKeluar();
		$data['diagnosa'] = $this->diagnosa_model->	getCountDiagnosa();
		$data['coba']= $this->pmasuk_model->getMasuk();
		$data['out']= $this->pkeluar_model->getKeluar();
        $this->load->view("rekam_medis/overview", $data);
	}

	public function detail($id)
	{
		$data['profile'] = $this->user_model->getById($id);
		$this->load->view("general/profile_rekdis", $data);
	}

	public function edit_rekdis($id= null)
	{
		if (!isset($id)) redirect('rekdis/overview');
       
        $users = $this->user_model;
        $validation = $this->form_validation; 
        $validation->set_rules($users->rules());

        if ($validation->run()) {
            $users->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["users"] = $users->getById($id);
        if (!$data["users"]) show_404();
        
        $this->load->view("general/edit_form_rekdis", $data);
	}

	public function allData()
	{
		$data['all'] = $this->pkeluar_model->getAllData();
        $this->load->view("admin/riwayat_pasien", $data);
	}

}
