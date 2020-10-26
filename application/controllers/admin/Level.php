<?php
class Level extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model("level_model");
		$this->load->model("user_model");
		$this->load->library('form_validation');
		$this->load->library('session');
		if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
		if ($this->session->userdata('user_logged')->role != "admin") {
		$this->session->set_flashdata('message', 'Maaf anda belum login!');
		redirect('Login', 'refresh');	
			}
		}
	
	
	public function list()
	{
		$data['level'] = $this->level_model->getAll();
		$this->load->view("admin/level/list", $data);
	}

	public function add()
	{
		$level = $this->level_model;
		$validation = $this->form_validation;
		$validation->set_rules($level->rules());

		if($validation->run()){
			$level->save();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
			helper_log("add", "tambah data level");
			redirect(site_url('admin/level/list'));
		}
		redirect(site_url('admin/level/list'));
	}

	public function edit($id= null)
	{       
        $level = $this->level_model;
        $validation = $this->form_validation; 
        $validation->set_rules($level->rules());

        if ($validation->run()) {
            $level->update();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
			helper_log("edit", "edit data level");
			redirect(site_url('admin/level/list'));
        }
		}

	public function delete($id=null)
    {
		if (!isset($id)) show_404();
        
        if ($this->level_model->delete($id)) {
			$this->session->set_flashdata('success', 'Berhasil dihapus');
			helper_log("delete", "hapus data  level");
			redirect(site_url('admin/level/list'));
        }
    }
}
