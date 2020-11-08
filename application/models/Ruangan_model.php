<?php
class Ruangan_model extends CI_Model
{
	private $_table = "ruangan";
	
	public $id_ruangan;
	public $nama_ruangan;
	public $id_kelas;

	public function rules()
	{
		return[
			[
				'field' => 'nama_ruangan',
				'label' => 'nama_ruangan',
				'rules' => 'required'	
			]
			];
	}

	public function getAll()
	{
		$this->db->select('*');
        $this->db->from('ruangan as r');
		$this->db->join('level as l', 'r.id_kelas = l.id');

         return $this->db->get()->result();
	}

	public function getById($id)
	{
		return $this->db->get_where($this->_table, ["id_ruangan"=> $id])->row();
	}

	public function save()
	{
		$post = $this->input->post();
		$this->nama_ruangan = $post["nama_ruangan"];
		$this->id_kelas = $post["id_kelas"];
		$this->db->insert($this->_table, $this);
	}

	public function update()
	{
		$post = $this->input->post();
		$this->id_ruangan = $post["id_ruangan"];
		$this->id_kelas = $post["id_kelas"];
		$this->nama_ruangan = $post["nama_ruangan"];
		$this->db->update($this->_table, $this, array('id_ruangan' => $post['id_ruangan']));
	}

	public function delete($id)		
	{	
		return $this->db->delete($this->_table, array("id_ruangan" => $id));
	}

	public function getCountRuangan()
	{
		$this->db->select('id_ruangan');
		$this->db->from('ruangan');
		return $this->db->count_all_results();
	}

}
