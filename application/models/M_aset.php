<?php 
	
	class M_aset extends CI_Model {

		var $table = 'data_aset';

		public function tampil_data(){
			return $this->db->get('data_aset');
		}

		public function input_data($data){
			// $this->db->insert('data_aset', $data);
			$this->db->insert($this->table, $data);
			return $this->db->insert_id();
		}

		// public function hapus_data($where, $table){
		// 	$this->db->where($where);
		// 	$this->db->delete($table);
		// }

		public function edit_data($where, $table){
			return $this->db->get_where($table, $where);
		}

		public function update_data($where, $data, $table){
			$this->db->where($where);
			$this->db->update($table, $data);
		}

		// public function edit_gambar_data($where, $table){
		// 	return $this->db->get_where($table, $where);
		// }

		// public function update_gambar_data($where, $data, $table){
		// 	$this->db->where($where);
		// 	$this->db->update($table, $data);
		// }

		public function detail_data($id = NULL){
			$query = $this->db->get_where('data_aset', array('id' => $id))->row();
			return $query;
		}

		public function get_keyword($keyword){
			$this->db->select('*');
			$this->db->from('data_aset');
			$this->db->like('id', $keyword);
			$this->db->or_like('jenis_barang', $keyword);
			$this->db->or_like('kode_barang', $keyword);
			$this->db->or_like('identitas_barang', $keyword);
			$this->db->or_like('apbd', $keyword);
			$this->db->or_like('perolehan_lain_yang_sah', $keyword);
			$this->db->or_like('kekayaan_asli_desa', $keyword);
			$this->db->or_like('tanggal_perolehan', $keyword);
			$this->db->or_like('gambar', $keyword);
			return $this->db->get()->result();
		}

	}



?>