<?php
class Pasien_masuk extends CI_Controller
{
    public function __construct()
    {
		parent::__construct();
		$this->load->library('pdf');
		$this->load->model("pmasuk_model");
		$this->load->model("pasien_model");
		$this->load->model("user_model");
		$this->load->model("ruangan_model");
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
		$data['masuk'] = $this->pmasuk_model->getAll();
		$data['ruangan'] =  $this->pmasuk_model->getRuangan();
		$this->load->view("rekam_medis/pasien_masuk/list", $data);
	}

	public function list_pas()
	{
		$data['ruangan'] =  $this->pmasuk_model->getRuangan();
		$data['pacient'] = $this->pasien_model->getAll();
		$data['jumlah'] = $this->pmasuk_model->getCountPasienMasuk();
 		$this->load->view("rekam_medis/pasien_masuk/list_pasien", $data);
	}

	public function konfirmasi($id)
	{
		$sql = "UPDATE nomor_ruangan SET status_ruangan='Diisi' WHERE id_nomor_ruangan={$id}";
		$this->db->query($sql);
		$data['masuk'] = $this->pmasuk_model->getAll();
		$data['ruangan'] =  $this->pmasuk_model->getRuangan();
 		$this->load->view("rekam_medis/pasien_masuk/list", $data);
	}

	public function add()
	{
		$masuk = $this->pmasuk_model;
		 $data['ruangan'] =  $this->pmasuk_model->getRuangan();
		$data['pacient'] = $this->pasien_model->getAll();
		$data['jumlah'] = $this->pmasuk_model->getCountPasienMasuk();
		$validation = $this->form_validation;
		$validation->set_rules($masuk->rules());

		if($validation->run()){
			$masuk->save();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
			helper_log("add", "tambah data pasien masuk");
			redirect(site_url('rekam_medis/pasien_masuk/list'), $data);
		}
		$this->load->view("rekam_medis/pasien_masuk/list", $data);
	}

	public function edit($id= null)
	{       
		$masuk = $this->pmasuk_model;
        $validation = $this->form_validation; 
        $validation->set_rules($masuk->rules());

        if ($validation->run()) {
            $masuk->update();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
			helper_log("edit", "edit data pasien masuk");
			redirect(site_url('rekam_medis/pasien_masuk/list'));
		}
		
		}

	public function delete($id=null)
    {
		if (!isset($id)) show_404();
        
        if ($this->pmasuk_model->delete($id)) {
			$this->session->set_flashdata('success', 'Berhasil dihapus');
			helper_log("delete", "hapus data pasien masuk");
			redirect(site_url('rekam_medis/pasien_masuk/list'));
        }
	}
	
	public function laporan_pdf(){
		$data['masuk'] = $this->pmasuk_model->cari_bulan();
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "laporan-data-pasien-masuk.pdf";
		$this->pdf->set_option('isRemoteEnabled', true);
		$this->pdf->load_view('rekam_medis/pasien_masuk/laporan_pdf', $data);	
	}
	public function laporan_pdf1(){
		$data['masuk'] = $this->pmasuk_model->cari_tanggal();
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "laporan-data-pasien-masuk.pdf";
		$this->pdf->set_option('isRemoteEnabled', true);
		$this->pdf->load_view('rekam_medis/pasien_masuk/laporan_pdf', $data);	
	}
	public function laporan_pdf2(){
		$data['masuk'] = $this->pmasuk_model->cari_tahun();
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "laporan-data-pasien-masuk.pdf";
		$this->pdf->set_option('isRemoteEnabled', true);
		$this->pdf->load_view('rekam_medis/pasien_masuk/laporan_pdf', $data);	
	}
	public function laporan_pdfAll(){
		$data['masuk'] = $this->pmasuk_model->getAll();
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "laporan-data-pasien-masuk.pdf";
		$this->pdf->set_option('isRemoteEnabled', true);
		$this->pdf->load_view('rekam_medis/pasien_masuk/laporan_pdf', $data);	
	}
}
