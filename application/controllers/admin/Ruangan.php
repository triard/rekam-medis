<?php
class Ruangan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model("ruangan_model");
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
		$data['ruangan'] = $this->ruangan_model->getAll();
		$data['level'] = $this->level_model->getAll();
		$this->load->view("admin/ruangan/list", $data);
	}

	public function add()
	{
		$ruangan = $this->ruangan_model;
		$validation = $this->form_validation;
		$validation->set_rules($ruangan->rules());

		if($validation->run()){
			$ruangan->save();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
			helper_log("add", "tambah data ruangan");
			redirect(site_url('admin/ruangan/list'));
		}
	}

	public function edit($id= null)
	{       
        $ruangan = $this->ruangan_model;
        $validation = $this->form_validation; 
        $validation->set_rules($ruangan->rules());

        if ($validation->run()) {
            $ruangan->update();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
			helper_log("edit", "edit data ruangan");
			redirect(site_url('admin/ruangan/list'));
        }
		}

	public function delete($id=null)
    {
		if (!isset($id)) show_404();
        
        if ($this->ruangan_model->delete($id)) {
			$this->session->set_flashdata('success', 'Berhasil dihapus');
			helper_log("delete", "hapus data ruangan");
			redirect(site_url('admin/ruangan/list'));
        }
    }
}
