<?php
class Pkeluar_model extends CI_Model
{
	private $_table = "pasien_keluar";
	
	public $id_pasien_keluar;
	public $id_pasien_masuk;
	public $tanggal_keluar;
	public $kondisi_keluar;
	public $status_pulang;
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
				'field' => 'kondisi_keluar',
				'label' => 'kondisi_keluar',
				'rules' => 'required'	
			],
			[
				'field' => 'status_pulang',
				'label' => 'status_pulang',
				'rules' => 'required'	
			]
			];
	}

	public function getAll()
	{
		$this->db->select('*');
        $this->db->from('pasien_masuk as ps');
		$this->db->join('pasien_keluar as pk', 'ps.id_pasien_masuk = pk.id_pasien_masuk');
		$this->db->join('users as p', 'ps.id_pasien = p.user_id');
		$this->db->join('nomor_ruangan as nr', 'ps.id_nomor_ruangan = nr.id_nomor_ruangan');		
         return $this->db->get()->result();
	}


	public function getById($id)
	{
		return $this->db->get_where($this->_table, ["id_pasien_keluar"=> $id])->row();
	}

	public function save()
	{
		$post = $this->input->post();
		$this->id_pasien_masuk = $post["id_pasien_masuk"];
		$this->kondisi_keluar = $post["kondisi_keluar"];
		$this->status_pulang = $post["status_pulang"];
		$this->bulan_buat = $post["bulan_buat"];
		$this->db->insert($this->_table, $this);
	}

	public function update()
	{
		$post = $this->input->post();
		$this->id_pasien_keluar = $post["id_pasien_keluar"];
		$this->id_pasien_masuk = $post["id_pasien_masuk"];
		$this->kondisi_keluar = $post["kondisi_keluar"];
		$this->status_pulang = $post["status_pulang"];
		$this->bulan_buat = $post["bulan_buat"];
		$this->db->update($this->_table, $this, array('id_pasien_keluar' => $post['id_pasien_keluar']));
	}

	public function delete($id)		
	{	
		return $this->db->delete($this->_table, array("id_pasien_keluar" => $id));
	}

	public function getCountPasienKeluar()
	{
		$this->db->select('id_pasien_keluar');
		$this->db->from('pasien_keluar');
		return $this->db->count_all_results();
	}

	public function getKeluar(){
        $query = $this->db->query("SELECT DATE_FORMAT(tanggal_keluar, '%d/%m/%Y') as tanggal,
		COUNT(id_pasien_keluar) AS jumlah FROM pasien_keluar GROUP BY DATE_FORMAT(tanggal_keluar, '%d/%m/%Y')");
        if($query->num_rows() > 0){
        	    foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

	function cari_bulan() {
		$this->db->select("*");
		$this->db->from('pasien_masuk as ps');
		$this->db->join('pasien_keluar as pk', 'ps.id_pasien_masuk = pk.id_pasien_masuk');
		$this->db->join('users as p', 'ps.id_pasien = p.user_id');
		$this->db->join('nomor_ruangan as nr', 'ps.id_nomor_ruangan = nr.id_nomor_ruangan');
		$this->db->where('pk.bulan_buat', $this->input->post('bulan'));
		$this->db->where('pk.tahun_buat', $this->input->post('tahun'));
        $getData = $this->db->get();
        if($getData->num_rows() > 0)
        return $getData->result();
        else
        return null;
	} 
	
	function cari_tanggal() {
		$this->db->select("*");
		$this->db->from('pasien_masuk as ps');
		$this->db->join('pasien_keluar as pk', 'ps.id_pasien_masuk = pk.id_pasien_masuk');
		$this->db->join('users as p', 'ps.id_pasien = p.user_id');
		$this->db->join('nomor_ruangan as nr', 'ps.id_nomor_ruangan = nr.id_nomor_ruangan');		
        $this->db->where('pk.tgl_buat', $this->input->post('tanggal'));
        $getData = $this->db->get();
        if($getData->num_rows() > 0)
        return $getData->result();
        else
        return null;
	} 
	
	function cari_tahun() {
		$this->db->select("*");
		$this->db->from('pasien_masuk as ps');
		$this->db->join('pasien_keluar as pk', 'ps.id_pasien_masuk = pk.id_pasien_masuk');
		$this->db->join('users as p', 'ps.id_pasien = p.user_id');
		$this->db->join('nomor_ruangan as nr', 'ps.id_nomor_ruangan = nr.id_nomor_ruangan');		
        $this->db->where('pk.tahun_buat', $this->input->post('tahun'));
        $getData = $this->db->get();
        if($getData->num_rows() > 0)
        return $getData->result();
        else
        return null;
	} 
	
	public function getDataKl(){
        $query = $this->db->query("SELECT kondisi_keluar AS kk,COUNT(kondisi_keluar) AS jml_kkeluar 
		FROM pasien_keluar
		GROUP BY kondisi_keluar");          
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
	}
	
	public function getDataSp(){
        $query = $this->db->query("SELECT status_pulang AS sp,COUNT(status_pulang) AS jml_sp 
		FROM pasien_keluar
		GROUP BY status_pulang");          
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
	}
	

	public function getAllData()
	{
		$this->db->select('ps.id_pasien_masuk, ,  ps.nomor_rekam_medis,ps.tanggal_masuk,
		ps.keterangan_pasien,p.nama_user,p.no_ktp,p.tgl_lahir,nr.id_nomor_ruangan,nr.id_ruangan,nr.nomor_ruangan,
		nr.status_ruangan,r.id_ruangan,pk.status_pulang,r.nama_ruangan,p.user_id,l.nama,d.nama_penyakit,d.tindakan,d.nama_obat,pk.tanggal_keluar,pk.kondisi_keluar');
        $this->db->from('users as p');
		$this->db->join('pasien_masuk as ps', 'p.user_id = ps.id_pasien');
		$this->db->join('nomor_ruangan as nr','ps.id_nomor_ruangan = nr.id_nomor_ruangan');
		$this->db->join('ruangan as r','nr.id_ruangan = r.id_ruangan');
		$this->db->join('level as l','r.id_kelas = l.id');
		$this->db->join('diagnosa as d','ps.id_pasien_masuk = d.id_pasien_masuk');
		$this->db->join('pasien_keluar as pk','ps.id_pasien_masuk = pk.id_pasien_masuk','left');
		$this->db->where('pk.id_pasien_keluar!=',NULL);
		return $this->db->get()->result();
	}

	function cari_bulanAll() {
		$this->db->select('ps.id_pasien_masuk, ,  ps.nomor_rekam_medis,ps.tanggal_masuk,
		ps.keterangan_pasien,p.nama_user,p.no_ktp,p.tgl_lahir,nr.id_nomor_ruangan,nr.id_ruangan,nr.nomor_ruangan,
		nr.status_ruangan,r.id_ruangan,pk.status_pulang,r.nama_ruangan,p.user_id,l.nama,d.nama_penyakit,d.tindakan,d.nama_obat,pk.tanggal_keluar,pk.kondisi_keluar');
        $this->db->from('users as p');
		$this->db->join('pasien_masuk as ps', 'p.user_id = ps.id_pasien');
		$this->db->join('nomor_ruangan as nr','ps.id_nomor_ruangan = nr.id_nomor_ruangan');
		$this->db->join('ruangan as r','nr.id_ruangan = r.id_ruangan');
		$this->db->join('level as l','r.id_kelas = l.id');
		$this->db->join('diagnosa as d','ps.id_pasien_masuk = d.id_pasien_masuk');
		$this->db->join('pasien_keluar as pk','ps.id_pasien_masuk = pk.id_pasien_masuk','left');
		$this->db->where('pk.bulan_buat', $this->input->post('bulan'));
		$this->db->where('pk.tahun_buat', $this->input->post('tahun'));
        $getData = $this->db->get();
        if($getData->num_rows() > 0)
        return $getData->result();
        else
        return null;
	} 
	
	function cari_tanggalAll() {
		$this->db->select('ps.id_pasien_masuk, ,  ps.nomor_rekam_medis,ps.tanggal_masuk,
		ps.keterangan_pasien,p.nama_user,p.no_ktp,p.tgl_lahirp.nama_pasien,p.no_KTP,p.tgl_lahir_pasien,nr.id_nomor_ruangan,nr.id_ruangan,nr.nomor_ruangan,
		nr.status_ruangan,r.id_ruangan,pk.status_pulang,r.nama_ruangan,p.user_id,l.nama,d.nama_penyakit,d.tindakan,d.nama_obat,pk.tanggal_keluar,pk.kondisi_keluar');
        $this->db->from('users as p');
		$this->db->join('pasien_masuk as ps', 'p.user_id = ps.id_pasien');
		$this->db->join('nomor_ruangan as nr','ps.id_nomor_ruangan = nr.id_nomor_ruangan');
		$this->db->join('ruangan as r','nr.id_ruangan = r.id_ruangan');
		$this->db->join('level as l','r.id_kelas = l.id');
		$this->db->join('diagnosa as d','ps.id_pasien_masuk = d.id_pasien_masuk');
		$this->db->join('pasien_keluar as pk','ps.id_pasien_masuk = pk.id_pasien_masuk','left');		
        $this->db->where('pk.tgl_buat', $this->input->post('tanggal'));
        $getData = $this->db->get();
        if($getData->num_rows() > 0)
        return $getData->result();
        else
        return null;
	} 
	
	function cari_tahunAll() {
		$this->db->select('ps.id_pasien_masuk, ,  ps.nomor_rekam_medis,ps.tanggal_masuk,
		ps.keterangan_pasien,p.nama_user,p.no_ktp,p.tgl_lahir,nr.id_nomor_ruangan,nr.id_ruangan,nr.nomor_ruangan,
		nr.status_ruangan,r.id_ruangan,pk.status_pulang,r.nama_ruangan,p.user_id,l.nama,d.nama_penyakit,d.tindakan,d.nama_obat,pk.tanggal_keluar,pk.kondisi_keluar');
        $this->db->from('users as p');
		$this->db->join('pasien_masuk as ps', 'p.user_id = ps.id_pasien');
		$this->db->join('nomor_ruangan as nr','ps.id_nomor_ruangan = nr.id_nomor_ruangan');
		$this->db->join('ruangan as r','nr.id_ruangan = r.id_ruangan');
		$this->db->join('level as l','r.id_kelas = l.id');
		$this->db->join('diagnosa as d','ps.id_pasien_masuk = d.id_pasien_masuk');
		$this->db->join('pasien_keluar as pk','ps.id_pasien_masuk = pk.id_pasien_masuk','left');
        $this->db->where('pk.tahun_buat', $this->input->post('tahun'));
        $getData = $this->db->get();
        if($getData->num_rows() > 0)
        return $getData->result();
        else
        return null;
	} 
}
