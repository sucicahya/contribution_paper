<?php 
	
	class M_pengguna extends CI_Model {

		var $table = 'data_user';

		public function tampil_data(){
			return $this->db->get('data_user');
		}

		public function input_data($data){
			$this->db->insert($this->table, $data);
			return $this->db->insert_id();
			// $this->db->insert('data_user', $data);
		}

		public function hapus_data($where, $table){
			$this->db->where($where);
			$this->db->delete($table);
		}

		public function edit_data($where, $table){
			return $this->db->get_where($table, $where);
		}

		public function update_data($where, $data, $table){
			$this->db->where($where);
			$this->db->update($table, $data);
		}

		public function get_keyword($keyword){
			$this->db->select('*');
			$this->db->from('data_user');
			$this->db->like('nama', $keyword);
			$this->db->or_like('username', $keyword);
			$this->db->or_like('level', $keyword);
			return $this->db->get()->result();
		}

	}



?>