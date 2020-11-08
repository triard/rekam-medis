<?php
class Level_model extends CI_Model
{
	private $_table = "level";
	
	public $id;
	public $nama;

	public function rules()
	{
		return[
			[
				'field' => 'nama',
				'label' => 'nama',
				'rules' => 'required'	
			]
			];
	}

	public function getAll()
	{
//		return $this->db->get($this->_table)->result();
		$this->db->select('*');
		$this->db->from('level');
		$this->db->group_by('id', 'asc');
		return $this->db->get()->result();
		// $query = $this->db->query("SELECT * FROM level GROUP BY id ASC");
		//  return $query->result();
	}

	public function getById($id)
	{
		return $this->db->get_where($this->_table, ["id"=> $id])->row();
	}

	public function save()
	{
		$post = $this->input->post();
		$this->nama = $post["nama"];
		$this->db->insert($this->_table, $this);
	}

	public function update()
	{
		$post = $this->input->post();
		$this->id = $post["id"];
		$this->nama = $post["nama"];
		$this->db->update($this->_table, $this, array('id' => $post['id']));
	}

	public function delete($id)		
	{	
		return $this->db->delete($this->_table, array("id" => $id));
	}

}
