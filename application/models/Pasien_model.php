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
		$this->db->update($this->_table, $this, array('id_pasien' => $post['id_pasien']));
	}

	public function delete($id)		
	{	
		return $this->db->delete($this->_table, array("id_pasien" => $id));
	}

}
