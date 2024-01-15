<?php 
	
	class M_jejaka_duda extends CI_Model {

		public function tampil_data(){
			$this->db->join('data_penduduk', 'surat_lajang.nik=data_penduduk.nik');
			$this->db->order_by('tanggal_ajuan', 'DESC');
			return $this->db->get_where('surat_lajang', array('jenis_surat' => 'surat jejaka/duda'));
		}

		// public function detail_data($id = NULL){
		// 	$this->db->join('data_penduduk', 'surat_lajang.nik=data_penduduk.nik');
		// 	$query = $this->db->get_where('surat_lajang', array('id' => $id))->row();
		// 	return $query;
		// }

		public function nikAvailability($nik)
		{
		    $this->db->where('nik',$nik);
		    $query  =   $this->db->get('data_penduduk');
		    return $query->row();
		}

		public function nik_saksi_satuAvailability($nik_saksi_satu)
		{
		    $this->db->where('nik',$nik_saksi_satu);
		    $query  =   $this->db->get('data_penduduk');
		    return $query->row();
		}

		public function nik_saksi_duaAvailability($nik_saksi_dua)
		{
		    $this->db->where('nik',$nik_saksi_dua);
		    $query  =   $this->db->get('data_penduduk');
		    return $query->row();
		}

		public function edit_data($where, $table){
			$this->db->join('data_penduduk', 'surat_lajang.nik=data_penduduk.nik');
			return $this->db->get_where($table, $where);
		}

		public function update_data($where, $data, $table){
			$this->db->where($where);
			$this->db->update($table, $data);
		}

		public function edit_data_saksi_satu($where, $table){
			$this->db->join('data_penduduk', 'surat_lajang.nik_saksi_satu=data_penduduk.nik');
			return $this->db->get_where($table, $where);
		}

		public function update_data_saksi_satu($where, $data, $table){
			$this->db->where($where);
			$this->db->update($table, $data);
		}

		public function edit_data_saksi_dua($where, $table){
			$this->db->join('data_penduduk', 'surat_lajang.nik_saksi_dua=data_penduduk.nik');
			return $this->db->get_where($table, $where);
		}

		public function update_data_saksi_dua($where, $data, $table){
			$this->db->where($where);
			$this->db->update($table, $data);
		}

		public function edit_data_surat($where, $table){
			return $this->db->get_where($table, $where);
		}

		public function update_data_surat($where, $data, $table){
			$this->db->where($where);
			$this->db->update($table, $data);
		}
		
		public function hapus_data($where, $table){
			$this->db->where($where);
			$this->db->delete($table);
		}

		public function get_keyword($keyword){
			$this->db->select('*');
			$this->db->from('surat_lajang');
			$this->db->where('jenis_surat', 'surat jejaka/duda');
			$this->db->like('data_penduduk.nama', $keyword);
			$this->db->or_like('data_penduduk.nik', $keyword);
			$this->db->or_like('id_surat', $keyword);
			$this->db->join('data_penduduk', 'surat_lajang.nik=data_penduduk.nik');
			return $this->db->get()->result();
		}

		public function getData($id_surat_lajang = NULL)
		{
			$this->db->join('data_penduduk', 'surat_lajang.nik=data_penduduk.nik');
			$data_lajang = $this->db->get_where('surat_lajang', array('id_surat_lajang' => $id_surat_lajang));
			return $data_lajang->result();
		}

	}



?>