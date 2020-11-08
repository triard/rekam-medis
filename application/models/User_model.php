<?php
class User_model extends CI_Model
{
	private $_table = "users";
	
	public $user_id;
	public $username;
	public $password;
	public $nama_user;
	public $email;
	public $role;
	public $tgl_lahir;
	public $jk_user;
	public $tempat_lahir;
	public $no_ktp;
	public $no_telp;
	public $alamat;
	public $image = 'user_no_image.jpg';
	public $last_login;
	public $create_at;
	public $is_active;
	public $agama;
	public $status;
	public $bulan_buat;

	public function rules()
	{
		return[
			['field' => 'username',
			'label' => 'username',
			'rules' => 'required'],
			
			['field' => 'password',
			'label' => 'password',
			'rules' => 'required'],
			
			['field' => 'nama_user',
			'label' => 'nama_user',
			'rules' => 'required'],

			['field' => 'email',
			'label' => 'email',
			'rules' => 'required'],

			['field' => 'role',
			'label' => 'role',
			'rules' => 'required'],

			['field' => 'tgl_lahir',
			'label' => 'tgl_lahir',
			'rules' => 'required'],

			['field' => 'tempat_lahir',
			'label' => 'tempat_lahir',
			'rules' => 'required'],

			['field' => 'jk_user',
			'label' => 'jk_user',
			'rules' => 'required'],

			['field' => 'no_ktp',
			'label' => 'no_ktp',
			'rules' => 'required'],

			['field' => 'no_telp',
			'label' => 'no_telp',
			'rules' => 'required'],

			['field' => 'alamat',
			'label' => 'alamat',
			'rules' => 'required'],
		];
	}

	public function getAll()
	{
		$this->db->select("*");
        $this->db->from("users");
		$this->db->where('role!=','pasien');
        $getData = $this->db->get();
        if($getData->num_rows() > 0)
        return $getData->result();
        else
        return null;
	}

	public function getById($id)
	{
		return $this->db->get_where($this->_table, ["user_id"=> $id])->row();

	}

	public function save()
	{
		$post= $this->input->post();
		$this->username = $post["username"];
		$this->password = password_hash($post["password"], PASSWORD_DEFAULT);
		$this->nama_user = $post["nama_user"];
		$this->email = $post["email"];
		$this->role = $post["role"];
		$this->tgl_lahir = $post["tgl_lahir"];
		$this->tempat_lahir = $post["tempat_lahir"];
		$this->jk_user = $post["jk_user"];
		$this->no_ktp = $post["no_ktp"];
		$this->no_telp = $post["no_telp"];
		$this->alamat = $post["alamat"];
		$this->is_active = $post["is_active"];
		$this->agama = $post["agama"];
		$this->status = $post["status"];
		$this->bulan_buat  = $post["bulan_buat"];
		$this->image = $this->_uploadImage();
		$this->db->insert($this->_table, $this);
	}

	public function update()
	{
		$post = $this->input->post();
		$this->user_id = $post["user_id"];
		$this->password = $post["password"];
		// $this->nama_user = password_hash($post["nama_user"],PASSWORD_DEFAULT);
		$this->nama_user = $post["nama_user"];
		$this->username = $post["username"];
		$this->email = $post["email"];
		$this->role = $post["role"];
		$this->tgl_lahir = $post["tgl_lahir"];
		$this->tempat_lahir = $post["tempat_lahir"];
		$this->jk_user = $post["jk_user"];
		$this->no_ktp = $post["no_ktp"];
		$this->no_telp = $post["no_telp"];
		$this->alamat = $post["alamat"];
		$this->is_active = $post["is_active"];
		$this->agama = $post["agama"];
		$this->status = $post["status"];
		$this->bulan_buat  = $post["bulan_buat"];
		if (!empty($_FILES["image"]["name"])) {
			$this->image = $this->_uploadImage();
		} else {
			$this->image = $post["old_image"];
		}
		$this->db->update($this->_table, $this, array('user_id' => $post['user_id']));
	}

	public function delete($id)		
	{	
		return $this->db->delete($this->_table, array("user_id" => $id));
	}

	private function _uploadImage()
{
    $config['upload_path']          = './assets/images/user';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = $this->username;
    $config['overwrite']			= true;
    $config['max_size']             = 1024; // 1MB

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('image')) {
        return $this->upload->data("file_name");
    }
    return "default.jpg";
}


    public function doLogin(){
		$post = $this->input->post();

        // cari user berdasarkan email dan username
        $this->db->where('email', $post["email"])
                ->or_where('username', $post["email"]);
        $user = $this->db->get($this->_table)->row();

        // jika user terdaftarn
        if($user){
            // periksa password-nya
            $isPasswordTrue = password_verify($post["password"], $user->password);
            // periksa role-nya
			$isAdmin = $user->role == "admin";
			$isRekdis  = $user->role == "rekam_medis";
			$isPasien  = $user->role == "pasien";

            // jika password benar dan dia admin
            if($isPasswordTrue && $isAdmin){ 
                // login sukses yay!
                $this->session->set_userdata(['user_logged' => $user]);
				$this->_updateLastLogin($user->user_id);
                return true;
            }elseif($isPasswordTrue && $isRekdis){
				$this->session->set_userdata(['user_logged' => $user]);
				$this->_updateLastLogin($user->user_id);
				return true;
			}
			elseif($isPasswordTrue && $isPasien){
				$this->session->set_userdata(['user_logged' => $user]);
				$this->_updateLastLogin($user->user_id);
				return true;
			}
        }
        
        // login gagal
		return false;
    }

    public function isNotLogin(){
        return $this->session->userdata('user_logged') === null;
    }

    private function _updateLastLogin($user_id){
        $sql = "UPDATE {$this->_table} SET last_login=now(), is_active='online' WHERE user_id={$user_id}";
        $this->db->query($sql);
	}

	public function getCountUser()
	{
		$this->db->select('id_user');
		$this->db->from('users');
		$this->db->where('role!=','pasien');
		return $this->db->count_all_results();
	}
}
