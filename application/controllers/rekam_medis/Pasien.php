<?php
class Pasien extends CI_Controller
{
    public function __construct()
    {
		parent::__construct();
		
		$this->load->model("pasien_model");
		$this->load->model("user_model");
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('pdf');
		if($this->user_model->isNotLogin()) redirect(site_url('login'));
		if ($this->session->userdata('user_logged')->role != "rekam_medis") {
		$this->session->set_flashdata('message', 'Maaf anda belum login!');
         redirect('Login', 'refresh');	
	
		}
	}
	
	public function list()
	{
		$data['pacient'] = $this->pasien_model->getAll();
		$this->load->view("rekam_medis/pasien/list", $data);
	}

	public function detail($id)
	{
		$data['profile'] = $this->pasien_model->getById($id);
		$this->load->view("rekam_medis/pasien/detail", $data);
	}

	public function add()
	{
		$pacient = $this->pasien_model;
		$validation = $this->form_validation;
		$validation->set_rules($pacient->rules());

		if($validation->run()){
			$pacient->save();
			helper_log("add", "tambah data pasien");
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		 }
		$this->load->view("rekam_medis/pasien/new_form");
	}

	public function edit($id= null)
	{
		if (!isset($id)) redirect('rekam_medis/pasien');
       
        $pasien = $this->pasien_model;
        $validation = $this->form_validation; 
        $validation->set_rules($pasien->rules());

        if ($validation->run()) {
            $pasien->update();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
			helper_log("edit", "edit data pasien");
        }

        $data["pasien"] = $pasien->getById($id);
        if (!$data["pasien"]) show_404();
        
        $this->load->view("rekam_medis/pasien/edit_form", $data);
	}

	public function delete($id=null)
    {
		if (!isset($id)) show_404();
        
        if ($this->pasien_model->delete($id)) {
			$this->session->set_flashdata('message', 'Data berhasil dihapus');
			helper_log("delete", "hapus data pasien");
            redirect(site_url('rekam_medis/pasien/list'));
        }
	}
	
	public function laporan_pdf(){
		$data['pacient'] = $this->pasien_model->cari_bulan();
		$this->pdf->setPaper('A4', 'landscape');
		$this->pdf->filename = "laporan-data-pasien.pdf";
		$this->pdf->set_option('isRemoteEnabled', true);
		$this->pdf->load_view('laporan_pdf', $data);	
	}
	public function laporan_pdf1(){
		$data['pacient'] = $this->pasien_model->cari_tanggal();
		$this->pdf->setPaper('A4', 'landscape');
		$this->pdf->filename = "laporan-data-pasien.pdf";
		$this->pdf->set_option('isRemoteEnabled', true);
		$this->pdf->load_view('laporan_pdf', $data);	
	}
	public function laporan_pdf2(){
		$data['pacient'] = $this->pasien_model->cari_tahun();
		$this->pdf->setPaper('A4', 'landscape');
		$this->pdf->filename = "laporan-data-pasien.pdf";
		$this->pdf->set_option('isRemoteEnabled', true);
		$this->pdf->load_view('laporan_pdf', $data);	
	}
	public function laporan_pdfAll(){
		$data['pacient'] = $this->pasien_model->getAll();
		$this->pdf->setPaper('A4', 'landscape');
		$this->pdf->filename = "laporan-data-pasien.pdf";
		$this->pdf->set_option('isRemoteEnabled', true);
		$this->pdf->load_view('laporan_pdf', $data);	
	}
}
