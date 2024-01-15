<?php 
	
	class M_pengaduan extends CI_Model {

		public function tampil_data(){
			$this->db->join('data_penduduk', 'data_pengaduan.nik=data_penduduk.nik');
			return $this->db->get('data_pengaduan');
		}

		public function detail_data($id = NULL){
			$this->db->join('data_penduduk', 'data_pengaduan.nik=data_penduduk.nik');
			$query = $this->db->get_where('data_pengaduan', array('id' => $id))->row();
			return $query;
		}

		public function get_keyword($keyword){			
			$this->db->join('data_penduduk', 'data_pengaduan.nik=data_penduduk.nik');
			$this->db->select('*');
			$this->db->from('data_pengaduan');
			$this->db->like('aduan', $keyword);
			return $this->db->get()->result();
		}

	}



?>