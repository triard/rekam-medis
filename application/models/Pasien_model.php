<?php
class Pasien_model extends CI_Model
{
	private $_table = "pasien";
	
	public $id_pasien;
	public $nama_pasien;
	public $no_KTP;
	public $tgl_lahir_pasien;
	public $jenis_kelamin;
	public $alamat_pasien;
	public $no_telp_pasien;
	public $agama_pasien;
	public $image;
	public $bulan_buat;


	public function rules()
	{
		return[
			
			['field' => 'nama_pasien',
			'label' => 'nama_pasien',
			'rules' => 'required'],
			
			['field' => 'no_KTP',
			'label' => 'no_KTP',
			'rules' => 'required'],

			['field' => 'tgl_lahir_pasien',
			'label' => 'tgl_lahir_pasien',
			'rules' => 'required'],

			['field' => 'jenis_kelamin',
			'label' => 'jenis_kelamin',
			'rules' => 'required'],

			['field' => 'alamat_pasien',
			'label' => 'alamat_pasien',
			'rules' => 'required'],

			['field' => 'no_telp_pasien',
			'label' => 'no_telp_pasien',
			'rules' => 'required'],

			['field' => 'agama_pasien',
			'label' => 'agama_pasien',
			'rules' => 'required']

		];	
	}

	public function getAll()
	{
		return $this->db->get($this->_table)->result();
	}

	public function getById($id)
	{
		return $this->db->get_where($this->_table, ["id_pasien"=> $id])->row();
	}

	public function save()
	{
		$post= $this->input->post();
		$this->nama_pasien = $post["nama_pasien"];
		$this->no_KTP = $post["no_KTP"];
		$this->tgl_lahir_pasien = $post["tgl_lahir_pasien"];
		$this->jenis_kelamin = $post["jenis_kelamin"];
		$this->alamat_pasien = $post["alamat_pasien"];
		$this->no_telp_pasien = $post["no_telp_pasien"];
		$this->agama_pasien = $post["agama_pasien"];
		$this->bulan_buat = $post["bulan_buat"];
		$this->image = $this-> _uploadImage();
		$this->db->insert($this->_table, $this);
	}

	public function update()
	{
		$post = $this->input->post();
		$this->id_pasien = $post["id_pasien"];
		$this->nama_pasien = $post["nama_pasien"];
		$this->no_KTP = $post["no_KTP"];
		$this->tgl_lahir_pasien = $post["tgl_lahir_pasien"];
		$this->jenis_kelamin = $post["jenis_kelamin"];
		$this->alamat_pasien = $post["alamat_pasien"];
		$this->no_telp_pasien = $post["no_telp_pasien"];
		$this->agama_pasien = $post["agama_pasien"];
		$this->bulan_buat = $post["bulan_buat"];
		if (!empty($_FILES["image"]["name"])) {
			$this->image = $this->_uploadImage();
		} else {
			$this->image = $post["old_image"];
		}
		$this->db->update($this->_table, $this, array('id_pasien' => $post['id_pasien']));
	}

	public function delete($id)		
	{	
		return $this->db->delete($this->_table, array("id_pasien" => $id));
	}

	public function getCountPasien()
	{
		$this->db->select('id_pasien');
		$this->db->from('pasien');
		return $this->db->count_all_results();
	}

	private function _uploadImage()
	{
		$config['upload_path']          = './assets/images/pasien';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']            = $this->nama_pasien;
		$config['overwrite']			= true;
		$config['max_size']             = 1024; // 1MB
	
		$this->load->library('upload', $config);
	
		if ($this->upload->do_upload('image')) {
			return $this->upload->data("file_name");
		}
		
		return "default.jpg";
	}
	
	function cari_bulan() {
        $this->db->select("*");
        $this->db->from("pasien");
		$this->db->where('bulan_buat', $this->input->post('bulan'));
		$this->db->where('tahun_buat', $this->input->post('tahun'));
        $getData = $this->db->get();
        if($getData->num_rows() > 0)
        return $getData->result();
        else
        return null;
	} 
	
	function cari_tanggal() {
        $this->db->select("*");
        $this->db->from("pasien");
        $this->db->where('tgl_buat', $this->input->post('tanggal'));
        $getData = $this->db->get();
        if($getData->num_rows() > 0)
        return $getData->result();
        else
        return null;
	} 
	
	function cari_tahun() {
        $this->db->select("*");
        $this->db->from("pasien");
        $this->db->where('tahun_buat', $this->input->post('tahun'));
        $getData = $this->db->get();
        if($getData->num_rows() > 0)
        return $getData->result();
        else
        return null;
	} 
	
	public function getDataKL(){
        $query = $this->db->query("SELECT jenis_kelamin AS jk,COUNT(jenis_kelamin) AS jml_jk 
		FROM pasien
		GROUP BY jenis_kelamin");          
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

}
