<?php
	class Inventory_6 extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model('M_inventory_6');

			// if ($this->session->userdata('level')!='pegawai') {
			// 	$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">login dulu<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			// 	redirect ('login');
			// }
		}

		public function index (){
			// $data['inventory']= $this->M_inventory_6->tampil_data()->result();
			// require FCPATH . 'vendor/autoload.php';

			// $this->load->library('CsvReader');
			// $csvFilePath = 'cp.csv';
			// $columnIndex = 1;
			// $data['inventory'] = $this->csvreader->get_column($csvFilePath, $columnIndex);




			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			// $this->load->view('inventory', $data);
			// $this->load->view('templates/footer');
			$this->load->model('M_inventory_6');
			$getStandards = $this->M_inventory_6->getStandards();
			$getGender = $this->M_inventory_6->getGender();
			// print_r($getStandards);
			// print_r($getGender);
			// exit();		
			// $getdata = $this->M_inventory_6->getdatareg();
			// $data['datareg'] = $getdata;
			// $data['inventory']= $this->M_inventory_6->tampil_data()->result();

			// $this->load->view('templates/header');
			// $this->load->view('templates/sidebar');
			// $this->load->view('inventory', $data);	
			// $this->load->view('inventory', ['getStandards'=>$getStandards, 'getGender'=>$getGender]);

			$data['inventory'] = $this->M_inventory_6->tampil_data()->result();
			$data['getStandards'] = $getStandards;
			$data['getGender'] = $getGender;

			$this->load->view('inventory', $data);
			$this->load->view('templates/footer');
		}

		public function getRecords(){
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->model('M_inventory_6');
			$standard = $this->input->post('standard_id');
			$gender = $this->input->post('gender');
			$getStandards = $this->M_inventory_6->getStandards();
			$getGender = $this->M_inventory_6->getGender();
			$records = $this->M_inventory_6->getRecords($standard, $gender);
			$data['standard_id'] = $standard;
			$data['gender'] = $gender;
			$this->load->view('getRecords', ['getStandards'=>$getStandards, 'getGender'=>$getGender, 'records'=>$records, $data]);

			// $this->load->view('inventory', $data);
			$this->load->view('templates/footer');
		}

		public function filter(){
			$data['inventory']= $this->M_inventory_6->filter_data();

			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('inventory', $data);
			$this->load->view('templates/footer');

		}

		public function getdatakantor(){
			$id_regional = $this->input->post('data_regional');
			$getdataktr = $this->M_inventory_6->getdataktr($id_regional);
			// var_dump($getdataktr);
			echo json_encode($getdataktr);
		}

		public function getFilteredData() {
		    $regional = $this->input->post('regional');
		    $status = $this->input->post('status');

		    // Lakukan pengambilan data dari model berdasarkan filter yang diberikan
		    $filteredData = $this->M_inventory_6->getFilteredData($regional, $status);

		    // Mengirim data dalam format JSON sebagai respons
		    echo json_encode($filteredData);
		}

		public function getdatastatus(){
			$id_regional = $this->input->post('data_regional');
			$getdatastt = $this->M_inventory_6->getdatastt($id_regional);
			// var_dump($getdataktr);
			echo json_encode($getdatastt);
		}

		public function ajax_add()
	    {
	        $this->_validate();
	        $data = array(
	                'Berita_Acara' => $this->input->post('Berita_Acara'),
					'Status' => 4
	            );
	        // $this->M_penduduk->input_data($data, 'data_penduduk');
	        $insert = $this->person->input_data($data);
			// $arr['success'] = true;
			// redirect('penduduk/index');
	        // $insert = $this->penduduk->save($data);
	        echo json_encode(array("status" => TRUE));
	        $this->session->set_flashdata('success', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h5><i class="icon fas fa-check"></i> Selamat!</h5> Berhasil Menambahkan Data Penduduk</div>');
	    }

	    public function proses_edit_data($Order_Id){
	    	$this->M_inventory_6->proses_edit_data($Order_Id);
	    	$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil diedit!</div>');
	    	redirect('Inventory');
	    }

	    public function ajax_update()
	    {
		    $Order_Id = $this->input->post('Order_Id');
		    $data = array(
		        'Berita_Acara' => $this->input->post('Berita_Acara'),
		        'Status' => 4
		    );
		    $update = $this->M_inventory_6->ajax_update($data, $Order_Id);
		    $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		    redirect('inventory');
		}


	 //    public function nik_available($str)
		// {
		//     // You can access $_POST variable
		//     $this->load->model('M_penduduk');
		//     $result =   $this->M_penduduk->nikAvailability($_POST['nik']);
		//     if (!$result)
		//     {
		//         $this->form_validation->set_message('nik_available', '%s tidak terdaftar');
		//         return FALSE;
		//     }else{
		//         return TRUE;
		//     }
		// }

	    private function _validate()
	    {
	        $data = array();
	        $data['error_string'] = array();
	        $data['inputerror'] = array();
	        $data['status'] = TRUE;
	        $exactLength = 16;
	        $maxLengthNama = 45;
	        $maxLengthRt = 11;
	        $maxLengthTempatLahir = 20;
	        $maxLengthPekerjaan = 45;
	        $maxLengthAlamatLengkap = 255;
	        $maxLengthRw = 11;
	        $maxLengthDusun = 30;
	        $maxLengthNamaIbu = 45;
	        $maxLengthKeterangan = 45;
	        $is_unique = $this->form_validation->set_rules('','','is_unique[data_penduduk.nik]');
		    $this->load->model('M_penduduk');
		    $result =   $this->M_penduduk->nikAvailability($_POST['nik']);

			$nik = $this->input->post('nik');
			$lengthNik = strlen($nik);

			$nama = $this->input->post('nama');
			$lengthNama = strlen($nama);

			$no_kk = $this->input->post('no_kk');
			$lengthNokk = strlen($no_kk);

			$jenis_kelamin = $this->input->post('jenis_kelamin');

			$rt = $this->input->post('rt');
			$lengthRt = strlen($rt);

			$status_perkawinan = $this->input->post('status_perkawinan');

			$tempat_lahir = $this->input->post('tempat_lahir');
			$lengthTempatLahir = strlen($tempat_lahir);

			$tanggal_lahir = $this->input->post('tanggal_lahir');

			$agama = $this->input->post('agama');

			$pendidikan_terakhir = $this->input->post('pendidikan_terakhir');

			$pekerjaan = $this->input->post('pekerjaan');
			$lengthPekerjaan = strlen($pekerjaan);

			$kewarganegaraan = $this->input->post('kewarganegaraan');

			$alamat_lengkap = $this->input->post('alamat_lengkap');
			$lengthAlamatLengkap = strlen($alamat_lengkap);

			$rw = $this->input->post('rw');
			$lengthRw = strlen($rw);

			$dusun = $this->input->post('dusun');
			$lengthDusun = strlen($dusun);

			$kedudukan_dalam_keluarga = $this->input->post('kedudukan_dalam_keluarga');

			$jkn = $this->input->post('jkn');

			$ibu = $this->input->post('ibu');
			$lengthNamaIbu = strlen($ibu);

			$keterangan = $this->input->post('keterangan');
			$lengthKeterangan = strlen($keterangan);
	 
	        if($nik == '')
	        {
	            $data['inputerror'][] = 'nik';
	            $data['error_string'][] = 'NIK belum diisi';
	            $data['status'] = FALSE;
	        }  else if ($lengthNik !== $exactLength) {
			    $data['inputerror'][] = 'nik';
			    $data['error_string'][] = 'NIK mempunyai panjang ' .$exactLength. ' karakter';
			    $data['status'] = FALSE;
			} else if (!preg_match('/^[0-9]+$/', $nik)) {
                $data['inputerror'][] = 'nik';
				$data['error_string'][] = 'NIK hanya mengenali angka';
				$data['status'] = FALSE;
            } else if ($result) {
                $data['inputerror'][] = 'nik';
				$data['error_string'][] = 'NIK sudah terpakai';
				$data['status'] = FALSE;
            }
	 
	        if($nama == '')
	        {
	            $data['inputerror'][] = 'nama';
	            $data['error_string'][] = 'Nama belum diisi';
	            $data['status'] = FALSE;
	        } else if ($lengthNama > $maxLengthNama) {
			    $data['inputerror'][] = 'nama';
			    $data['error_string'][] = 'Nama mempunyai panjang maksimal ' .$maxLengthNama. ' karakter';
			    $data['status'] = FALSE;
			} else if (!preg_match('/^[A-Za-z\s]+$/', $nama)) {
                $data['inputerror'][] = 'nama';
				$data['error_string'][] = 'Nama hanya mengenali abjad';
				$data['status'] = FALSE;
            } 

	        if($no_kk == '')
	        {
	            $data['inputerror'][] = 'no_kk';
	            $data['error_string'][] = 'No KK belum diisi';
	            $data['status'] = FALSE;
	        } else if ($lengthNokk !== $exactLength) {
			    $data['inputerror'][] = 'no_kk';
			    $data['error_string'][] = 'No KK mempunyai panjang ' .$exactLength. ' karakter';
			    $data['status'] = FALSE;
			} else if (!preg_match('/^[0-9]+$/', $no_kk)) {
                $data['inputerror'][] = 'no_kk';
				$data['error_string'][] = 'No KK hanya mengenali angka';
				$data['status'] = FALSE;
            } 
	 
	        if($jenis_kelamin == '')
	        {
	            $data['inputerror'][] = 'jenis_kelamin';
	            $data['error_string'][] = 'Jenis Kelamin belum diisi';
	            $data['status'] = FALSE;
	        }

	        if($rt == '')
	        {
	            $data['inputerror'][] = 'rt';
	            $data['error_string'][] = 'RT belum diisi';
	            $data['status'] = FALSE;
	        } else if ($lengthRt > $maxLengthRt) {
			    $data['inputerror'][] = 'rt';
			    $data['error_string'][] = 'RT mempunyai panjang maksimal ' .$maxLengthRt. ' karakter';
			    $data['status'] = FALSE;
			} else if (!preg_match('/^[0-9]+$/', $rt)) {
                $data['inputerror'][] = 'rt';
				$data['error_string'][] = 'RT hanya mengenali angka';
				$data['status'] = FALSE;
            } 
	 
	        if($status_perkawinan == '')
	        {
	            $data['inputerror'][] = 'status_perkawinan';
	            $data['error_string'][] = 'Status Perkawinan belum diisi';
	            $data['status'] = FALSE;
	        }

	        if($tempat_lahir == '')
	        {
	            $data['inputerror'][] = 'tempat_lahir';
	            $data['error_string'][] = 'Tempat Lahir belum diisi';
	            $data['status'] = FALSE;
	        } else if ($lengthTempatLahir > $maxLengthTempatLahir) {
			    $data['inputerror'][] = 'tempat_lahir';
			    $data['error_string'][] = 'Tempat lahir mempunyai panjang maksimal ' .$maxLengthTempatLahir. ' karakter';
			    $data['status'] = FALSE;
			} 
	 
	        if($tanggal_lahir == '')
	        {
	            $data['inputerror'][] = 'tanggal_lahir';
	            $data['error_string'][] = 'Tanggal Lahir belum diisi';
	            $data['status'] = FALSE;
	        }

	        if($agama == '')
	        {
	            $data['inputerror'][] = 'agama';
	            $data['error_string'][] = 'Agama belum diisi';
	            $data['status'] = FALSE;
	        }
	 
	        if($pendidikan_terakhir == '')
	        {
	            $data['inputerror'][] = 'pendidikan_terakhir';
	            $data['error_string'][] = 'Pendidikan Terakhir belum diisi';
	            $data['status'] = FALSE;
	        }

	        if($pekerjaan == '')
	        {
	            $data['inputerror'][] = 'pekerjaan';
	            $data['error_string'][] = 'Pekerjaan belum diisi';
	            $data['status'] = FALSE;
	        } else if ($lengthPekerjaan > $maxLengthPekerjaan) {
			    $data['inputerror'][] = 'pekerjaan';
			    $data['error_string'][] = 'Pekerjaan mempunyai panjang maksimal ' .$maxLengthPekerjaan. ' karakter';
			    $data['status'] = FALSE;
			} 
	 
	        if($kewarganegaraan == '')
	        {
	            $data['inputerror'][] = 'kewarganegaraan';
	            $data['error_string'][] = 'Kewarganegaraan belum diisi';
	            $data['status'] = FALSE;
	        }

	        if($alamat_lengkap == '')
	        {
	            $data['inputerror'][] = 'alamat_lengkap';
	            $data['error_string'][] = 'Alamat Lengkap belum diisi';
	            $data['status'] = FALSE;
	        } else if ($lengthAlamatLengkap > $maxLengthAlamatLengkap) {
			    $data['inputerror'][] = 'alamat_lengkap';
			    $data['error_string'][] = 'Alamat lengkap mempunyai panjang maksimal ' .$maxLengthAlamatLengkap. ' karakter';
			    $data['status'] = FALSE;
			} 
	 
	        if($rw == '')
	        {
	            $data['inputerror'][] = 'rw';
	            $data['error_string'][] = 'RW belum diisi';
	            $data['status'] = FALSE;
	        } else if ($lengthRw > $maxLengthRw) {
			    $data['inputerror'][] = 'rw';
			    $data['error_string'][] = 'RW mempunyai panjang maksimal ' .$maxLengthRw. ' karakter';
			    $data['status'] = FALSE;
			} else if (!preg_match('/^[0-9]+$/', $rw)) {
                $data['inputerror'][] = 'rw';
				$data['error_string'][] = 'RW hanya mengenali angka';
				$data['status'] = FALSE;
            } 

	        if($dusun == '')
	        {
	            $data['inputerror'][] = 'dusun';
	            $data['error_string'][] = 'Dusun belum diisi';
	            $data['status'] = FALSE;
	        } else if ($lengthDusun > $maxLengthDusun) {
			    $data['inputerror'][] = 'dusun';
			    $data['error_string'][] = 'Dusun mempunyai panjang maksimal ' .$maxLengthDusun. ' karakter';
			    $data['status'] = FALSE;
			} 
	 
	        if($kedudukan_dalam_keluarga == '')
	        {
	            $data['inputerror'][] = 'kedudukan_dalam_keluarga';
	            $data['error_string'][] = 'Kedudukan dalam Keluarga belum diisi';
	            $data['status'] = FALSE;
	        }

	        if($jkn == '')
	        {
	            $data['inputerror'][] = 'jkn';
	            $data['error_string'][] = 'JKN belum diisi';
	            $data['status'] = FALSE;
	        }
	 
	        if($ibu == '')
	        {
	            $data['inputerror'][] = 'ibu';
	            $data['error_string'][] = 'Nama Ibu belum diisi';
	            $data['status'] = FALSE;
	        }  else if ($lengthNamaIbu > $maxLengthNamaIbu) {
			    $data['inputerror'][] = 'ibu';
			    $data['error_string'][] = 'Nama Ibu mempunyai panjang maksimal ' .$maxLengthNamaIbu. ' karakter';
			    $data['status'] = FALSE;
			} else if (!preg_match('/^[A-Za-z\s]+$/', $ibu)) {
                $data['inputerror'][] = 'ibu';
				$data['error_string'][] = 'Nama Ibu hanya mengenali abjad';
				$data['status'] = FALSE;
            } 

	        if($keterangan == '')
	        {
	            $data['inputerror'][] = 'keterangan';
	            $data['error_string'][] = 'Keterangan belum diisi';
	            $data['status'] = FALSE;
	        } else if ($lengthKeterangan > $maxLengthKeterangan) {
			    $data['inputerror'][] = 'keterangan';
			    $data['error_string'][] = 'Keterangan mempunyai panjang maksimal ' .$maxLengthKeterangan. ' karakter';
			    $data['status'] = FALSE;
			} 
	 
	        if($data['status'] === FALSE)
	        {
	            echo json_encode($data);
	            exit();
	        }
	    }

		// public function tambah(){
		// 	$html = $this->load->view('tambah_penduduk', '', true);
		// 	$response['html'] = $html;
		// 	echo json_encode($response);
			// $this->load->view('templates/header');
			// $this->load->view('templates/sidebar');
			// $this->load->view('penduduk');
			// $this->load->view('templates/footer');
		// }

		// public function tambah_aksi(){
		// 	$this->load->library('form_validation');
		// 	$this->form_validation->set_rules('nik', 'nik', 'required|integer|exact_length[16]');
		// 	$this->form_validation->set_rules('nama', 'nama', 'required|alpha_numeric_spaces|max_length[45]',
		// 		array('max_length' => 'Maksimal karakter %s sebanyak 45 karakter')
		// 	);
		// 	$this->form_validation->set_rules('no_kk', 'no_kk', 'required|integer|exact_length[16]');
		// 	$this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required');
		// 	$this->form_validation->set_rules('rt', 'rt', 'required|integer|max_length[11]',
		// 		array('max_length' => 'Maksimal karakter %s sebanyak 11 karakter')
		// 	);
		// 	$this->form_validation->set_rules('status_perkawinan', 'status_perkawinan', 'required');
		// 	$this->form_validation->set_rules('tempat_lahir', 'tempat_lahir', 'required|max_length[20]',
		// 		array('max_length' => 'Maksimal karakter %s sebanyak 20 karakter')
		// 	);
		// 	$this->form_validation->set_rules('tanggal_lahir', 'tanggal_lahir', 'required');
		// 	$this->form_validation->set_rules('agama', 'agama', 'required');
		// 	$this->form_validation->set_rules('pendidikan_terakhir', 'pendidikan_terakhir', 'required');
		// 	$this->form_validation->set_rules('pekerjaan', 'pekerjaan', 'required|alpha|max_length[20]',
		// 		array('max_length' => 'Maksimal karakter %s sebanyak 20 karakter')
		// 	);
		// 	$this->form_validation->set_rules('kewarganegaraan', 'kewarganegaraan', 'required');
		// 	$this->form_validation->set_rules('alamat_lengkap', 'alamat_lengkap', 'required|max_length[255]',
		// 		array('max_length' => 'Maksimal karakter %s sebanyak 255 karakter')
		// 	);
		// 	$this->form_validation->set_rules('rw', 'rw', 'required|integer|max_length[11]',
		// 		array('max_length' => 'Maksimal karakter %s sebanyak 11 karakter')
		// 	);
		// 	$this->form_validation->set_rules('dusun', 'dusun', 'required|max_length[30]',
		// 		array('max_length' => 'Maksimal karakter %s sebanyak 30 karakter')
		// 	);
		// 	$this->form_validation->set_rules('kedudukan_dalam_keluarga', 'kedudukan_dalam_keluarga', 'required');
		// 	$this->form_validation->set_rules('jkn', 'jkn', 'required');
		// 	$this->form_validation->set_rules('ibu', 'ibu', 'required|alpha_numeric_spaces|max_length[45]',
		// 		array('max_length' => 'Maksimal karakter %s sebanyak 45 karakter')
		// 	);
		// 	$this->form_validation->set_rules('keterangan', 'keterangan', 'required');


		// 	$this->form_validation->set_message('required', '%s belum terisi');
		// 	$this->form_validation->set_message('integer', 'Isi %s hanya menggunakan angka');			
		// 	$this->form_validation->set_message('alpha', 'Isi %s hanya menggunakan huruf alphabet');
		// 	$this->form_validation->set_message('exact_length', 'Karakter %s harus berjumlah 16 karakter');		

		// 	if ($this->form_validation->run() == FALSE){
		// 		$this->tambah();
				// $("#exampleModal").html(html).modal('show');
				// $this->load->view('templates/header');
				// $this->load->view('templates/sidebar');
				// $this->load->view('penduduk');
				// $this->load->view('templates/footer');
				// model.ShowDialog = true;		
		// 	} else {
		// 		$nik 						= $this->input->post('nik');
		// 		$nama 						= $this->input->post('nama');
		// 		$no_kk 						= $this->input->post('no_kk');
		// 		$jenis_kelamin				= $this->input->post('jenis_kelamin');
		// 		$rt 						= $this->input->post('rt');
		// 		$status_perkawinan 			= $this->input->post('status_perkawinan');
		// 		$tempat_lahir				= $this->input->post('tempat_lahir');
		// 		$tanggal_lahir 				= $this->input->post('tanggal_lahir');
		// 		$agama 						= $this->input->post('agama');
		// 		$pendidikan_terakhir 		= $this->input->post('pendidikan_terakhir');
		// 		$pekerjaan 					= $this->input->post('pekerjaan');
		// 		$kewarganegaraan 			= $this->input->post('kewarganegaraan');
		// 		$alamat_lengkap				= $this->input->post('alamat_lengkap');
		// 		$rw 						= $this->input->post('rw');
		// 		$dusun 						= $this->input->post('dusun');
		// 		$kedudukan_dalam_keluarga 	= $this->input->post('kedudukan_dalam_keluarga');
		// 		$jkn 						= $this->input->post('jkn');
		// 		$ibu 					= $this->input->post('ibu');
		// 		$keterangan 				= $this->input->post('keterangan');

		// 		$data = array(
		// 			'nik' 						=> $nik,
		// 			'nama' 						=> $nama,
		// 			'no_kk' 					=> $no_kk,
		// 			'jenis_kelamin' 			=> $jenis_kelamin,
		// 			'rt' 						=> $rt,
		// 			'status_perkawinan' 		=> $status_perkawinan,
		// 			'tempat_lahir' 				=> $tempat_lahir,
		// 			'tanggal_lahir' 			=> $tanggal_lahir,
		// 			'agama' 					=> $agama,
		// 			'pendidikan_terakhir' 		=> $pendidikan_terakhir,
		// 			'pekerjaan' 				=> $pekerjaan,
		// 			'kewarganegaraan' 			=> $kewarganegaraan,
		// 			'alamat_lengkap' 			=> $alamat_lengkap,
		// 			'rw' 						=> $rw,
		// 			'dusun' 					=> $dusun,
		// 			'kedudukan_dalam_keluarga' 	=> $kedudukan_dalam_keluarga,
		// 			'jkn' 						=> $jkn,
		// 			'ibu' 					=> $ibu,
		// 			'keterangan' 				=> $keterangan
		// 		);

		// 		$this->M_penduduk->input_data($data, 'data_penduduk');
		// 		redirect('penduduk/index');
		// 	}
		// }

		public function hapus($nik){

			$where = array ('nik' => $nik);
			$this->M_penduduk->hapus_data($where, 'data_penduduk');
			$this->session->set_flashdata('delete', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h5><i class="icon fas fa-check"></i> Selamat!</h5> Berhasil Menghapus Data Penduduk, Silahkan Refresh Halaman</div>');
			$arr['delete'] = true;
			redirect('penduduk/index');
		}

		public function edit_inventory($id){
			$where 				= array('id' => $id);
			$data['inventory'] 	= $this->M_inventory_6->edit_data($where,'inventory')->result();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('edit_inventory', $data);
			$this->load->view('templates/footer');
		}

		public function update_inventory($id){
			$this->load->library('form_validation');
			// $this->form_validation->set_rules('nik', 'nik', 'integer|exact_length[16]|is_unique[data_penduduk.nik]');
			$this->form_validation->set_rules('nama', 'nama', 'required|regex_match[/^([a-z ])+$/i]|max_length[45]',
				array('max_length' => 'Maksimal karakter %s sebanyak 45 karakter')
			);
			$this->form_validation->set_rules('no_kk', 'no_kk', 'required|integer|exact_length[16]');
			// $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', '');
			$this->form_validation->set_rules('rt', 'rt', 'required|integer|max_length[11]',
				array('max_length' => 'Maksimal karakter %s sebanyak 11 karakter')
			);
			// $this->form_validation->set_rules('status_perkawinan', 'status_perkawinan', '');
			$this->form_validation->set_rules('tempat_lahir', 'required|tempat_lahir', 'max_length[20]',
				array('max_length' => 'Maksimal karakter %s sebanyak 20 karakter')
			);
			// $this->form_validation->set_rules('tanggal_lahir', 'tanggal_lahir', '');
			// $this->form_validation->set_rules('agama', 'agama', '');
			// $this->form_validation->set_rules('pendidikan_terakhir', 'pendidikan_terakhir', '');
			// $this->form_validation->set_rules('pekerjaan', 'pekerjaan', 'required|alpha|max_length[20]',
			// 	array('max_length' => 'Maksimal karakter %s sebanyak 20 karakter')
			// );
			// $this->form_validation->set_rules('kewarganegaraan', 'kewarganegaraan', '');
			$this->form_validation->set_rules('alamat_lengkap', 'alamat_lengkap', 'required|max_length[255]',
				array('max_length' => 'Maksimal karakter %s sebanyak 255 karakter')
			);
			$this->form_validation->set_rules('rw', 'rw', 'required|integer|max_length[11]',
				array('max_length' => 'Maksimal karakter %s sebanyak 11 karakter')
			);
			$this->form_validation->set_rules('dusun', 'dusun', 'required|max_length[30]',
				array('max_length' => 'Maksimal karakter %s sebanyak 30 karakter')
			);
			// $this->form_validation->set_rules('kedudukan_dalam_keluarga', 'kedudukan_dalam_keluarga', '');
			// $this->form_validation->set_rules('jkn', 'jkn', '');
			$this->form_validation->set_rules('ibu', 'ibu', 'required|regex_match[/^([a-z ])+$/i]|max_length[45]',
				array('max_length' => 'Maksimal karakter %s sebanyak 45 karakter')
			);
			// $this->form_validation->set_rules('keterangan', 'keterangan', '');

			$this->form_validation->set_message('required', '%s belum terisi');
			$this->form_validation->set_message('integer', 'Isi %s hanya menggunakan angka');			
			$this->form_validation->set_message('alpha', 'Isi %s hanya menggunakan huruf alphabet');
			$this->form_validation->set_message('exact_length', 'Karakter %s harus berjumlah 16 karakter');	
			$this->form_validation->set_message('regex_match', 'Hanya menerima inputan berupa abjad');			
			$this->form_validation->set_message('is_unique', 'NIK sudah terdaftar');		

			// if ($this->form_validation->run() == FALSE){
			// 	$this->edit_inventory($id);
				// $where 				= array('nik' => $nik);
				// $data['penduduk'] 	= $this->M_penduduk->edit_data($nik,'data_penduduk')->result();
				// $this->load->view('templates/header');
				// $this->load->view('templates/sidebar');
				// $this->load->view('edit_penduduk', $data);
				// $this->load->view('templates/footer');

				
			// } else {
				$id 						= $this->input->post('id');
				$tanggal 					= $this->input->post('tanggal');
				$asal 						= $this->input->post('asal');
				$destinasi 		 			= $this->input->post('destinasi');
				$jumlah 					= $this->input->post('jumlah');
				$status 					= $this->input->post('status');
				// $tempat_lahir 				= $this->input->post('tempat_lahir');
				// $tanggal_lahir 				= $this->input->post('tanggal_lahir');
				// $agama 						= $this->input->post('agama');
				// $pendidikan_terakhir 		= $this->input->post('pendidikan_terakhir');
				// $pekerjaan 					= $this->input->post('pekerjaan');
				// $kewarganegaraan 			= $this->input->post('kewarganegaraan');
				// $alamat_lengkap 			= $this->input->post('alamat_lengkap');
				// $rw 						= $this->input->post('rw');
				// $dusun 						= $this->input->post('dusun');
				// $kedudukan_dalam_keluarga 	= $this->input->post('kedudukan_dalam_keluarga');
				// $jkn 						= $this->input->post('jkn');
				// $ibu 					= $this->input->post('ibu');
				// $keterangan 				= $this->input->post('keterangan');
				// $status_kependudukan 		= $this->input->post('status_kependudukan');

				$data = array(
					'id' 						=> $id,
					'tanggal' 					=> $tanggal,
					'asal' 						=> $asal,
					'destinasi' 				=> $destinasi,
					'jumlah' 					=> $jumlah,
					'status' 					=> $status
					// 'tempat_lahir' 				=> $tempat_lahir,
					// 'tanggal_lahir' 			=> $tanggal_lahir,
					// 'agama' 					=> $agama,
					// 'pendidikan_terakhir' 		=> $pendidikan_terakhir,
					// 'pekerjaan' 				=> $pekerjaan,
					// 'kewarganegaraan'			=> $kewarganegaraan,
					// 'alamat_lengkap' 			=> $alamat_lengkap,
					// 'rw' 						=> $rw,
					// 'dusun' 					=> $dusun,
					// 'kedudukan_dalam_keluarga' 	=> $kedudukan_dalam_keluarga,
					// 'jkn' 						=> $jkn,
					// 'ibu' 					=> $ibu,
					// 'keterangan' 				=> $keterangan,
					// 'status_kependudukan'		=> $status_kependudukan
				);

				$where = array(
					'id' => $id
				);

				$this->M_inventory_6->update_data($where, $data, 'inventory');
				$this->session->set_flashdata('update', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h5><i class="icon fas fa-check"></i> Selamat!</h5> Berhasil Mengedit Data Inventory</div>');
				$arr['update'] = true;
				redirect('inventory/index');

			// }
		}

		public function detail_penduduk($id){
			$this->load->model('M_inventory_6');
			$detail_inventory 			= $this->M_inventory_6->detail_data($nik);
			$data['detail_inventory'] 	= $detail_inventory;

			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('detail_inventory', $data);
			$this->load->view('templates/footer');
		}

		public function search(){
			$keyword 			= $this->input->post('keyword');
			$data['penduduk']	=$this->M_penduduk->get_keyword($keyword);

			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('penduduk', $data);
			$this->load->view('templates/footer');
		}

	}


?>