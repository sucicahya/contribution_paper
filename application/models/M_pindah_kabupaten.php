<?php 
	
	class M_pindah_kabupaten extends CI_Model {

		public function tampil_data(){
			$this->db->join('data_penduduk', 'surat_pindah.nik=data_penduduk.nik');
			$this->db->order_by('tanggal_ajuan', 'DESC');
			return $this->db->get_where('surat_pindah', array('jenis_surat' => 'surat pindah kabupaten'));
		}

		// public function detail_data($id = NULL){
		// 	$this->db->join('data_penduduk', 'surat_pindah_kabupaten.nik=data_penduduk.nik');
		// 	$query = $this->db->get_where('surat_pindah_kabupaten', array('id' => $id))->row();
		// 	return $query;
		// }

		public function nikAvailability($nik)
		{
		    $this->db->where('nik',$nik);
		    $query  =   $this->db->get('data_penduduk');
		    return $query->row();
		}

		public function nik_pindahAvailability($nik_pindah)
		{
		    $this->db->where('nik',$nik_pindah);
		    $query  =   $this->db->get('data_penduduk');
		    return $query->row();
		}

		// public function nik_satuAvailability($nik_satu)
		// {
		//     $this->db->where('nik',$nik_satu);
		//     $query  =   $this->db->get('data_penduduk');
		//     return $query->row();
		// }

		// public function nik_duaAvailability($nik_dua)
		// {
		//     $this->db->where('nik',$nik_dua);
		//     $query  =   $this->db->get('data_penduduk');
		//     return $query->row();
		// }

		// public function nik_tigaAvailability($nik_tiga)
		// {
		//     $this->db->where('nik',$nik_tiga);
		//     $query  =   $this->db->get('data_penduduk');
		//     return $query->row();
		// }

		// public function nik_empatAvailability($nik_empat)
		// {
		//     $this->db->where('nik',$nik_empat);
		//     $query  =   $this->db->get('data_penduduk');
		//     return $query->row();
		// }

		// public function nik_limaAvailability($nik_lima)
		// {
		//     $this->db->where('nik',$nik_lima);
		//     $query  =   $this->db->get('data_penduduk');
		//     return $query->row();
		// }

		// public function nik_enamAvailability($nik_enam)
		// {
		//     $this->db->where('nik',$nik_enam);
		//     $query  =   $this->db->get('data_penduduk');
		//     return $query->row();
		// }

		public function edit_data($where, $table){
			$this->db->join('data_penduduk', 'surat_pindah.nik=data_penduduk.nik');
			return $this->db->get_where($table, $where);
		}

		public function update_data($where, $data, $table){
			$this->db->where($where);
			$this->db->update($table, $data);
		}

		public function edit_data_pindah($where, $table){
			// $this->db->join('nik_pindah', 'surat_pindah.id_surat_pindah=nik_pindah.id_surat');
			return $this->db->get_where($table, $where);


			// $this->db->select('nik_pindah');
			// // $this->db->from($table);
			// $this->db->join('nik_pindah', 'nik_pindah.id_surat=surat_pindah.id_surat_pindah');
			// // $this->db->where_in('surat_pindah.id_surat_pindah', $where);
			// $this->db->group_by('id_surat_pindah');
			// $query = $this->db->get_where($table, $where)->row();
			// print_r($query);
			// // return $query->row();
		}

		public function edit_nik_pindah($wheree, $table)
		{
			$this->db->select('*');
			// $this->db->from($table);
			// $this->db->join('nik_pindah', 'nik_pindah.id_surat=surat_pindah.id_surat_pindah');
			// $this->db->where_in('surat_pindah.id_surat_pindah', $where);
			// $this->db->group_by('id_surat_pindah');
			$query = $this->db->get_where($table, $wheree);
			// print_r($query);
			return $query;
		}

		public function update_data_pindah($where, $data, $table){
			$this->db->where($where);
			$this->db->update($table, $data);
		}

		// public function edit_data_satu($where, $table){
		// 	$this->db->join('data_penduduk', 'surat_pindah.nik_satu=data_penduduk.nik');
		// 	return $this->db->get_where($table, $where);
		// }

		// public function update_data_satu($where, $data, $table){
		// 	$this->db->where($where);
		// 	$this->db->update($table, $data);
		// }

		// public function edit_data_dua($where, $table){
		// 	$this->db->join('data_penduduk', 'surat_pindah.nik_dua=data_penduduk.nik');
		// 	return $this->db->get_where($table, $where);
		// }

		// public function update_data_dua($where, $data, $table){
		// 	$this->db->where($where);
		// 	$this->db->update($table, $data);
		// }

		// public function edit_data_tiga($where, $table){
		// 	$this->db->join('data_penduduk', 'surat_pindah.nik_tiga=data_penduduk.nik');
		// 	return $this->db->get_where($table, $where);
		// }

		// public function update_data_tiga($where, $data, $table){
		// 	$this->db->where($where);
		// 	$this->db->update($table, $data);
		// }

		// public function edit_data_empat($where, $table){
		// 	$this->db->join('data_penduduk', 'surat_pindah.nik_empat=data_penduduk.nik');
		// 	return $this->db->get_where($table, $where);
		// }

		// public function update_data_empat($where, $data, $table){
		// 	$this->db->where($where);
		// 	$this->db->update($table, $data);
		// }

		// public function edit_data_lima($where, $table){
		// 	$this->db->join('data_penduduk', 'surat_pindah.nik_lima=data_penduduk.nik');
		// 	return $this->db->get_where($table, $where);
		// }

		// public function update_data_lima($where, $data, $table){
		// 	$this->db->where($where);
		// 	$this->db->update($table, $data);
		// }

		// public function edit_data_enam($where, $table){
		// 	$this->db->join('data_penduduk', 'surat_pindah.nik_enam=data_penduduk.nik');
		// 	return $this->db->get_where($table, $where);
		// }

		// public function update_data_enam($where, $data, $table){
		// 	$this->db->where($where);
		// 	$this->db->update($table, $data);
		// }

		public function edit_data_surat($where, $table){
			return $this->db->get_where($table, $where);
		}

		public function update_data_surat($where, $data, $table){
			$this->db->where($where);
			$this->db->update($table, $data);
		}
		
		public function hapus_data($where, $table){
			$this->db->where($where);
			$this->db->delete($table);
		}

		public function get_keyword($keyword){
			$this->db->select('*');
			$this->db->from('surat_pindah');
			$this->db->where('jenis_surat', 'surat pindah kabupaten');
			$this->db->like('data_penduduk.nama', $keyword);
			$this->db->or_like('data_penduduk.nik', $keyword);
			$this->db->or_like('id_surat', $keyword);
			$this->db->join('data_penduduk', 'surat_pindah.nik=data_penduduk.nik');
			return $this->db->get()->result();
		}

		public function getData($where, $table)
		{
			$this->db->join('data_penduduk', 'surat_pindah.nik=data_penduduk.nik');
			$data_pindah = $this->db->get_where($table, $where);
			return $data_pindah;
		}

		public function getNik($wheree, $table)
		{
			$this->db->join('nik_pindah', 'surat_pindah.id_surat_pindah=nik_pindah.id_surat');
			$data_pindah = $this->db->get_where($table, $wheree);
			return $data_pindah;
		}

	}



?>