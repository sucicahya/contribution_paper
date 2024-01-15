<?php 
	
	class M_apbd extends CI_Model {

		var $table = 'data_apbd';

		public function tampil_data(){
			return $this->db->get('data_apbd');
		}

		public function input_data($data){
			// $this->db->insert('data_apbd', $data);
			$this->db->insert($this->table, $data);
			return $this->db->insert_id();
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

		public function detail_data($id = NULL){
			$query = $this->db->get_where('data_apbd', array('id' => $id))->row();
			return $query;
		}

	}



?>