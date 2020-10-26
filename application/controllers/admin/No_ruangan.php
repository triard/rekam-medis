<?php
class No_ruangan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model("noRuangan_model");
		$this->load->model("user_model");
		$this->load->model("ruangan_model");
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

		$data['ruangan'] = $this->noRuangan_model->getRuangan();
		$data['nomor'] = $this->noRuangan_model->getAll();
		$this->load->view("admin/no_ruangan/list", $data);
	}

	public function add()
	{
		$nomor = $this->noRuangan_model;
		$validation = $this->form_validation;
		$validation->set_rules($nomor->rules());

		if($validation->run()){
			$nomor->save();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
			helper_log("add", "tambah data Nomor ruangan");
			redirect(site_url('admin/no_ruangan/list'));
		}
		$this->load->view("admin/no_ruangan/_partials/add");
	}

	public function edit($id= null)
	{       
        $nomor = $this->noRuangan_model;
        $validation = $this->form_validation; 
        $validation->set_rules($nomor->rules());

        if ($validation->run()) {
            $nomor->update();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
			helper_log("edit", "edit data Nomor ruangan");
			redirect(site_url('admin/no_ruangan/list'));
		}
		
		}

	public function delete($id=null)
    {
		if (!isset($id)) show_404();
        
        if ($this->noRuangan_model->delete($id)) {
			$this->session->set_flashdata('success', 'Berhasil dihapus');
			helper_log("delete", "hapus data Nomor ruangan");
			redirect(site_url('admin/no_ruangan/list'));
        }
    }
}
