<?php 
	
	class M_keterangan extends CI_Model {

		public function tampil_data(){
			$this->db->join('data_penduduk', 'surat_keterangan.nik=data_penduduk.nik');
			$this->db->order_by('tanggal_ajuan', 'DESC');
			return $this->db->get('surat_keterangan');
		}

		// public function detail_data($id = NULL){
		// 	$this->db->join('data_penduduk', 'surat_keterangan.nik=data_penduduk.nik');
		// 	$query = $this->db->get_where('surat_keterangan', array('id' => $id))->row();
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
		public function edit_data($where, $table){
			$this->db->join('data_penduduk', 'surat_keterangan.nik=data_penduduk.nik');
			return $this->db->get_where($table, $where);
			// return $this->db->get('data_profil');
		}

		public function update_data($where, $data, $table){
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
			$this->db->from('surat_keterangan');
			$this->db->like('data_penduduk.nama', $keyword);
			$this->db->or_like('data_penduduk.nik', $keyword);
			$this->db->or_like('id_surat', $keyword);
			$this->db->join('data_penduduk', 'surat_keterangan.nik=data_penduduk.nik');
			return $this->db->get()->result();
		}

		public function getData($id = NULL)
		{
			$this->db->join('data_penduduk', 'surat_keterangan.nik=data_penduduk.nik');
			$data_keterangan = $this->db->get_where('surat_keterangan', array('id' => $id));
			return $data_keterangan->result();
		}
		

		// public function cetak_data($id = NULL){
		// 	$this->db->join('data_penduduk', 'surat_keterangan.nik=data_penduduk.nik');
		// 	$query = $this->db->get_where('surat_keterangan', array('id' => $id))->row();
		// 	return $query;
		// }



	}



?>