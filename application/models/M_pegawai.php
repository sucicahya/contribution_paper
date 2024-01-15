<?php 
	
	class M_pegawai extends CI_Model {

		public function hitung_penduduk(){
			$this->db->select('*');
			// $this->db->where('id', $id);
			$this->db->from('data_penduduk');
			$this->db->where('status_kependudukan','Aktif');
			return $this->db->get()->num_rows();
		}

		// public function hitung_surat(){
		// 	$this->db->select('*');
		// 	// $this->db->where('id', $id);
		// 	$this->db->from('data_surat');
		// 	return $this->db->get()->num_rows();
		// }

		public function hitung_aset(){
			$this->db->select('*');
			// $this->db->where('id', $id);
			$this->db->from('data_aset');
			return $this->db->get()->num_rows();
		}

		public function hitung_apbdes(){
			return $this->db->get('data_apbd');
		}

		public function hitung_pendapatan(){
	        $this->load->helper('date');
	        $format = "%Y";
			$this->db->select('pemasukan');
			// $this->db->where('id', $id);
			// $this->db->from('data_apbd');
			$this->db->where('uraian', 'Sumber Pendapatan Desa');
			$this->db->where('YEAR(tanggal)', mdate($format));
			return $this->db->get('data_apbd');
		}

		public function hitung_belanja(){
	        $this->load->helper('date');
	        $format = "%Y";
			$this->db->select('*');
			// $this->db->where('id', $id);
			$this->db->from('data_apbd');
			$this->db->where('uraian', 'Belanja Desa');
			$this->db->where('YEAR(tanggal)', mdate($format));
			return $this->db->get();
		}

		public function hitung_kelahiran(){
			$this->db->select('*');
			// $this->db->where('id', $id);
			$this->db->from('surat_kelahiran');
			return $this->db->get()->num_rows();
		}

		public function hitung_kematian(){
			$this->db->select('*');
			// $this->db->where('id', $id);
			$this->db->from('surat_kematian');
			return $this->db->get()->num_rows();
		}

		public function hitung_jejaka_duda(){
			$this->db->select('*');
			// $this->db->where('id', $id);
			$this->db->from('surat_lajang');
			$this->db->where('jenis_surat', 'surat jejaka duda');
			return $this->db->get()->num_rows();
		}

		public function hitung_perawan_janda(){
			$this->db->select('*');
			// $this->db->where('id', $id);
			$this->db->from('surat_lajang');
			$this->db->where('jenis_surat', 'surat perawan janda');
			return $this->db->get()->num_rows();
		}

		public function hitung_keterangan(){
			$this->db->select('*');
			// $this->db->where('id', $id);
			$this->db->from('surat_keterangan');
			return $this->db->get()->num_rows();
		}

		public function hitung_pindah_kelurahan(){
			$this->db->select('*');
			// $this->db->where('id', $id);
			$this->db->from('surat_pindah');
			$this->db->where('jenis_surat', 'surat pindah kelurahan');
			return $this->db->get()->num_rows();
		}

		public function hitung_pindah_kecamatan(){
			$this->db->select('*');
			// $this->db->where('id', $id);
			$this->db->from('surat_pindah');
			$this->db->where('jenis_surat', 'surat pindah kecamatan');
			return $this->db->get()->num_rows();
		}

		public function hitung_pindah_kabupaten(){
			$this->db->select('*');
			// $this->db->where('id', $id);
			$this->db->from('surat_pindah');
			$this->db->where('jenis_surat', 'surat pindah kabupaten');
			return $this->db->get()->num_rows();
		}

		public function grafik()
	    {
	        $this->db->group_by('jenis_surat');
	        $this->db->select('jenis_surat');
	        $this->db->select("count(*) as total");
	        return $this->db->from('data_surat')->get()->result();
	    }

		public function grafikk()
	    {
	        $this->db->group_by("DATE_FORMAT(tanggal_ajuan,' %M %Y')");
	        $this->db->select("DATE_FORMAT(tanggal_ajuan,' %M %Y') as bulan");
	        $this->db->select("count(*) as total");
	        $this->db->order_by("tanggal_ajuan", "ASC");
	        return $this->db->from('data_surat')->get()->result();
	    }

	    public function tampil_apbd(){
			$this->db->order_by("tanggal_ajuan", "desc");
			return $this->db->get('data_surat');
		}

		// public function ambil_data($daterange){
		// 	$this->db->select('*');
		// 	$this->db->from('data_apbd');
		// 	$this->db->where('tanggal >=', $daterange[0]);
		// 	$this->db->where('tanggal <=', $daterange[1]);
		// 	$this->db->order_by("uraian", "asc");
		// 	return $this->db->get()->result();
		// }

		public function ambil_data($daterange){
			$this->db->select('*');
	        $this->db->select("count(*) as total");
			$this->db->from('data_surat');
			$this->db->where('tanggal_ajuan >=', $daterange[0]);
			$this->db->where('tanggal_ajuan <=', $daterange[1]);
			// $this->db->order_by("DATE_FORMAT(tanggal_ajuan,' %M %Y')");
			// $this->db->group_by("DATE_FORMAT(tanggal_ajuan,' %Y')");
			$this->db->group_by("jenis_surat");
			$this->db->order_by("jenis_surat", "asc");
			return $this->db->get()->result();
		}

		public function ambil_dataa($daterange){
			$this->db->select('*');
	        $this->db->select("count(*) as total");
	        $this->db->select("DATE_FORMAT(tanggal_ajuan,' %M %Y') as bulan");
			$this->db->from('data_surat');			
			$this->db->where('tanggal_ajuan >=', $daterange[0]);
			$this->db->where('tanggal_ajuan <=', $daterange[1]);
			// $this->db->where("DATE_FORMAT(tanggal_ajuan,'%m %y') >=", date('m-y',strtotime($daterange[0])));
			// $this->db->where("DATE_FORMAT(tanggal_ajuan,'%m %y') <=", date('m-y',strtotime($daterange[1])));
			$this->db->order_by("tanggal_ajuan", "ASC");
			// $this->db->group_by("DATE_FORMAT(tanggal_ajuan,' %Y')");
			$this->db->group_by("DATE_FORMAT(tanggal_ajuan,' %M %Y')");
			// $this->db->order_by("DATE_FORMAT(tanggal_ajuan,'%m %y')", "asc");
			return $this->db->get()->result();
		}

		public function ambil_total_data($daterange){
			$this->db->select('*');
	        $this->db->select("count(*) as jumlah");
			$this->db->from('data_surat');
			$this->db->where('tanggal_ajuan >=', $daterange[0]);
			$this->db->where('tanggal_ajuan <=', $daterange[1]);
			// $this->db->order_by("DATE_FORMAT(tanggal_ajuan,' %M %Y')");
			// $this->db->group_by("DATE_FORMAT(tanggal_ajuan,' %Y')");
			// $this->db->group_by("jenis_surat");
			// $this->db->order_by("DATE_FORMAT(tanggal_ajuan,' %Y')", "asc");
			return $this->db->get()->result();
		}

		public function ambil_min_data(){
			// $this->db->select('*');
	        $this->db->select("min('tanggal_ajuan')");
	        // $this->db->select("count(*) as total");
			$this->db->from('data_surat');
			// $this->db->where("min('tanggal_ajuan') as min");
			// $this->db->where("max('tanggal_ajuan') as max");
			// select MIN(tanggal_ajuan) AS MinDate,MAX(tanggal_ajuan) AS MaxDate from data_surat;
			// $this->db->order_by("DATE_FORMAT(tanggal_ajuan,' %M %Y')");
			// $this->db->group_by("jenis_surat");
			return $this->db->get()->num_rows();
		}

		public function ambil_max_data(){
			// $this->db->select('*');
	        $this->db->select("max('tanggal_ajuan')");
	        // $this->db->select("count(*) as total");
			$this->db->from('data_surat');
			// $this->db->where("min('tanggal_ajuan') as min");
			// $this->db->where("max('tanggal_ajuan') as max");
			// select MIN(tanggal_ajuan) AS MinDate,MAX(tanggal_ajuan) AS MaxDate from data_surat;
			// $this->db->order_by("DATE_FORMAT(tanggal_ajuan,' %M %Y')");
			// $this->db->group_by("jenis_surat");
			return $this->db->get()->num_rows();
		}


}
?>