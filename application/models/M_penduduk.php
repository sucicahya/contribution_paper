<?php 
	
	class M_penduduk extends CI_Model {

		var $table = 'data_penduduk';

		public function tampil_data(){
			return $this->db->get('data_penduduk');
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

		public function detail_data($nik = NULL){
			$query = $this->db->get_where('data_penduduk', array('nik' => $nik))->row();
			return $query;
		}

		public function get_keyword($keyword){
			$this->db->select('*');
			$this->db->from('data_penduduk');
			$this->db->like('nik', $keyword);
			$this->db->or_like('nama', $keyword);
			$this->db->or_like('no_kk', $keyword);
			$this->db->or_like('jenis_kelamin', $keyword);
			$this->db->or_like('rt', $keyword);
			$this->db->or_like('status_perkawinan', $keyword);
			$this->db->or_like('tempat_lahir', $keyword);
			$this->db->or_like('tanggal_lahir', $keyword);
			$this->db->or_like('agama', $keyword);
			$this->db->or_like('pendidikan_terakhir', $keyword);
			$this->db->or_like('pekerjaan', $keyword);
			$this->db->or_like('kewarganegaraan', $keyword);
			$this->db->or_like('alamat_lengkap', $keyword);
			$this->db->or_like('rw', $keyword);
			$this->db->or_like('dusun', $keyword);
			$this->db->or_like('kedudukan_dalam_keluarga', $keyword);
			$this->db->or_like('jkn', $keyword);
			$this->db->or_like('nama_ibu', $keyword);
			$this->db->or_like('keterangan', $keyword);
			return $this->db->get()->result();
		}

	}



?>