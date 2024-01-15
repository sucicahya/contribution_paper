<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_cp extends CI_Controller {

	// public function __construct(){
	// 		parent::__construct();

	// 		if ($this->session->userdata('level')!='pegawai') {
	// 			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">login dulu<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	// 			redirect ('login');
	// 		}
	// 	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	public function index()
	{
		// $data['dashboard_cp']= $this->M_dashboard_cp->tampil_data()->result();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('dashboard_cp');
		$this->load->view('templates/footer');
		// $data['hitung_penduduk']		= $this->M_pegawai->hitung_penduduk();
		// $data['hitung_surat']		= $this->M_pegawai->hitung_surat();
		// $data['hitung_aset']			= $this->M_pegawai->hitung_aset();
		// $data['hitung_pendapatan']		= $this->M_pegawai->hitung_pendapatan()->result();
		// $data['hitung_belanja']			= $this->M_pegawai->hitung_belanja()->result();
		// $data['hitung_apbdes']			= $this->M_pegawai->hitung_apbdes()->result();
		// $data['hitung_kelahiran']		= $this->M_pegawai->hitung_kelahiran();
		// $data['hitung_kematian']		= $this->M_pegawai->hitung_kematian();
		// $data['hitung_jejaka_duda']		= $this->M_pegawai->hitung_jejaka_duda();
		// $data['hitung_perawan_janda']	= $this->M_pegawai->hitung_perawan_janda();
		// $data['hitung_keterangan']		= $this->M_pegawai->hitung_keterangan();
		// $data['hitung_pindah_kelurahan']= $this->M_pegawai->hitung_pindah_kelurahan();
		// $data['hitung_pindah_kecamatan']= $this->M_pegawai->hitung_pindah_kecamatan();
		// $data['hitung_pindah_kabupaten']= $this->M_pegawai->hitung_pindah_kabupaten();
		// $data['hasil']					= $this->M_pegawai->grafik();
		// $data['home_apbd_rentang']= $this->M_pegawai->tampil_apbd()->result();		
		// $startdate = $this->input->get('startdate', TRUE);
		// $enddate = $this->input->get('enddate', TRUE);

		// $data['apbd'] = $this->M_pegawai->grafik();
		// $data['apbdd'] = $this->M_pegawai->grafikk();
		

		// $this->load->view('templates/header');
		// $this->load->view('templates/sidebar');
		// $this->load->view('pegawai', $data);
		// $this->load->view('templates/footer');
	}

	public function rentang(){
		// $data['hitung_penduduk']		= $this->M_pegawai->hitung_penduduk();
		// $data['hitung_surat']		= $this->M_pegawai->hitung_surat();
		// $data['hitung_aset']			= $this->M_pegawai->hitung_aset();
		// $data['hitung_pendapatan']		= $this->M_pegawai->hitung_pendapatan()->result();
		// $data['hitung_belanja']			= $this->M_pegawai->hitung_belanja()->result();
		// $data['hitung_apbdes']			= $this->M_pegawai->hitung_apbdes()->result();
		// $data['hitung_kelahiran']		= $this->M_pegawai->hitung_kelahiran();
		// $data['hitung_kematian']		= $this->M_pegawai->hitung_kematian();
		// $data['hitung_jejaka_duda']		= $this->M_pegawai->hitung_jejaka_duda();
		// $data['hitung_perawan_janda']	= $this->M_pegawai->hitung_perawan_janda();
		// $data['hitung_keterangan']		= $this->M_pegawai->hitung_keterangan();
		// $data['hitung_pindah_kelurahan']= $this->M_pegawai->hitung_pindah_kelurahan();
		// $data['hitung_pindah_kecamatan']= $this->M_pegawai->hitung_pindah_kecamatan();
		// $data['hitung_pindah_kabupaten']= $this->M_pegawai->hitung_pindah_kabupaten();
		// $data['home_apbd_rentang']= $this->M_pegawai->tampil_apbd()->result();		
		// $startdate = $this->input->get('startdate', TRUE);
		// $enddate = $this->input->get('enddate', TRUE);
		// $data['startdate'] = $startdate;
		// $data['enddate'] = $enddate;

		// $data['apbd'] = $this->M_pegawai->ambil_data(array($startdate, $enddate));
		// $data['apbdd'] = $this->M_pegawai->ambil_dataa(array($startdate, $enddate));
		// $this->load->view('templates/header');
		// $this->load->view('templates/sidebar');
		// $this->load->view('pegawai', $data);
		// $this->load->view('templates/footer');
	}

	// public function rentangg(){
	// 	$data['hitung_penduduk']		= $this->M_pegawai->hitung_penduduk();
	// 	// $data['hitung_surat']		= $this->M_pegawai->hitung_surat();
	// 	$data['hitung_aset']			= $this->M_pegawai->hitung_aset();
	// 	$data['hitung_pendapatan']		= $this->M_pegawai->hitung_pendapatan()->result();
	// 	$data['hitung_belanja']			= $this->M_pegawai->hitung_belanja()->result();
	// 	// $data['hitung_apbdes']			= $this->M_pegawai->hitung_apbdes()->result();
	// 	$data['hitung_kelahiran']		= $this->M_pegawai->hitung_kelahiran();
	// 	$data['hitung_kematian']		= $this->M_pegawai->hitung_kematian();
	// 	$data['hitung_jejaka_duda']		= $this->M_pegawai->hitung_jejaka_duda();
	// 	$data['hitung_perawan_janda']	= $this->M_pegawai->hitung_perawan_janda();
	// 	$data['hitung_keterangan']		= $this->M_pegawai->hitung_keterangan();
	// 	$data['hitung_pindah_kelurahan']= $this->M_pegawai->hitung_pindah_kelurahan();
	// 	$data['hitung_pindah_kecamatan']= $this->M_pegawai->hitung_pindah_kecamatan();
	// 	$data['hitung_pindah_kabupaten']= $this->M_pegawai->hitung_pindah_kabupaten();
	// 	$data['home_apbd_rentang']= $this->M_pegawai->tampil_apbd()->result();		
	// 	$startdate = $this->input->get('startdate', TRUE);
	// 	$enddate = $this->input->get('enddate', TRUE);
	// 	$data['startdate'] = $startdate;
	// 	$data['enddate'] = $enddate;

	// 	$data['apbdd'] = $this->M_pegawai->ambil_dataa(array($startdate, $enddate));
	// 	$this->load->view('templates/header');
	// 	$this->load->view('templates/sidebar');
	// 	$this->load->view('pegawai', $data);
	// 	$this->load->view('templates/footer');
	// }

	public function cetak()	{
		// $data['hitung_penduduk']		= $this->M_pegawai->hitung_penduduk();
		// $data['hitung_surat']		= $this->M_pegawai->hitung_surat();
		// $data['hitung_aset']			= $this->M_pegawai->hitung_aset();
		// $data['hitung_pendapatan']		= $this->M_pegawai->hitung_pendapatan()->result();
		// $data['hitung_belanja']			= $this->M_pegawai->hitung_belanja()->result();
		// $data['hitung_apbdes']			= $this->M_pegawai->hitung_apbdes()->result();
		// $data['hitung_kelahiran']		= $this->M_pegawai->hitung_kelahiran();
		// $data['hitung_kematian']		= $this->M_pegawai->hitung_kematian();
		// $data['hitung_jejaka_duda']		= $this->M_pegawai->hitung_jejaka_duda();
		// $data['hitung_perawan_janda']	= $this->M_pegawai->hitung_perawan_janda();
		// $data['hitung_keterangan']		= $this->M_pegawai->hitung_keterangan();
		// $data['hitung_pindah_kelurahan']= $this->M_pegawai->hitung_pindah_kelurahan();
		// $data['hitung_pindah_kecamatan']= $this->M_pegawai->hitung_pindah_kecamatan();
		// $data['hitung_pindah_kabupaten']= $this->M_pegawai->hitung_pindah_kabupaten();
		// $data['home_apbd_rentang']= $this->M_pegawai->tampil_apbd()->result();		
		// $startdate = $this->input->get('startdate', TRUE);
		// $enddate = $this->input->get('enddate', TRUE);
		// if (empty($startdate) && empty($enddate)) {
			// $startdatee = $this->M_pegawai->ambil_min_data();
			// $enddatee = $this->M_pegawai->ambil_max_data();
			// $data['startdate'] = $startdatee;
		// 	$data['enddate'] = $enddate;
		// } else {
		// 	$data['startdate'] = $startdate;
		// 	$data['enddate'] = $enddate;
		// }

		// $data['apbd'] = $this->M_pegawai->ambil_data(array($startdate, $enddate));
		// $data['apbdes'] = $this->M_pegawai->ambil_total_data(array($startdate, $enddate));
	 //  	$this->load->library('mypdf');
	 //  	$this->mypdf->surat_filter('cetak', $data);
	  	// $this->mypdf->generate('cetak', $data, 'laporan-mahasiswa', 'A4', 'portrait');
		// $this->load->view('templates/header');
		// $this->load->view('templates/sidebar');
		// $this->load->view('pegawai', $data);
		// $this->load->view('templates/footer');
	}

	public function cetakk()	{
		// $data['hitung_penduduk']		= $this->M_pegawai->hitung_penduduk();
		// $data['hitung_surat']		= $this->M_pegawai->hitung_surat();
		// $data['hitung_aset']			= $this->M_pegawai->hitung_aset();
		// $data['hitung_pendapatan']		= $this->M_pegawai->hitung_pendapatan()->result();
		// $data['hitung_belanja']			= $this->M_pegawai->hitung_belanja()->result();
		// $data['hitung_apbdes']			= $this->M_pegawai->hitung_apbdes()->result();
		// $data['hitung_kelahiran']		= $this->M_pegawai->hitung_kelahiran();
		// $data['hitung_kematian']		= $this->M_pegawai->hitung_kematian();
		// $data['hitung_jejaka_duda']		= $this->M_pegawai->hitung_jejaka_duda();
		// $data['hitung_perawan_janda']	= $this->M_pegawai->hitung_perawan_janda();
		// $data['hitung_keterangan']		= $this->M_pegawai->hitung_keterangan();
		// $data['hitung_pindah_kelurahan']= $this->M_pegawai->hitung_pindah_kelurahan();
		// $data['hitung_pindah_kecamatan']= $this->M_pegawai->hitung_pindah_kecamatan();
		// $data['hitung_pindah_kabupaten']= $this->M_pegawai->hitung_pindah_kabupaten();
		// $data['home_apbd_rentang']= $this->M_pegawai->tampil_apbd()->result();		
		// $startdate = $this->input->get('startdate', TRUE);
		// $enddate = $this->input->get('enddate', TRUE);
		// if (empty($startdate) && empty($enddate)) {
			// $startdatee = $this->M_pegawai->ambil_min_data();
			// $enddatee = $this->M_pegawai->ambil_max_data();
			// $data['startdate'] = $startdatee;
		// 	$data['enddate'] = $enddate;
		// } else {
		// 	$data['startdate'] = $startdate;
		// 	$data['enddate'] = $enddate;
		// }

		// $data['apbdd'] = $this->M_pegawai->ambil_dataa(array($startdate, $enddate));
		// $data['apbdes'] = $this->M_pegawai->ambil_total_data(array($startdate, $enddate));
	 //  	$this->load->library('mypdf');
	 //  	$this->mypdf->surat_filter('cetakk', $data);
	 //  	// $this->mypdf->generate('cetakk', $data, 'laporan-mahasiswa', 'A4', 'portrait');
		// $this->load->view('templates/header');
		// $this->load->view('templates/sidebar');
		// $this->load->view('pegawai', $data);
		// $this->load->view('templates/footer');
	}

	public function getReport()
	{
	    // $startdate =  $this->uri->segment(2);
	    // $enddate   =  $this->uri->segment(3);
	}



	// public function dashboard()
	// {
	// 	$this->load->view('templates/header');
	// 	$this->load->view('templates/sidebar');
	// 	$this->load->view('dashboard');
	// 	$this->load->view('templates/footer');
	// }
}
