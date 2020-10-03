<?php
// kerjone ega
class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("ruangan_model");
		$this->load->library('form_validation');
		$this->load->library('session');
		if($this->ruangan_model->isNotLogin()) redirect(site_url('admin/login'));
	
	}
	
	public function list()
	{
		// to do
	}

	public function add()
	{
		// to do
	}

	public function edit($id= null)
	{
		// to do
	}

	public function delete($id=null)
    {
		//		to do
    }
}
