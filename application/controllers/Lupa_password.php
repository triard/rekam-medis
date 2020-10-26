<?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
   
 class Lupa_password extends CI_Controller {  
   

	public function __construct()
    {
        parent::__construct();

		$this->load->library('form_validation');
		$this->load->model("m_account");
		$this->load->library('session');
		
    }

     public function index()  
     {  
         
         $this->form_validation->set_rules('email', 'Email', 'required|valid_email');   
         
         if($this->form_validation->run() == FALSE) {  
             $data['title'] = 'Rekam Medis';  
             $this->load->view('login/v_lupa_password',$data);  
         }else{  
             $email = $this->input->post('email');   
             $clean = $this->security->xss_clean($email);  
             $userInfo = $this->m_account->getUserInfoByEmail($clean);  
               
             if(!$userInfo){  
               $this->session->set_flashdata('message', 'email tidak ditemukan, silakan coba lagi.');  
               redirect(site_url('login'),'refresh');   
             }    
			
			 $token = $this->m_account->insertToken($userInfo->user_id);   
            

             $qstring = $this->base64url_encode($token);           
             $url = site_url() . '/lupa_password/reset_password/token/' . $qstring;  
             $link = '<a href="' . $url . '">' . $url . '</a>';   
               
   
			 $this->load->library('email');
				$config = array();
				$config['charset']='utf-8';
				$config['useragent']='Codeigniter';
				$config['protocol']="smtp";
				$config['mailtype']="html";
				$config['smtp_host']="ssl://smtp.gmail.com";
				$config['smtp_port']="465";
				$config['smtp_timeout']="400";
				$config['smtp_user']="1831710143@student.polinema.ac.id";
				$config['smtp_pass']="8449541101";
				$config['crlf']="\r\n";
				$config['newline']="\r\n";
				$config['wordwrap']=TRUE;
				//memanggil library email dan set konfigurasi untuk pengiriman email
					
				$this->email->initialize($config);
				//konfigurasi pengiriman
				$this->email->from($config['smtp_user']);
				$this->email->to($this->input->post('email'));
				$this->email->subject("Reset your password");
 
				$message = "<p>Anda melakukan permintaan reset password</p>";
                $message .= '<strong>Hai, anda menerima email ini karena ada permintaan untuk memperbaharui  
                password anda.</strong><br>';  
                $message .= '<strong>Silakan klik link ini:</strong> ' . $link;      
				$this->email->message($message);
				if($this->email->send())
				{
					$this->session->set_flashdata('message', 'Silahkan cek email '.$this->input->post('email').' untuk melakukan reset password');
					redirect(site_url('login'));
				}else{
					$this->session->set_flashdata('message', 'Berhasil melakukan registrasi, gagal mengirim verifikasi email');
					redirect(site_url('login'));
				}
             exit;  
         }   
     }  
   
     public function reset_password()  
     {  
       $token = $this->base64url_decode($this->uri->segment(4));           
       $cleanToken = $this->security->xss_clean($token);  
         
       $user_info = $this->m_account->isTokenValid($cleanToken); //either false or array();          
         
       if(!$user_info){  
         $this->session->set_flashdata('message', 'Token tidak valid atau kadaluarsa');  
         redirect(site_url('login'),'refresh');   
       }    
   
       $data = array(  
         'title'=> 'Halaman Reset Password | Tutorial reset password CodeIgniter @ https://recodeku.blogspot.com',  
         'nama'=> $user_info->username,   
         'email'=>$user_info->email,   
         'token'=>$this->base64url_encode($token)  
       );  
         
       $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');  
       $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');         
         
       if ($this->form_validation->run() == FALSE) { 
		 $this->load->view('login/v_reset_password', $data); 
		  
       }else{  
                           
         $post = $this->input->post(NULL, TRUE);          
         $cleanPost = $this->security->xss_clean($post);          
         $hashed = $cleanPost['password'];          
         $cleanPost['password'] = $hashed;  
         $cleanPost['user_id'] = $user_info->user_id;  
         unset($cleanPost['passconf']);          
         if(!$this->m_account->updatePassword($cleanPost)){  
           $this->session->set_flashdata('message', 'Update password gagal.');  
         }else{  
           $this->session->set_flashdata('message', 'Password anda sudah  
						 diperbaharui. Silakan login.');
						
         }  
         redirect(site_url('login'),'refresh');         
       }  
     }  
       
   public function base64url_encode($data) {   
    return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');   
   }   
   
   public function base64url_decode($data) {   
    return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT));   
   }    
 }  
