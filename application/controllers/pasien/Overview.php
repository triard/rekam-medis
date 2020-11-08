<?php
class Overview extends CI_Controller
{
    public function __construct()
    {
		parent::__construct();
		$this->load->library('pdf');
		$this->load->model("pasien_model");
		$this->load->model("user_model");
		$this->load->model("pmasuk_model");
		$this->load->library('form_validation');
		$this->load->library('session');
		if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
		if ($this->session->userdata('user_logged')->role != "pasien") {
		$this->session->set_flashdata('message', 'Maaf anda belum login!');
		redirect('Login', 'refresh');	
			}
		} 
	

	public function index()
	{
		$data['profile'] = $this->pasien_model->getAll();
		$this->load->view("pasien/index", $data);	
	}

	public function get_pasien()
	{
		$data['ruangan'] =  $this->pmasuk_model->getRuangan();
		$data['jumlah'] = $this->pmasuk_model->getCountPasienMasuk();
		$data['masuk'] = $this->pmasuk_model->getPas();
		$this->load->view("pasien/list", $data);
	}

	public function edit($id= null)
	{
		if (!isset($id)) redirect('pasien/overview');
       
        $pasien = $this->pasien_model;
        $validation = $this->form_validation; 
        $validation->set_rules($pasien->rules());

        if ($validation->run()) {
            $pasien->update();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
			helper_log("edit", "edit data Pasien");
        }

        $data["pasien"] = $pasien->getById($id);
        if (!$data["pasien"]) show_404();
        
        $this->load->view("pasien/editProfile", $data);
	}

	public function edit_regis($id= null)
	{       
		$masuk = $this->pmasuk_model;
        $validation = $this->form_validation; 
        $validation->set_rules($masuk->rules()); 

        if ($validation->run()) {
            $masuk->update();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
			helper_log("edit", "edit data pasien masuk");
			redirect(site_url('pasien/overview/get_pasien'));
		}
	}

	public function add()
	{
		$masuk = $this->pmasuk_model;
		 $data['ruangan'] =  $this->pmasuk_model->getRuangan();
		$data['jumlah'] = $this->pmasuk_model->getCountPasienMasuk();
		$validation = $this->form_validation;
		$validation->set_rules($masuk->rules());

		if($validation->run()){
			$masuk->save();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
			helper_log("add", "tambah data pasien masuk");
			redirect(site_url('pasien/overview/get_pasien'), $data);
		}
		$this->load->view("pasien/overview/get_pasien", $data);
	}

	public function delete($id=null)
    {
		if (!isset($id)) show_404();
        
        if ($this->pmasuk_model->delete($id)) {
			$this->session->set_flashdata('success', 'Berhasil dihapus');
			helper_log("delete", "hapus data pasien masuk");
			redirect(site_url('pasien/overview/get_pasien'));
        }
	}

	public function set_booking($id)
	{
		$sql = "UPDATE nomor_ruangan SET status_ruangan='Booking' WHERE id_nomor_ruangan={$id}";
		$this->db->query($sql);
		$data['masuk'] = $this->pmasuk_model->getAll();
		$data['ruangan'] =  $this->pmasuk_model->getRuangan();
		redirect(site_url('pasien/overview/get_pasien'));
	}

	public function set_kosong($id)
	{
		$sql = "UPDATE nomor_ruangan SET status_ruangan='Kosong' WHERE id_nomor_ruangan={$id}";
		$this->db->query($sql);
		$data['masuk'] = $this->pmasuk_model->getAll();
		$data['ruangan'] =  $this->pmasuk_model->getRuangan();
		redirect(site_url('pasien/overview/get_pasien'));
	}
}
