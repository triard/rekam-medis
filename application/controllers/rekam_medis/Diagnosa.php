<?php
class Diagnosa extends CI_Controller
{
    public function __construct()
    {
		parent::__construct();
		$this->load->library('pdf');
		$this->load->model("diagnosa_model");
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
		$data['diagnosa'] = $this->diagnosa_model->getAll();
		$this->load->view("rekam_medis/diagnosa/list", $data);
	}

	public function list_masuk()
	{

		$data['masuk'] = $this->pmasuk_model->getAll();
		$this->load->view("rekam_medis/diagnosa/list_masuk", $data);
	}

	public function add()
	{
		$diagnosa = $this->diagnosa_model;
		$validation = $this->form_validation;
		// $data['input'] = $this->pmasuk_model->getAll();
		$data['diagnosa'] = $this->diagnosa_model->getAll();
		$validation->set_rules($diagnosa->rules());

		if($validation->run()){
			 $diagnosa->save();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
			helper_log("add", "tambah data diagnosa");
			redirect(site_url('rekam_medis/diagnosa/list'),$data);
		}
		$this->session->set_flashdata('success', 'Gagal disimpan');
		$this->load->view("rekam_medis/diagnosa/list", $data);
	}

	public function edit($id= null)
	{       
        $nomor = $this->diagnosa_model;
        $validation = $this->form_validation; 
        $validation->set_rules($nomor->rules());

        if ($validation->run()) {
            $nomor->update();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
			helper_log("edit", "edit data diagnosa");
			redirect(site_url('rekam_medis/diagnosa/list'));
		}
		
		}

	public function delete($id=null)
    {
		if (!isset($id)) show_404();
        
        if ($this->diagnosa_model->delete($id)) {
			$this->session->set_flashdata('success', 'Berhasil dihapus');
			helper_log("delete", "hapus data diagnosa");
			redirect(site_url('rekam_medis/diagnosa/list'));
        }
	}
	
	public function laporan_pdf(){
		$data['diagnosa'] = $this->diagnosa_model->cari_bulan();
		$this->pdf->setPaper('A4', 'landscape');
		$this->pdf->filename = "laporan-data-pasien.pdf";
		$this->pdf->set_option('isRemoteEnabled', true);
		$this->pdf->load_view('rekam_medis/diagnosa/laporan_pdf', $data);	
	}
	public function laporan_pdf1(){
		$data['diagnosa'] = $this->diagnosa_model->cari_tanggal();
		$this->pdf->setPaper('A4', 'landscape');
		$this->pdf->filename = "laporan-data-pasien.pdf";
		$this->pdf->set_option('isRemoteEnabled', true);
		$this->pdf->load_view('rekam_medis/diagnosa/laporan_pdf', $data);	
	}
	public function laporan_pdf2(){
		$data['diagnosa'] = $this->diagnosa_model->cari_tahun();
		$this->pdf->setPaper('A4', 'landscape');
		$this->pdf->filename = "laporan-data-pasien.pdf";
		$this->pdf->set_option('isRemoteEnabled', true);
		$this->pdf->load_view('rekam_medis/diagnosa/laporan_pdf', $data);	
	}
	public function laporan_pdfAll(){
		$data['diagnosa'] = $this->diagnosa_model->getAll();
		$this->pdf->setPaper('A4', 'landscape');
		$this->pdf->filename = "laporan-data-pasien.pdf";
		$this->pdf->set_option('isRemoteEnabled', true);
		$this->pdf->load_view('rekam_medis/diagnosa/laporan_pdf', $data);	
	}
}
