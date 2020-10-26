<?php

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
		$this->load->library('form_validation');
		$this->load->library('session');
		if($this->user_model->isNotLogin()) redirect(site_url('login'));
		if ($this->session->userdata('user_logged')->role != "admin") {
		$this->session->set_flashdata('message', 'Maaf anda belum login!');
         redirect('Login', 'refresh');	
		}
	}
	
	public function list()
	{

		$data['users'] = $this->user_model->getAll();
		$this->load->view("admin/users/list", $data);
	}

	public function detail($id)
	{
		$data['profile'] = $this->user_model->getById($id);
		$this->load->view("admin/users/detail", $data);
	}

	public function add()
	{
		$users = $this->user_model;
		$validation = $this->form_validation;
		$validation->set_rules($users->rules());

		if($validation->run()){
			$users->save();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
			helper_log("add", "tambah data user");
		}
		$this->load->view("admin/users/new_form");
	}

	public function edit($id= null)
	{
		if (!isset($id)) redirect('admin/users');
       
        $users = $this->user_model;
        $validation = $this->form_validation; 
        $validation->set_rules($users->rules());

        if ($validation->run()) {
            $users->update();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
			helper_log("edit", "edit data user");
        }

        $data["users"] = $users->getById($id);
        if (!$data["users"]) show_404();
        
        $this->load->view("admin/users/edit_form", $data);
	}

	public function edit_admin($id= null)
	{
		if (!isset($id)) redirect('admin/overview');
       
        $users = $this->user_model;
        $validation = $this->form_validation; 
        $validation->set_rules($users->rules());

        if ($validation->run()) {
            $users->update();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
			helper_log("edit", "edit profile admin");
        }

        $data["users"] = $users->getById($id);
        if (!$data["users"]) show_404();
        
        $this->load->view("general/edit_form", $data);
	}

	public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->user_model->delete($id)) {
			helper_log("delete", "hapus data user");
            redirect(site_url('admin/user/list'));
        }
    }
}
