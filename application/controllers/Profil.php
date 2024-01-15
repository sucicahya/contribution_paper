<?php
	class Profil extends CI_Controller{

		public function __construct(){
			parent::__construct();

			if ($this->session->userdata('level')!='admin') {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">login dulu<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
				redirect ('login');
			}
		}

		public function index (){
			$data['profil']= $this->M_profil->tampil_data()->result();

			$this->load->view('templates/header2');
			$this->load->view('templates/sidebar2');
			$this->load->view('profil', $data);
			$this->load->view('templates/footer2');
			
		}

		public function edit_profil($id){
			$where = array('id' => $id);
			$data['profil'] = $this->M_profil->edit_data($where,'data_profil')->result();
			$this->load->view('templates/header2');
			$this->load->view('templates/sidebar2');
			$this->load->view('edit_profil', $data);
			$this->load->view('templates/footer2');
		}

		public function update_profil($id){
			$this->load->library('form_validation');
			$this->form_validation->set_rules('id', 'id', 'integer|max_length[11]',
				array('max_length' => 'Maksimal karakter %s sebanyak 11 karakter')
			);
			$this->form_validation->set_rules('tentang', 'tentang', 'required');
			$this->form_validation->set_rules('visi', 'visi', 'required');
			$this->form_validation->set_rules('misi', 'misi', 'required');
			$this->form_validation->set_rules('letak', 'letak', 'required');
			$this->form_validation->set_rules('kelurahan', 'kelurahan', 'required|max_length[30]',
				array('max_length' => 'Maksimal karakter %s sebanyak 30 karakter')
			);
			$this->form_validation->set_rules('kode_kelurahan', 'kode_kelurahan', 'required|regex_match[/^([0-9])+$/i]|max_length[11]',
				array('max_length' => 'Maksimal karakter %s sebanyak 11 karakter')
			);
			$this->form_validation->set_rules('kecamatan', 'kecamatan', 'required|max_length[30]',
				array('max_length' => 'Maksimal karakter %s sebanyak 30 karakter')
			);
			$this->form_validation->set_rules('kode_kecamatan', 'kode_kecamatan', 'required|regex_match[/^([0-9])+$/i]|max_length[11]',
				array('max_length' => 'Maksimal karakter %s sebanyak 11 karakter')
			);
			$this->form_validation->set_rules('kabupaten', 'kabupaten', 'required|max_length[30]',
				array('max_length' => 'Maksimal karakter %s sebanyak 30 karakter')
			);
			$this->form_validation->set_rules('kode_kabupaten', 'kode_kabupaten', 'required|regex_match[/^([0-9])+$/i]|max_length[11]',
				array('max_length' => 'Maksimal karakter %s sebanyak 11 karakter')
			);
			$this->form_validation->set_rules('provinsi', 'provinsi', 'required|max_length[30]',
				array('max_length' => 'Maksimal karakter %s sebanyak 30 karakter')
			);
			$this->form_validation->set_rules('kode_provinsi', 'kode_provinsi', 'required|regex_match[/^([0-9])+$/i]|max_length[11]',
				array('max_length' => 'Maksimal karakter %s sebanyak 11 karakter')
			);
			$this->form_validation->set_rules('kode_wilayah', 'kode_wilayah', 'required|regex_match[/^([0-9])+$/i]|max_length[11]',
				array('max_length' => 'Maksimal karakter %s sebanyak 11 karakter')
			);
			$this->form_validation->set_rules('kode_pos', 'kode_pos', 'required|regex_match[/^([0-9])+$/i]|max_length[11]',
				array('max_length' => 'Maksimal karakter %s sebanyak 11 karakter')
			);
			$this->form_validation->set_rules('telepon', 'telepon', 'required|max_length[255]',
				array('max_length' => 'Maksimal karakter %s sebanyak 255 karakter')
			);

			// $this->form_validation->set_rules('gambar', 'gambar', 'required');

			// $this->form_validation->set_rules('logo', 'logo', 'required');

			$this->form_validation->set_message('required', '%s belum terisi');
			$this->form_validation->set_message('integer', 'Isi %s hanya menggunakan angka');
			$this->form_validation->set_message('regex_match', 'Hanya menerima inputan berupa angka');		

			if ($this->form_validation->run() == FALSE){
				$this->edit_profil($id);
			} else {
				$id 			= $this->input->post('id');
				$tentang	 	= $this->input->post('tentang');
				$visi 			= $this->input->post('visi');
				$misi 			= $this->input->post('misi');
				$letak 			= $this->input->post('letak');
				$kelurahan 		= $this->input->post('kelurahan');
				$kode_kelurahan = $this->input->post('kode_kelurahan');
				$kecamatan 		= $this->input->post('kecamatan');
				$kode_kecamatan = $this->input->post('kode_kecamatan');
				$kabupaten 		= $this->input->post('kabupaten');
				$kode_kabupaten = $this->input->post('kode_kabupaten');
				$provinsi 		= $this->input->post('provinsi');
				$kode_provinsi 	= $this->input->post('kode_provinsi');
				$kode_wilayah 	= $this->input->post('kode_wilayah');
				$kode_pos 		= $this->input->post('kode_pos');
				$telepon 		= $this->input->post('telepon');
				$gambar			= $_FILES['gambar'];
				$logo			= $_FILES['logo'];
				if ($gambar=''){}else{
					$config['upload_path']	= 'assets/gambar';
					$config['allowed_types']= 'jpg|png|jpeg';
					$gambar_lama 			= $this->input->post('gambar2');
					$path 					= 'assets/gambar/';

					$this->load->library('upload', $config);
					if (!$this->upload->do_upload('gambar')) {
						// echo "Upload Gagal";
						// die();
						if ($logo=''){}else{
							$config['upload_path']	= 'assets/gambar';
							$config['allowed_types']= 'jpg|png|jpeg';
							$logo_lama 				= $this->input->post('logo2');
							$path 					= 'assets/gambar/';

							$this->load->library('upload', $config);
							if (!$this->upload->do_upload('logo')) {
								// echo "Upload Gagal";
								// die();
								$data = array(
									'id' 		=> $id,
									'tentang' 	=> $tentang,
									'visi' 		=> $visi,
									'misi' 		=> $misi,
									'letak' 	=> $letak,
									'kelurahan' 		=> $kelurahan,
									'kode_kelurahan' 	=> $kode_kelurahan,
									'kecamatan' 		=> $kecamatan,
									'kode_kecamatan' 		=> $kode_kecamatan,
									'kabupaten' 		=> $kabupaten,
									'kode_kabupaten' 	=> $kode_kabupaten,
									'provinsi' 		=> $provinsi,
									'kode_provinsi' 		=> $kode_provinsi,
									'kode_wilayah' 		=> $kode_wilayah,
									'kode_pos' 	=> $kode_pos,
									'telepon' 		=> $telepon
								);

								$where = array(
									'id' => $id
								);

								$this->M_profil->update_data($where, $data, 'data_profil');
								$this->session->set_flashdata('update', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h5><i class="icon fas fa-check"></i> Selamat!</h5> Berhasil Mengedit Data Profil</div>');
								$arr['update'] = true;
								redirect('profil/index');
							} else {
								$logo=$this->upload->data('file_name');
								@unlink($path.$logo_lama);
								// unlink("../assets/gambar/".$_POST['gambar2']);
								$data = array(
									'id' 		=> $id,
									'tentang' 	=> $tentang,
									'visi' 		=> $visi,
									'misi' 		=> $misi,
									'letak' 	=> $letak,
									'kelurahan' 		=> $kelurahan,
									'kode_kelurahan' 	=> $kode_kelurahan,
									'kecamatan' 		=> $kecamatan,
									'kode_kecamatan' 		=> $kode_kecamatan,
									'kabupaten' 		=> $kabupaten,
									'kode_kabupaten' 	=> $kode_kabupaten,
									'provinsi' 		=> $provinsi,
									'kode_provinsi' 		=> $kode_provinsi,
									'kode_wilayah' 		=> $kode_wilayah,
									'kode_pos' 	=> $kode_pos,
									'telepon' 		=> $telepon,
									'logo' 		=> $logo
								);

								$where = array(
									'id' => $id
								);

								$this->M_profil->update_data($where, $data, 'data_profil');
								$this->session->set_flashdata('update', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h5><i class="icon fas fa-check"></i> Selamat!</h5> Berhasil Mengedit Data Profil</div>');
								$arr['update'] = true;
								redirect('profil/index');
							}		

						}
					} else {
						$gambar=$this->upload->data('file_name');
						@unlink($path.$gambar_lama);
						// unlink("../assets/gambar/".$_POST['gambar2']);
						if ($logo=''){}else{
							$config['upload_path']	= 'assets/gambar';
							$config['allowed_types']= 'jpg|png|jpeg';
							$logo_lama 				= $this->input->post('logo2');
							$path 					= 'assets/gambar/';

							$this->load->library('upload', $config);
							if (!$this->upload->do_upload('logo')) {
								// echo "Upload Gagal";
								// die();
								$data = array(
									'id' 		=> $id,
									'tentang' 	=> $tentang,
									'visi' 		=> $visi,
									'misi' 		=> $misi,
									'letak' 	=> $letak,
									'kelurahan' 		=> $kelurahan,
									'kode_kelurahan' 	=> $kode_kelurahan,
									'kecamatan' 		=> $kecamatan,
									'kode_kecamatan' 		=> $kode_kecamatan,
									'kabupaten' 		=> $kabupaten,
									'kode_kabupaten' 	=> $kode_kabupaten,
									'provinsi' 		=> $provinsi,
									'kode_provinsi' 		=> $kode_provinsi,
									'kode_wilayah' 		=> $kode_wilayah,
									'kode_pos' 	=> $kode_pos,
									'telepon' 		=> $telepon,
									'gambar' 		=> $gambar
								);

								$where = array(
									'id' => $id
								);

								$this->M_profil->update_data($where, $data, 'data_profil');
								$this->session->set_flashdata('update', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h5><i class="icon fas fa-check"></i> Selamat!</h5> Berhasil Mengedit Data Profil</div>');
								$arr['update'] = true;
								redirect('profil/index');
							} else {
								$logo=$this->upload->data('file_name');
								@unlink($path.$logo_lama);
								// unlink("../assets/gambar/".$_POST['gambar2']);
							}		

						}
					}		

				}

				$data = array(
					'id' 			=> $id,
					'tentang' 		=> $tentang,
					'visi' 			=> $visi,
					'misi' 			=> $misi,
					'letak' 		=> $letak,
					'kelurahan' 		=> $kelurahan,
					'kode_kelurahan' 	=> $kode_kelurahan,
					'kecamatan' 		=> $kecamatan,
					'kode_kecamatan' 	=> $kode_kecamatan,
					'kabupaten' 		=> $kabupaten,
					'kode_kabupaten'	=> $kode_kabupaten,
					'provinsi' 			=> $provinsi,
					'kode_provinsi' 	=> $kode_provinsi,
					'kode_wilayah' 		=> $kode_wilayah,
					'kode_pos' 			=> $kode_pos,
					'telepon' 			=> $telepon,
					'gambar' 			=> $gambar,
					'logo' 			=> $logo
				);

				$where = array(
					'id' => $id
				);

				$this->M_profil->update_data($where, $data, 'data_profil');
				$this->session->set_flashdata('update', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h5><i class="icon fas fa-check"></i> Selamat!</h5> Berhasil Mengedit Data Profil</div>');
				$arr['update'] = true;
				redirect('profil/index');
			}

		}

		public function detail_profil($id){
			$this->load->model('M_profil');
			$detail_profil 			= $this->M_profil->detail_data($id);
			$data['detail_profil'] 	= $detail_profil;

			$this->load->view('templates/header2');
			$this->load->view('templates/sidebar2');
			$this->load->view('detail_profil', $data);
			$this->load->view('templates/footer2');
		}

		// public function edit_gambar_profil($id){
		// 	$where 			= array('id' => $id);
		// 	$data['profil'] = $this->M_profil->edit_data($where,'data_profil')->result();
		// 	$this->load->view('templates/header2');
		// 	$this->load->view('templates/sidebar2');
		// 	$this->load->view('edit_gambar_profil', $data);
		// 	$this->load->view('templates/footer2');
		// }

		// public function update_gambar_profil(){
		// 	$id 		= $this->input->post('id');
		// 	$gambar		= $_FILES['gambar'];
		// 	$logo		= $_FILES['logo'];
		// 	if ($gambar=''){}else{
		// 		$config['upload_path']	= 'assets/gambar';
		// 		$config['allowed_types']= 'jpg|png|jpeg';
		// 		$gambar_lama 			= $this->input->post('gambar2');
		// 		$path 					= 'assets/gambar/';

		// 		$this->load->library('upload', $config);
		// 		if (!$this->upload->do_upload('gambar')) {
		// 			echo "Upload Gagal";
		// 			die();
		// 		} else {
		// 			$gambar=$this->upload->data('file_name');
		// 			@unlink($path.$gambar_lama);
		// 			// unlink("../assets/gambar/".$_POST['gambar2']);
		// 		}		

		// 	}
		// 	if ($logo=''){}else{
		// 		$config['upload_path']	= 'assets/gambar';
		// 		$config['allowed_types']= 'jpg|png|jpeg';
		// 		$logo_lama 				= $this->input->post('logo2');
		// 		$path 					= 'assets/gambar/';

		// 		$this->load->library('upload', $config);
		// 		if (!$this->upload->do_upload('logo')) {
		// 			echo "Upload Gagal";
		// 			die();
		// 		} else {
		// 			$logo=$this->upload->data('file_name');
		// 			@unlink($path.$logo_lama);
		// 			// unlink("../assets/gambar/".$_POST['gambar2']);
		// 		}		

		// 	}

		// 	$data = array(
		// 		'id' 		=> $id,
		// 		'gambar' 	=> $gambar,
		// 		'logo' 		=> $logo
		// 	);

		// 	$where = array(
		// 		'id' => $id
		// 	);

		// 	$this->M_profil->update_data($where, $data, 'data_profil');
		// 	$this->session->set_flashdata('update', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h5><i class="icon fas fa-check"></i> Selamat!</h5> Berhasil Mengajukan Surat! Berikut <b>ID</b> anda: <b>' . $id_surat . '</b></div>');
		// 	$arr['update'] = true;
		// 	redirect('profil/index');

		// }






















		// public function edit_profil($id){
		// 	$where = array('id' => $id);
		// 	$data['profil'] = $this->M_profil->edit_data($where,'data_profil')->result();
		// 	$this->load->view('templates/header2');
		// 	$this->load->view('templates/sidebar2');
		// 	$this->load->view('edit_profil', $data);
		// 	$this->load->view('templates/footer2');
		// }

		// public function update_profil(){
		// 	$id = $this->input->post('id');
		// 	$tentang = $this->input->post('tentang');
		// 	$visi = $this->input->post('visi');
		// 	$misi = $this->input->post('misi');
		// 	$letak = $this->input->post('letak');
		// 	$gambar	= $_FILES['gambar'];
		// 	if ($gambar=''){}else{
		// 		$config['upload_path']	= 'assets/gambar';
		// 		$config['allowed_types']= 'jpg|png|jpeg';
		// 		$gambar_lama = $this->input->post('gambar2');
		// 		$path = 'assets/gambar/';

		// 		$this->load->library('upload', $config);
		// 		if (!$this->upload->do_upload('gambar')) {
		// 			echo "Upload Gagal";
		// 			die();
		// 		} else {
		// 			$gambar=$this->upload->data('file_name');
		// 			@unlink($path.$gambar_lama);
		// 			// unlink("../assets/gambar/".$_POST['gambar2']);
		// 		}		

		// 	}

		// 	$data = array(
		// 		'id' => $id,
		// 		'tentang' => $tentang,
		// 		'visi' => $visi,
		// 		'misi' => $misi,
		// 		'letak' => $letak,
		// 		'gambar' => $gambar
		// 	);

		// 	$where = array(
		// 		'id' => $id
		// 	);

		// 	$this->M_profil->update_data($where, $data, 'data_profil');
		// 	redirect('profil/index');

		// }

	}


?>