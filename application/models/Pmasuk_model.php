<?php
class Pmasuk_model extends CI_Model
{
	private $_table = "pasien_masuk";
	
	public $id_pasien_masuk;
	public $id_pasien;
	public $id_nomor_ruangan;
	public $nomor_rekam_medis;
	public $keterangan_pasien;
	public $bulan_buat;


	public function rules()
	{
		return[
			
			['field' => 'id_pasien',
			'label' => 'id_pasien',
			'rules' => 'required'],
			
			['field' => 'id_nomor_ruangan',
			'label' => 'id_nomor_ruangan',
			'rules' => 'required'],

			['field' => 'nomor_rekam_medis',
			'label' => 'nomor_rekam_medis',
			'rules' => 'required'],

			['field' => 'keterangan_pasien',
			'label' => 'keterangan_pasien',
			'rules' => 'required']
		];	
	}

	public function getAll()
	{
		$this->db->select('ps.id_pasien_masuk, ps.nomor_rekam_medis,ps.tanggal_masuk,
		ps.keterangan_pasien,p.nama_user,nr.id_nomor_ruangan,nr.id_ruangan,nr.nomor_ruangan,
		nr.status_ruangan,r.id_ruangan,pk.status_pulang,r.nama_ruangan,
		p.user_id,ps.bulan_buat, ps.status_input, l.nama');
        $this->db->from('users as p');
		$this->db->join('pasien_masuk as ps', 'p.user_id = ps.id_pasien');
		$this->db->join('nomor_ruangan as nr','ps.id_nomor_ruangan = nr.id_nomor_ruangan');
		$this->db->join('ruangan as r','nr.id_ruangan = r.id_ruangan');
		$this->db->join('pasien_keluar as pk','ps.id_pasien_masuk = pk.id_pasien_masuk','left');
		$this->db->join('level as l','r.id_kelas = l.id');
		return $this->db->get()->result();
	}

	public function getPas()
	{
		$this->db->select('ps.id_pasien_masuk, ps.nomor_rekam_medis,ps.tanggal_masuk,
		ps.keterangan_pasien,p.nama_user,nr.id_nomor_ruangan,nr.id_ruangan,nr.nomor_ruangan,
		nr.status_ruangan,r.id_ruangan,pk.status_pulang,r.nama_ruangan,p.user_id,ps.bulan_buat,l.nama');
        $this->db->from('users p');
		$this->db->join('pasien_masuk as ps', 'p.user_id = ps.id_pasien');
		$this->db->join('nomor_ruangan as nr','ps.id_nomor_ruangan = nr.id_nomor_ruangan');
		$this->db->join('ruangan as r','nr.id_ruangan = r.id_ruangan');
		$this->db->join('pasien_keluar as pk','ps.id_pasien_masuk = pk.id_pasien_masuk','left');
		$this->db->join('level as l','r.id_kelas = l.id');
		//  $this->db->where('ps.tahun_buat', $this->input->post('tahun'));
		$this->db->where('p.user_id',  $this->session->userdata('user_logged')->user_id);
        $getData = $this->db->get();
        if($getData->num_rows() > 0)
        return $getData->result();
        else
        return null;
	}

	public function getRuangan()
	{
		$this->db->select('*');
        $this->db->from('nomor_ruangan as ns');
		$this->db->join('ruangan as r', 'ns.id_ruangan = r.id_ruangan');
		$this->db->where('status_ruangan','Kosong');
		$this->db->or_where('status_ruangan','null');

         return $this->db->get()->result();
	}

	public function getCountPasienMasuk()
	{
		$this->db->select('nomor_rekam_medis');
		$this->db->from('pasien_masuk');
		return $this->db->count_all_results();
	}

	public function getById($id)
	{
		return $this->db->get_where($this->_table, ["id_pasien"=> $id])->row();
	}

	public function save()
	{
		$post= $this->input->post();
		$this->id_pasien = $post["id_pasien"];
		$this->id_nomor_ruangan = $post["id_nomor_ruangan"];
		$this->nomor_rekam_medis = $post["nomor_rekam_medis"];
		$this->keterangan_pasien = $post["keterangan_pasien"];
		$this->bulan_buat = $post["bulan_buat"];
		$this->status_input = $post["status_input"];
		$this->db->insert($this->_table, $this);
	}

	public function update()
	{
		$post = $this->input->post();
		$this->id_pasien_masuk = $post["id_pasien_masuk"];
		$this->id_pasien = $post["id_pasien"];
		$this->id_nomor_ruangan = $post["id_nomor_ruangan"];
		$this->nomor_rekam_medis = $post["nomor_rekam_medis"];
		$this->keterangan_pasien = $post["keterangan_pasien"];
		$this->bulan_buat = $post["bulan_buat"];
		$this->db->update($this->_table, $this, array('id_pasien_masuk' => $post['id_pasien_masuk']));
	}

	public function delete($id)		
	{	
		$sql = "UPDATE nomor_ruangan SET status_ruangan='Kosong' WHERE id_nomor_ruangan={$id}";
		$this->db->query($sql);
		return $this->db->delete($this->_table, array("id_pasien_masuk" => $id));
	}

	public function getMasuk(){
        $query = $this->db->query("SELECT DATE_FORMAT(tanggal_masuk, '%d/%m/%Y') as tanggal ,COUNT(id_pasien_masuk) AS jumlah FROM pasien_masuk GROUP BY DATE_FORMAT(tanggal_masuk, '%d/%m/%Y')");
          
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

	function cari_bulan() {
		$this->db->select('ps.id_pasien_masuk,ps.nomor_rekam_medis,ps.tanggal_masuk,
		ps.keterangan_pasien,p.nama_user,nr.id_nomor_ruangan,nr.id_ruangan,nr.nomor_ruangan,
		nr.status_ruangan,r.id_ruangan,pk.status_pulang,r.nama_ruangan');
        $this->db->from('users as p');
		$this->db->join('pasien_masuk as ps', 'p.user_id = ps.id_pasien');
		$this->db->join('nomor_ruangan as nr','ps.id_nomor_ruangan = nr.id_nomor_ruangan');
		$this->db->join('ruangan as r','nr.id_ruangan = r.id_ruangan');
		$this->db->join('pasien_keluar as pk','ps.id_pasien_masuk = pk.id_pasien_masuk','left');
		$this->db->where('ps.bulan_buat', $this->input->post('bulan'));
		$this->db->where('ps.tahun_buat', $this->input->post('tahun'));
        $getData = $this->db->get();
        if($getData->num_rows() > 0)
        return $getData->result();
        else
        return null;
	} 
	
	function cari_tanggal() {
		$this->db->select('ps.id_pasien_masuk,ps.nomor_rekam_medis,ps.tanggal_masuk,
		ps.keterangan_pasien,p.nama_user,nr.id_nomor_ruangan,nr.id_ruangan,nr.nomor_ruangan,
		nr.status_ruangan,r.id_ruangan,pk.status_pulang,r.nama_ruangan');
        $this->db->from('users as p');
		$this->db->join('pasien_masuk as ps', 'p.user_id = ps.id_pasien');
		$this->db->join('nomor_ruangan as nr','ps.id_nomor_ruangan = nr.id_nomor_ruangan');
		$this->db->join('ruangan as r','nr.id_ruangan = r.id_ruangan');
		$this->db->join('pasien_keluar as pk','ps.id_pasien_masuk = pk.id_pasien_masuk','left');
        $this->db->where('ps.tgl_buat', $this->input->post('tanggal'));
        $getData = $this->db->get();
        if($getData->num_rows() > 0)
        return $getData->result();
        else
        return null;
	} 
	
	function cari_tahun() {
		$this->db->select('ps.id_pasien_masuk,ps.nomor_rekam_medis,ps.tanggal_masuk,
		ps.keterangan_pasien,p.nama_user,nr.id_nomor_ruangan,nr.id_ruangan,nr.nomor_ruangan,
		nr.status_ruangan,r.id_ruangan,pk.status_pulang,r.nama_ruangan');
        $this->db->from('users as p');
		$this->db->join('pasien_masuk as ps', 'p.user_id = ps.id_pasien');
		$this->db->join('nomor_ruangan as nr','ps.id_nomor_ruangan = nr.id_nomor_ruangan');
		$this->db->join('ruangan as r','nr.id_ruangan = r.id_ruangan');
		$this->db->join('pasien_keluar as pk','ps.id_pasien_masuk = pk.id_pasien_masuk','left');
		 $this->db->where('ps.tahun_buat', $this->input->post('tahun'));
//		$this->db->where('p.user_id', $this->input->post('user_id'));
        $getData = $this->db->get();
        if($getData->num_rows() > 0)
        return $getData->result();
        else
        return null;
    } 

}
