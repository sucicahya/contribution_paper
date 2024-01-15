<?php 
	
	class M_surat extends CI_Model {

		public function tampil_data(){
			$this->db->join('surat_jejaka_duda', 'data_surat.id_surat=surat_jejaka_duda.id_surat');
			return $this->db->get('data_surat');
		}

		public function input_data($data){
			$this->db->insert('data_surat', $data);
		}

		public function hapus_data($where, $table){
			$this->db->where($where);
			$this->db->delete($table);
		}

		// public function edit_data($where, $table){
		// 	return $this->db->get_where($table, $where);
		// }

		// public function update_data($where, $data, $table){
		// 	$this->db->where($where);
		// 	$this->db->update($table, $data);
		// }

		// public function detail_data($nik = NULL){
		// 	$query = $this->db->get_where('data_penduduk', array('nik' => $nik))->row();
		// 	return $query;
		// }

		public function get_keyword($keyword){
			$this->db->select('*');
			$this->db->from('data_surat');
			$this->db->like('nik', $keyword);
			$this->db->or_like('nama', $keyword);
			$this->db->or_like('jenis_surat', $keyword);
			return $this->db->get()->result();
		}

	}



?>