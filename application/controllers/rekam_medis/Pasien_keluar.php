<?php
class Pasien_keluar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model("pkeluar_model");
		$this->load->model("user_model");
		$this->load->model("pmasuk_model");
		$this->load->library('form_validation');
		$this->load->library('session');
		if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
		if ($this->session->userdata('user_logged')->role != "rekam_medis") {
		$this->session->set_flashdata('message', 'Maaf anda belum login!');
		redirect('Login', 'refresh');	
			}
		}
	
	public function list()
	{
		$data['keluar'] = $this->pkeluar_model->getAll();
		$this->load->view("rekam_medis/pasien_keluar/list", $data);
	}

	public function list_masuk()
	{

		$data['masuk'] = $this->pmasuk_model->getAll();
		$this->load->view("rekam_medis/pasien_keluar/list_masuk", $data);
	}

	public function konfirmasi($id)
	{
		$sql = "UPDATE nomor_ruangan SET status_ruangan='Kosong' WHERE id_nomor_ruangan={$id}";
		$this->db->query($sql);
		$data['keluar'] = $this->pkeluar_model->getAll();
 		$this->load->view("rekam_medis/pasien_keluar/list", $data);
	}

	public function add()
	{
		$keluar = $this->pkeluar_model;
		$validation = $this->form_validation;
		// $data['input'] = $this->pmasuk_model->getAll();
		$data['keluar'] = $this->pkeluar_model->getAll();
		$validation->set_rules($keluar->rules());

		if($validation->run()){
			 $keluar->save();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
			helper_log("add", "tambah data pasien Keluar");
			redirect(site_url('rekam_medis/pasien_keluar/list'),$data);
		}
		$this->session->set_flashdata('success', 'Gagal disimpan');
		$this->load->view("rekam_medis/pasien_keluar/list", $data);
	}

	public function edit($id= null)
	{       
        $keluar = $this->pkeluar_model;
        $validation = $this->form_validation; 
        $validation->set_rules($keluar->rules());

        if ($validation->run()) {
            $keluar->update();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
			helper_log("edit", "edit data pasien keluar");
			redirect(site_url('rekam_medis/pasien_keluar/list'));
		 }
		
		}

	public function delete($id=null)
    {
		if (!isset($id)) show_404();
        
        if ($this->pkeluar_model->delete($id)) {
			$this->session->set_flashdata('success', 'Berhasil dihapus');
			helper_log("delete", "hapus data pasien keluar");
			redirect(site_url('rekam_medis/pasien_keluar/list'));
        }
    }
}
