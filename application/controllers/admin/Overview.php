<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model("user_model");
		$this->load->library('session');
		if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
	}

	public function index()
	{
		// load view admin/overview.php
		$data['nama'] = $this->session->userdata('user_logged');
		$this->load->view("admin/overview", $data);
	}
}
