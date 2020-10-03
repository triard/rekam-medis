<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
		$this->load->library('form_validation');
		$this->load->library('session');
    }

    public function index()
    {
        // jika form login disubmit
        if($this->input->post()){
			if($this->user_model->doLogin() && $this->session->userdata('user_logged')->role == 'admin'){
				$this->session->set_flashdata('message', 'Berhasil Masuk!, Selamat datang kembali ke halaman Administrator');
				redirect(site_url('admin/overview'));

			} 
			elseif($this->user_model->doLogin() && $this->session->userdata('user_logged')->role =='rekam_medis'){
				$this->session->set_flashdata('message', 'Berhasil Masuk!, Selamat datang kembali ke halaman Rekam Medis');
				redirect(site_url('rekam_medis/overview'));
			} 
			else{
				$this->session->set_flashdata('message', 'Username atau Password salah');
				redirect('login', 'refresh');
			}
		}
		        // tampilkan halaman login
        $this->load->view("login/login_page.php");
    }

    public function logout($id=null)
    {
		// hancurkan semua sesi
//		$this->user_model->changeStatus();

		$sql = "UPDATE users SET is_active='off' WHERE user_id={$id}";
		$this->db->query($sql);
		$this->session->sess_destroy();
        redirect(site_url('login'));
	}
	
}
