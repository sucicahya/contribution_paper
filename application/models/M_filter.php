<?php 
	
	class M_filter extends CI_Model {

		// var $table = 'cek', 'data_regional', 'data_kantor';

		public function tampil_data(){
			// require FCPATH . 'vendor/autoload.php';

			// return $this->db->get('inventory');
			$this->db->join('data_regional', 'cek.Regional = data_regional.id_regional');			
			$this->db->join('data_kantor', 'cek.Kantor=data_kantor.id_kantor');
			$this->db->where('id_kantor', '1');
			// $this->db->join('data_penduduk', 'surat_pindah.nik=data_penduduk.nik');
			return $this->db->get('cek');
			// $query = $this->db->query("SELECT * FROM cek, data_regional, data_kantor WHERE cek.Regional = data_regional.id_regional AND cek.Kantor=data_kantor.id_kantor");
			// return $this->db->get('cek');
		}

		public function getdatareg(){
			$query = $this->db->query("SELECT * FROM data_regional");
			return $query->result();
		}

		public function filter_data(){
			$this->db->join('data_regional', 'cek.Regional = data_regional.id_regional');			
			$this->db->join('data_kantor', 'cek.Kantor=data_kantor.id_kantor');
			// $this->db->join('data_penduduk', 'surat_pindah.nik=data_penduduk.nik');
			return $this->db->get('cek');
		}

		public function getdataktr($id_regional){
			$query = $this->db->query("SELECT * FROM data_kantor WHERE id_regional = '$id_regional' ORDER BY kantor ASC");
			return $query->result();
		}

	}



?>