<?php
class NoRuangan_model extends CI_Model
{
	private $_table = "nomor_ruangan";
	private $_table1 = "ruangan";
	
	public $id_nomor_ruangan;
	public $id_ruangan;
	public $nomor_ruangan;
	public $status_ruangan;

	public function rules()
	{
		return[
			[
				'field' => 'id_ruangan',
				'label' => 'id_ruangan',
				'rules' => 'required'	
			],
			[
				'field' => 'nomor_ruangan',
				'label' => 'nomor_ruangan',
				'rules' => 'required'	
			],
			[
				'field' => 'status_ruangan',
				'label' => 'status_ruangan',
				'rules' => 'required'	
			]
			];
	}

	public function getAll()
	{
		$this->db->select('*');
        $this->db->from('ruangan as r');
		$this->db->join('nomor_ruangan as nr', 'r.id_ruangan = nr.id_ruangan');
		$this->db->join('level as l', 'r.id_kelas = l.id');
         return $this->db->get()->result();
	}

	public function getRuangan()
	{
		return $this->db->get($this->_table1)->result();
	}

	public function getById($id)
	{
		return $this->db->get_where($this->_table, ["id_nomor_ruangan"=> $id])->row();
	}

	public function save()
	{
		$post = $this->input->post();
		$this->id_ruangan = $post["id_ruangan"];
		$this->nomor_ruangan = $post["nomor_ruangan"];
		$this->status_ruangan = $post["status_ruangan"];
		$this->db->insert($this->_table, $this);
	}

	public function update()
	{
		$post = $this->input->post();
		$this->id_nomor_ruangan = $post["id_nomor_ruangan"];
		$this->id_ruangan = $post["id_ruangan"];
		$this->nomor_ruangan = $post["nomor_ruangan"];
		$this->status_ruangan = $post["status_ruangan"];
		$this->db->update($this->_table, $this, array('id_nomor_ruangan' => $post['id_nomor_ruangan']));
	}

	public function delete($id)		
	{	
		return $this->db->delete($this->_table, array("id_nomor_ruangan" => $id));
	}

	public function getCountRuangan()
	{
		$query = $this->db->query("SELECT l.nama AS level,COUNT(nr.nomor_ruangan) AS jumlah_bed 
		FROM ruangan AS r
		JOIN nomor_ruangan AS nr 
		ON r.id_ruangan = nr.id_ruangan
		JOIN level AS l
		ON r.id_kelas = l.id
		GROUP BY l.id");
		 return $query->result();
	}

}
