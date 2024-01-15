<?php 
	
	class M_pengumuman extends CI_Model {

		var $table = 'data_pengumuman';

		public function tampil_data(){
			return $this->db->get('data_pengumuman');
		}

		public function input_data($data){
			// $this->db->insert('data_pengumuman', $data);
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

		// public function get_by_id($id)
		// {
		// 	$this->db->from($this->table);
		// 	$this->db->where('id',$id);
		// 	$query = $this->db->get();

		// 	return $query->row();
		// }

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
			$query = $this->db->get_where('data_pengumuman', array('id' => $id))->row();
			return $query;
		}

		public function get_keyword($keyword){
			$this->db->select('*');
			$this->db->from('data_pengumuman');
			$this->db->like('id', $keyword);
			$this->db->or_like('judul', $keyword);
			$this->db->or_like('deskripsi', $keyword);
			$this->db->or_like('gambar', $keyword);
			return $this->db->get()->result();
		}

	}



?>