<?php 
	
	class M_profil extends CI_Model {

		public function tampil_data(){
			return $this->db->get('data_profil');
		}

		public function edit_data($where, $table){
			return $this->db->get_where($table, $where);
		}

		public function update_data($where, $data, $table){
			$this->db->where($where);
			$this->db->update($table, $data);
		}

		public function detail_data($id = NULL){
			$query = $this->db->get_where('data_profil', array('id' => $id))->row();
			return $query;
		}

	}



?>