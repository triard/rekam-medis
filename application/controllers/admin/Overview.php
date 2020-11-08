<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->library('pdf');
		$this->load->model("user_model");
		$this->load->model("level_model");
		$this->load->model("ruangan_model");
		$this->load->model("noRuangan_model");
		$this->load->model("pasien_model");
		$this->load->model("pmasuk_model");
		$this->load->model("diagnosa_model");
		$this->load->model("pkeluar_model");
		$this->load->model("m_log");
		$this->load->library('session');
		if($this->user_model->isNotLogin()) redirect(site_url('login'));
//		if($this->m_log->isNotLogin()) redirect(site_url('login'));
		if ($this->session->userdata('user_logged')->role != "admin") {
			$this->session->set_flashdata('message', 'Maaf anda belum login!');
            redirect('Login', 'refresh');
		}
	}
	
	public function index()
	{
		// load view admin/overview.php
		$data['nama'] = $this->session->userdata('user_logged');
		$data['pasien'] = $this->pasien_model->getCountPasien();
		$data['masuk'] = $this->pmasuk_model->	getCountPasienMasuk();
		$data['keluar'] = $this->pkeluar_model->getCountPasienKeluar();
		$data['diagnosa'] = $this->diagnosa_model->	getCountDiagnosa();
		$data['keluar'] = $this->pkeluar_model->getCountPasienKeluar();
		$data['ruangan'] = $this->ruangan_model->	getCountRuangan();
		$data['user'] = $this->user_model->	getCountUser();
		$data['hitung'] = $this->noRuangan_model->getCountRuangan(); 
		$data['data_kl'] = $this->pasien_model->getDataKl();
		$data['coba']= $this->pmasuk_model->getMasuk();
		$data['out']= $this->pkeluar_model->getKeluar(); 
		$data['kondisi_keluar']= $this->pkeluar_model->getDataKl(); 
		$data['status_pulang']= $this->pkeluar_model->getDataSp(); 
		$this->load->view("admin/overview", $data);
	}

	public function log_activitas()
	{	
		$data['logs'] = $this->m_log->getAll();
		$this->load->view("general/log_aktifitas" ,$data);
	}

	public function detail($id)
	{
		$data['profile'] = $this->user_model->getById($id);
		$this->load->view("general/profile_admin", $data);
	}

	public function allData()
	{
		$data['all'] = $this->pkeluar_model->getAllData();
        $this->load->view("admin/riwayat_pasien", $data);
	}

	public function laporan_pdf(){
		$data['all'] = $this->pkeluar_model->cari_bulanAll();
		$this->pdf->setPaper('A4', 'landscape');
		$this->pdf->filename = "laporan-data-pasien_keluar.pdf";
		$this->pdf->set_option('isRemoteEnabled', true);
		$this->pdf->load_view('admin/laporan_pdf', $data);	
	}
	public function laporan_pdf1(){
		$data['all'] = $this->pkeluar_model->cari_tanggalAll();
		$this->pdf->setPaper('A4', 'landscape');
		$this->pdf->filename = "laporan-data-pasien_keluar.pdf";
		$this->pdf->set_option('isRemoteEnabled', true);
		$this->pdf->load_view('admin/laporan_pdf', $data);	
	}
	public function laporan_pdf2(){
		$data['all'] = $this->pkeluar_model->cari_tahunAll();
		$this->pdf->setPaper('A4', 'landscape');
		$this->pdf->filename = "laporan-data-pasien_keluar.pdf";
		$this->pdf->set_option('isRemoteEnabled', true);
		$this->pdf->load_view('admin/laporan_pdf', $data);	
	}
	public function laporan_pdfAll(){
		$data['all'] = $this->pkeluar_model->getAllData();
		$this->pdf->setPaper('A4', 'landscape');
		$this->pdf->filename = "laporan-data-pasien_keluar.pdf";
		$this->pdf->set_option('isRemoteEnabled', true);
		$this->pdf->load_view('admin/laporan_pdf', $data);	
	}
}
