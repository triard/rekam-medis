<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model("user_model");
		$this->load->model("m_log");
		$this->load->library('session');
		if($this->user_model->isNotLogin()) redirect(site_url('login'));
//		if($this->m_log->isNotLogin()) redirect(site_url('login'));
		if ($this->session->userdata('user_logged')->role != "admin") {
			$this->session->set_flashdata('message', 'Maaf anda belum login!');
            redirect('Login', 'refresh');
		}
	}
	
	public function index()
	{
		// load view admin/overview.php
		$data['nama'] = $this->session->userdata('user_logged');
		$this->load->view("admin/overview", $data);
	}

	public function log_activitas()
	{	
		$data['logs'] = $this->m_log->getAll();
		$this->load->view("general/log_aktifitas" ,$data);
	}

	public function detail($id)
	{
		$data['profile'] = $this->user_model->getById($id);
		$this->load->view("general/profile_admin", $data);
	}
}
