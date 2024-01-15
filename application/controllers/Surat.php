<?php
	class Surat extends CI_Controller{

		public function __construct(){
			parent::__construct();

			if ($this->session->userdata('level')!='pegawai') {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">login dulu<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
				redirect ('login');
			}
		}

		public function index (){
			$data['surat']= $this->M_surat->tampil_data()->result();

			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('surat', $data);
			$this->load->view('templates/footer');
			
		}

		public function tambah(){
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('surat');
			$this->load->view('templates/footer');
		}

		public function tambah_aksi(){
			$nik 						= $this->input->post('nik');
			$nama 						= $this->input->post('nama');
			$jenis_surat				= $this->input->post('jenis_surat');

			$data = array(
				'nik' 			=> $nik,
				'nama' 			=> $nama,
				'jenis_surat' 	=> $jenis_surat
			);

			$this->M_surat->input_data($data, 'data_surat');
			redirect('surat/index');
		}

		public function hapus($id){

			$where = array ('id' => $id);
			$this->M_surat->hapus_data($where, 'data_surat');
			redirect('surat/index');
		}

		// public function edit_penduduk($nik){
		// 	$where = array('nik' => $nik);
		// 	$data['penduduk'] = $this->M_penduduk->edit_data($where,'data_penduduk')->result();
		// 	$this->load->view('templates/header');
		// 	$this->load->view('templates/sidebar');
		// 	$this->load->view('edit_penduduk', $data);
		// 	$this->load->view('templates/footer');
		// }

		// public function update_penduduk(){
		// 	$nik = $this->input->post('nik');
		// 	$nama = $this->input->post('nama');
		// 	$no_kk = $this->input->post('no_kk');
		// 	$jenis_kelamin = $this->input->post('jenis_kelamin');
		// 	$rt = $this->input->post('rt');
		// 	$status_perkawinan = $this->input->post('status_perkawinan');
		// 	$tempat_lahir = $this->input->post('tempat_lahir');
		// 	$tanggal_lahir = $this->input->post('tanggal_lahir');
		// 	$agama = $this->input->post('agama');
		// 	$pendidikan_terakhir = $this->input->post('pendidikan_terakhir');
		// 	$pekerjaan = $this->input->post('pekerjaan');
		// 	$kewarganegaraan = $this->input->post('kewarganegaraan');
		// 	$alamat_lengkap = $this->input->post('alamat_lengkap');
		// 	$rw = $this->input->post('rw');
		// 	$dusun = $this->input->post('dusun');
		// 	$kedudukan_dalam_keluarga = $this->input->post('kedudukan_dalam_keluarga');
		// 	$jkn = $this->input->post('jkn');
		// 	$nama_ibu = $this->input->post('nama_ibu');
		// 	$keterangan = $this->input->post('keterangan');

		// 	$data = array(
		// 		'nik' => $nik,
		// 		'nama' => $nama,
		// 		'no_kk' => $no_kk,
		// 		'jenis_kelamin' => $jenis_kelamin,
		// 		'rt' => $rt,
		// 		'status_perkawinan' => $status_perkawinan,
		// 		'tempat_lahir' => $tempat_lahir,
		// 		'tanggal_lahir' => $tanggal_lahir,
		// 		'agama' => $agama,
		// 		'pendidikan_terakhir' => $pendidikan_terakhir,
		// 		'pekerjaan' => $pekerjaan,
		// 		'kewarganegaraan' => $kewarganegaraan,
		// 		'alamat_lengkap' => $alamat_lengkap,
		// 		'rw' => $rw,
		// 		'dusun' => $dusun,
		// 		'kedudukan_dalam_keluarga' => $kedudukan_dalam_keluarga,
		// 		'jkn' => $jkn,
		// 		'nama_ibu' => $nama_ibu,
		// 		'keterangan' => $keterangan
		// 	);

		// 	$where = array(
		// 		'nik' => $nik
		// 	);

		// 	$this->M_penduduk->update_data($where, $data, 'data_penduduk');
		// 	redirect('penduduk/index');

		// }

		// public function detail_surat($id){
		// 	$this->load->model('M_surat');
		// 	$detail_surat = $this->M_surat->detail_data($id);
		// 	$data['detail_surat'] = $detail_surat;

		// 	$this->load->view('templates/header');
		// 	$this->load->view('templates/sidebar');
		// 	$this->load->view('detail_surat', $data);
		// 	$this->load->view('templates/footer');
		// }

		public function search(){
			$keyword 		= $this->input->post('keyword');
			$data['surat']	=$this->M_surat->get_keyword($keyword);

			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('surat', $data);
			$this->load->view('templates/footer');
		}

	}


?>