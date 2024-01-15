<?php 
	
	class M_admin extends CI_Model {

		public function hitung_struktur(){
			$this->db->select('*');
			// $this->db->where('id', $id);
			$this->db->from('data_struktur');
			return $this->db->get()->num_rows();
		}

		public function hitung_pengumuman(){
			$this->db->select('*');
			// $this->db->where('id', $id);
			$this->db->from('data_pengumuman');
			return $this->db->get()->num_rows();
		}

		public function hitung_pengaduan(){
			$this->db->select('*');
			// $this->db->where('id', $id);
			$this->db->from('data_pengaduan');
			return $this->db->get()->num_rows();
		}

		public function hitung_pengguna(){
			$this->db->select('*');
			// $this->db->where('id', $id);
			$this->db->from('data_user');
			return $this->db->get()->num_rows();
		}

		


}
?>