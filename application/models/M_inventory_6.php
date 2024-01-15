<?php 
	
	class M_inventory_6 extends CI_Model {

		// var $table = 'cek_tgl_6', 'data_regional', 'data_kantor';

		public function tampil_data(){
			// require FCPATH . 'vendor/autoload.php';

			// return $this->db->get('inventory');
			$this->db->join('data_regional', 'cek_tgl_6.Regional = data_regional.id_regional');			
			$this->db->join('data_kantor', 'cek_tgl_6.Kantor=data_kantor.id_kantor');			
			$this->db->join('data_status', 'cek_tgl_6.Status=data_status.id_status');
			$this->db->order_by('cek_tgl_6.Status', 'asc');
			// $this->db->join('data_penduduk', 'surat_pindah.nik=data_penduduk.nik');
			return $this->db->get('cek_tgl_6');
			// $query = $this->db->query("SELECT * FROM cek_tgl_6, data_regional, data_kantor WHERE cek_tgl_6.Regional = data_regional.id_regional AND cek_tgl_6.Kantor=data_kantor.id_kantor");
			// return $this->db->get('cek_tgl_6');
		}

		public function getStandards(){
			$query = $this->db->get('data_regional');
			if($query->num_rows() > 0){
				return $query->result();
			}
		}

		public function getGender(){
			$query = $this->db->get('data_status');
			if($query->num_rows() > 0){
				return $query->result();
			}
		}

		public function getRecords($standard, $gender){
			$this->db->select('cek_tgl_6.Order_Id, cek_tgl_6.Tanggal, data_regional.regional, data_kantor.kantor, data_kantor.no_pend, cek_tgl_6.Dus, cek_tgl_6.Waktu, data_status.Status, cek_tgl_6.Berita_Acara');
			$this->db->from('cek_tgl_6');
			$this->db->join('data_regional', 'cek_tgl_6.Regional = data_regional.id_regional');		
			$this->db->join('data_kantor', 'cek_tgl_6.Kantor=data_kantor.id_kantor');						
			$this->db->join('data_status', 'cek_tgl_6.Status=data_status.id_status');
			$this->db->where(['data_regional.id_regional'=>$standard, 'data_status.id_status'=>$gender]);
			$query = $this->db->get();
			return $query->result();
		}

		public function getdatareg(){
			$query = $this->db->query("SELECT * FROM data_regional");
			return $query->result();
		}

		public function getFilteredData($regional, $status) {
	        $this->db->select('*'); // Ubah sesuai dengan kolom yang ingin Anda ambil
	        $this->db->from('cek_tgl_6'); // Ganti dengan nama tabel yang sesuai

	        // Filter data berdasarkan id_regional dan id_status yang diterima
	        if ($regional != '') {
	            $this->db->where('Regional', $regional);
	        }
	        if ($status != '') {
	            $this->db->where('Status', $status);
	        }

	        // Lakukan query dan kembalikan hasilnya
	        $query = $this->db->get();
	        return $query->result();
	    }

		public function filter_data(){
			$this->db->join('data_regional', 'cek_tgl_6.Regional = data_regional.id_regional');			
			$this->db->join('data_kantor', 'cek_tgl_6.Kantor=data_kantor.id_kantor');		
			$this->db->join('data_status', 'cek_tgl_6.Status=data_status.id_status');
			$this->db->where('id_regional',$id_regional);
			$this->db->where('id_status',$id_status);
			// $this->db->join('data_penduduk', 'surat_pindah.nik=data_penduduk.nik');
			return $this->db->get('cek_tgl_6');
		}

		public function getdataktr($id_regional){
			$query = $this->db->query("SELECT * FROM data_kantor WHERE id_regional = '$id_regional' ORDER BY kantor ASC");
			return $query->result();
		}

		public function getdatastt($id_regional){
			$query = $this->db->query("SELECT * FROM data_status WHERE id_regional = '$id_regional' ORDER BY status ASC");
			return $query->result();
		}

		public function nikAvailability($nik)
		{
		    $this->db->where('nik',$nik);
		    $query  =   $this->db->get('data_penduduk');
		    return $query->row();
		}

		public function input_data($data){
			// $this->db->insert('data_penduduk', $data);
			$this->db->insert($this->table, $data);
			return $this->db->insert_id();
		}

		public function edit_data($where, $table){
			return $this->db->get_where($table, $where);
		}

		public function update_data($where, $data, $table){
			$this->db->where($where);
			$this->db->update($table, $data);
		}

		public function proses_edit_data($Order_Id){
			$data = [
				"Berita_Acara" => $this->input->post('Berita_Acara'),
				"Status" => 4,
			];

			$this->db->where('Order_Id', $Order_Id);
			$this->db->update("cek_tgl_6", $data);
		}

	}



?>