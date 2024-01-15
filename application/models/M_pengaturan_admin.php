<?php 
	
	class M_pengaturan_admin extends CI_Model {

		public function update_data($table, $data, $where){
			$this->db->update($table, $data, $where);
		}

	}



?>