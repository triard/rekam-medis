<?php

class Login extends CI_Controller
{
    public function __construct()
    {
		parent::__construct();
		$this->load->model("pasien_model");
        $this->load->model("user_model");
		$this->load->library('form_validation');
		$this->load->library('session');
    }

    public function index()
    {
		// jika form login disubmit
		$data['nama'] = $this->session->userdata('user_logged');
        if($this->input->post()){
			if($this->user_model->doLogin() && $this->session->userdata('user_logged')->role == 'admin'){
				$this->session->set_flashdata('message', 'Berhasil Masuk!, Selamat datang kembali ke halaman Administrator');
				helper_log("login", "login ke admin");
				redirect(site_url('admin/overview'));
			} 
			elseif($this->user_model->doLogin() && $this->session->userdata('user_logged')->role =='rekam_medis'){
				$this->session->set_flashdata('message', 'Berhasil Masuk!, Selamat datang kembali ke halaman Rekam Medis');
				helper_log("login", "login ke rekam medis");
				redirect(site_url('rekam_medis/overview'));
			} 
			elseif($this->user_model->doLogin() && $this->session->userdata('user_logged')->role =='pasien'){
				$this->session->set_flashdata('message', 'Berhasil Masuk!, Selamat datang kembali ke halaman Pasien');
				helper_log("login", "login ke pasien");
				redirect(site_url('pasien/overview'));
			} 
			else{
				$this->session->set_flashdata('message', 'Username atau Password salah');
				redirect('login', 'refresh');
			}
		}
		        // tampilkan halaman login
        $this->load->view("login/login_page.php", $data);
	}
	
	public function register()
	{
		$pacient = $this->pasien_model;
		$validation = $this->form_validation;
		$validation->set_rules($pacient->rules());

		if($validation->run()){
			$pacient->save();
			$this->session->set_flashdata('message', 'Register Berhasil');
			redirect('login');
		 }
		$this->load->view("login/registrasiUser");
	}

    public function logout($id=null)
    {
		// hancurkan semua sesi
//		$this->user_model->changeStatus();
		$sql = "UPDATE users SET is_active='offline' WHERE user_id={$id}";
		$this->db->query($sql);
		$this->session->sess_destroy();
		helper_log("logout", "melakukan logout");
        redirect(site_url('login'));
	}
	
}
