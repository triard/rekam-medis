<?php
class Diagnosa_model extends CI_Model
{
	private $_table = "diagnosa";
	
	public $id_diagnosa;
	public $id_pasien_masuk;
	public $nama_penyakit;
	public $tindakan;
	public $nama_obat;
	public $bulan_buat;

	public function rules()
	{
		return[
			[
				'field' => 'id_pasien_masuk',
				'label' => 'id_pasien_masuk',
				'rules' => 'required'	
			],
			[
				'field' => 'nama_penyakit',
				'label' => 'nama_penyakit',
				'rules' => 'required'	
			],
			[
				'field' => 'tindakan',
				'label' => 'tindakan',
				'rules' => 'required'	
			],
			[
				'field' => 'nama_obat',
				'label' => 'nama_obat',
				'rules' => 'required'	
			]
			];
	}

	public function getAll()
	{
		$this->db->select('p.nama_user,ps.nomor_rekam_medis,d.nama_penyakit,d.tindakan,d.nama_obat,d.id_diagnosa,ps.id_pasien_masuk,d.bulan_buat');
        $this->db->from('diagnosa as d');
		$this->db->join('pasien_masuk as ps', 'd.id_pasien_masuk = ps.id_pasien_masuk');
		$this->db->join('users as p','ps.id_pasien = p.user_id');
         return $this->db->get()->result();
	}


	public function getById($id)
	{
		return $this->db->get_where($this->_table, ["id_diagnosa"=> $id])->row();
	}

	public function save()
	{
		$post = $this->input->post();
		$this->id_pasien_masuk = $post["id_pasien_masuk"];
		$this->nama_penyakit = $post["nama_penyakit"];
		$this->tindakan = $post["tindakan"];
		$this->nama_obat = $post["nama_obat"];
		$this->bulan_buat = $post["bulan_buat"];
		$this->db->insert($this->_table, $this);
	}

	public function update()
	{
		$post = $this->input->post();
		$this->id_diagnosa = $post["id_diagnosa"];
		$this->id_pasien_masuk = $post["id_pasien_masuk"];
		$this->nama_penyakit = $post["nama_penyakit"];
		$this->tindakan = $post["tindakan"];
		$this->nama_obat = $post["nama_obat"];
		$this->bulan_buat = $post["bulan_buat"];
		$this->db->update($this->_table, $this, array('id_diagnosa' => $post['id_diagnosa']));
	}

	public function delete($id)		
	{	
		return $this->db->delete($this->_table, array("id_diagnosa" => $id));
	}

	public function getCountDiagnosa()
	{
		$this->db->select('id_diagnosa');
		$this->db->from('diagnosa');
		return $this->db->count_all_results();
	}

	function cari_bulan() {
		$this->db->select("*");
		$this->db->from('diagnosa as d');
		$this->db->join('pasien_masuk as ps', 'd.id_pasien_masuk = ps.id_pasien_masuk');
		$this->db->join('users as p','ps.id_pasien = p.user_id');
		$this->db->where('d.bulan_buat', $this->input->post('bulan'));
		$this->db->where('d.tahun_buat', $this->input->post('tahun'));
        $getData = $this->db->get();
        if($getData->num_rows() > 0)
        return $getData->result();
        else
        return null;
	} 
	
	function cari_tanggal() {
		$this->db->select("*");
		$this->db->from('diagnosa as d');
		$this->db->join('pasien_masuk as ps', 'd.id_pasien_masuk = ps.id_pasien_masuk');
		$this->db->join('users as p','ps.id_pasien = p.user_id');
        $this->db->where('d.tgl_buat', $this->input->post('tanggal'));
        $getData = $this->db->get();
        if($getData->num_rows() > 0)
        return $getData->result();
        else
        return null;
	} 
	
	function cari_tahun() {
		$this->db->select("*");
		$this->db->from('diagnosa as d');
		$this->db->join('pasien_masuk as ps', 'd.id_pasien_masuk = ps.id_pasien_masuk');
		$this->db->join('users as p','ps.id_pasien = p.user_id');
        $this->db->where('d.tahun_buat', $this->input->post('tahun'));
        $getData = $this->db->get();
        if($getData->num_rows() > 0)
        return $getData->result();
        else
        return null;
    } 
}
