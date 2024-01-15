<?php 
	
	class M_home extends CI_Model {

		public function tampil_apbd(){
			$this->db->order_by("tanggal", "desc");
			return $this->db->get('data_apbd');
		}

		public function hitung_pendapatan(){
	        $this->load->helper('date');
	        $format = "%Y";
			$this->db->select('*');
			// $this->db->where('id', $id);
			// $this->db->from('data_apbd');
			$this->db->where('pengeluaran', NULL);
			$this->db->where('YEAR(tanggal)', mdate($format));
			$this->db->or_where('pengeluaran', "0");
			$this->db->where('YEAR(tanggal)', mdate($format));
			$this->db->order_by("pengeluaran", "asc");
			return $this->db->get('data_apbd');
		}

		public function hitung_belanja(){
	        $this->load->helper('date');
	        $format = "%Y";
			$this->db->select('*');
			// $this->db->where('id', $id);
			$this->db->where('pemasukan', NULL);
			// $this->db->from('data_apbd');
			// $this->db->where('uraian', 'Belanja Desa');
			$this->db->where('YEAR(tanggal)', mdate($format));
			$this->db->or_where('pemasukan', "0");
			$this->db->where('YEAR(tanggal)', mdate($format));
			$this->db->order_by("pemasukan", "asc");
			return $this->db->get('data_apbd');
		}

		public function ambil_data($daterange){
			$this->db->select('*');
			$this->db->from('data_apbd');
			$this->db->where('tanggal >=', $daterange[0]);
			$this->db->where('tanggal <=', $daterange[1]);
			$this->db->order_by("uraian", "asc");
			return $this->db->get()->result();
		}

		public function tampil_aset(){
			return $this->db->get('data_aset');
		}

		public function tampil_pengumuman(){
			return $this->db->get('data_pengumuman');
		}

		public function tampil_struktur(){
			return $this->db->get('data_struktur');
		}

		public function input_data($data){
			$this->db->insert('data_pengaduan', $data);
		}

		///////SURAT/////////

		public function input_data_surat($data){
			$this->db->insert('data_surat', $data);
		}

		// public function tampil_data(){
		// 	$this->db->join('surat_jejaka_duda', 'data_surat.id_surat=surat_jejaka_duda.id_surat');
		// 	return $this->db->get('data_surat');
		// }

		public function findById($id_surat)
	    {
	        $query = $this->db->get_where('data_surat', ['id_surat' => $id_surat])->row_array();
	        return $query;
	    }

	    public function showById($id_surat)
	    {
	        $this->db->select('*');
	        $this->db->join('data_penduduk','data_penduduk.nik=data_surat.nik');
	        $query = $this->db->get_where('data_surat', ['id_surat' => $id_surat])->row_array();
	        return $query;
	    }

		// public function get_keyword($keyword){
		// 	$this->db->select('*');
		// 	$this->db->from('data_surat');
		// 	$this->db->like('id_surat', $keyword);
		// 	return $this->db->get()->result();
		// }

		///////JENIS SURAT/////////

		public function input_data_kelahiran($data){
			$this->db->insert('surat_kelahiran', $data);
		}

		public function input_data_kematian($data){
			$this->db->insert('surat_kematian', $data);
		}

		public function nikAvailability($nik)
		{
		    $this->db->where('nik',$nik);
		    $query  =   $this->db->get('data_penduduk');
		    return $query->row();
		}

		public function nik_jenazahAvailability($nik_jenazah)
		{
		    $this->db->where('nik',$nik_jenazah);
		    $query  =   $this->db->get('data_penduduk');
		    return $query->row();
		}

		public function nik_pelaporAvailability($nik_pelapor)
		{
		    $this->db->where('nik',$nik_pelapor);
		    $query  =   $this->db->get('data_penduduk');
		    return $query->row();
		}

		// public function flattenArray(array $array){
		// 	$return = array();
		// 	array_walk_recursive($array, function($value) use (&$return){$return[] = $value; }); 
		// 	return $return;
		// }

		// public function in_array_r($needle, $haystack, $strict = false){
		// 	foreach($haystack as $item){
		// 		if (($strict ? $item === $needle : $item == $needle)) || (is_array($item) && in_array_r($needle, $item, $strict))) {
		// 			return TRUE;
		// 		}
		// 	}
		// 	return FALSE;
		// }

		// public function nik_pindahAvailability($nik_pindah)
		// {
		// 	$query = $this->db->query("SELECT nik FROM data_penduduk")->result_array();
		// 	$values = $nik_pindah; /// implode('|', $nik_pindah);
		// 	// $names = array($nik_pindah);
		// 	// $this->db->where_in('nik', $values);
		//  //    // $this->db->where('nik',$nik_pindah);
		//  //    $query  =   $this->db->get('data_penduduk');
		//  //    return $query->row();
		// 	// $array_one_dimensional = flattenArray($query);
		// 	// $result = array_intersect($query,$values);
		// 	// print_r($array_one_dimensional); 
		// 	// print_r($values);
		// 	// print_r($result);
		// 	// echo in_array_r('3314065608010001', $query) ? 'found' : 'not found';

		//     // if ($result) {
		//     // 	echo "tidak sesuai";
		//     // } else {
		//     // 	echo "sesuai";
		//     // }

		//     foreach ($query as $key => $value) {
		//     	// print_r($value);
		//     	// print_r($values);
		//     	$result = array_intersect($value,$values);
		//     	// $a = print_r($result);
		//     	$a = !empty($result);
		//     	$b = empty($result);
		//     	if ($a) {
		//     		echo "bb";
		//     	}
		    	
		//     }
		//     // if (isset($a)) {
		// 	   //  	echo "tidak sesuai";
		// 	   //  } else {
		// 	   //  	echo "sesuai";
		// 	   //  }
		// }

		public function nik_saksi_satuAvailability($nik_saksi_satu)
		{
		    $this->db->where('nik',$nik_saksi_satu);
		    $query  =   $this->db->get('data_penduduk');
		    return $query->row();
		}

		public function nik_saksi_duaAvailability($nik_saksi_dua)
		{
		    $this->db->where('nik',$nik_saksi_dua);
		    $query  =   $this->db->get('data_penduduk');
		    return $query->row();
		}

		public function nik_satuAvailability($nik_satu)
		{
		    $this->db->where('nik',$nik_satu);
		    $query  =   $this->db->get('data_penduduk');
		    return $query->row();
		}

		public function nik_duaAvailability($nik_dua)
		{
		    $this->db->where('nik',$nik_dua);
		    $query  =   $this->db->get('data_penduduk');
		    return $query->row();
		}

		public function nik_tigaAvailability($nik_tiga)
		{
		    $this->db->where('nik',$nik_tiga);
		    $query  =   $this->db->get('data_penduduk');
		    return $query->row();
		}

		public function nik_empatAvailability($nik_empat)
		{
		    $this->db->where('nik',$nik_empat);
		    $query  =   $this->db->get('data_penduduk');
		    return $query->row();
		}

		public function nik_limaAvailability($nik_lima)
		{
		    $this->db->where('nik',$nik_lima);
		    $query  =   $this->db->get('data_penduduk');
		    return $query->row();
		}

		public function nik_enamAvailability($nik_enam)
		{
		    $this->db->where('nik',$nik_enam);
		    $query  =   $this->db->get('data_penduduk');
		    return $query->row();
		}

		public function input_data_lajang($data){
			$this->db->insert('surat_lajang', $data);
		}

		public function input_data_perawan_janda($data){
			$this->db->insert('surat_perawan_janda', $data);
		}

		public function tampil_data_jejaka_duda(){
			// $this->db->join('data_penduduk', 'surat_jejaka_duda.nik=data_penduduk.nik');
			return $this->db->get('data_profil');
			// return $this->db->get('data_aset');
		}

		public function input_data_jejaka_duda($data){
			$this->db->insert('surat_jejaka_duda', $data);
		}

		// public function findById_jejaka_duda($id)
	 //    {
	 //        $query = $this->db->get_where('surat_jejaka_duda', ['id' => $id])->row_array();
	 //        return $query;
	 //    }

	 //    public function showById_jejaka_duda($id)
	 //    {
	 //        $this->db->select('*');
	 //        $this->db->join('data_penduduk', 'surat_jejaka_duda.nik=data_penduduk.nik');
	 //        $query = $this->db->get_where('surat_jejaka_duda', ['id' => $id])->row_array();
	 //        return $query;
	 //    }

		public function input_data_keterangan($data){
			$this->db->insert('surat_keterangan', $data);
		}

		// public function input_data_ktp($data){
		// 	$this->db->insert('surat_ktp', $data);
		// }

		public function input_data_pindah($data){
			$this->db->insert('surat_pindah', $data);
		}

		public function tampil_data_pindah_kelurahan(){
			// $this->db->join('data_penduduk', 'surat_jejaka_duda.nik=data_penduduk.nik');
			return $this->db->get('data_profil');
			// return $this->db->get('data_aset');
		}

		public function input_data_pindah_kelurahan($data){
			// $this->db->join('data_penduduk', 'surat_jejaka_duda.nik=data_penduduk.nik');
			// $this->db->get('data_profil');
			$this->db->insert('surat_pindah_kelurahan', $data);
		}

		public function tampil_data_pindah_kecamatan(){
			// $this->db->join('data_penduduk', 'surat_jejaka_duda.nik=data_penduduk.nik');
			return $this->db->get('data_profil');
			// return $this->db->get('data_aset');
		}

		public function input_data_pindah_kecamatan($data){
			$this->db->insert('surat_pindah_kecamatan', $data);
		}

		public function tampil_data_pindah_kabupaten(){
			// $this->db->join('data_penduduk', 'surat_jejaka_duda.nik=data_penduduk.nik');
			return $this->db->get('data_profil');
			// return $this->db->get('data_aset');
		}

		public function input_data_pindah_kabupaten($data){
			$this->db->insert('surat_pindah_kabupaten', $data);
		}

		

	}



?>