<?php

	class Login extends CI_Controller {

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
			// $this->load->view('front/header');
			$this->load->view('login');
			// $this->load->view('front/footer');
		}

		public function proses_login()
		{

			$this->form_validation->set_rules('username','username','trim|required', [
				'required' => 'username wajib diisi'

			]);
			$this->form_validation->set_rules('password_2','password_2','trim|required', [
				'required' => 'password wajib diisi'

			]);

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('login');
			} else {
				$username = $this->input->post('username');
				$password_2 = $this->input->post('password_2');

				$user = $username;
				$pass = MD5($password_2);

				$cek = $this->M_login->cek_login($user, $pass);

				if ($cek->num_rows() > 0) {
					foreach ($cek->result() as $ck) {

						// $sess_data['nama'] = $ck->nama;
						$sess_data['username'] = $ck->username;
						$sess_data['level'] = $ck->level;

						$this->session->set_userdata($sess_data);
						$this->session->set_userdata('id', $ck->id); //tambahan pas bikin pengaturan(ganti password)
					}
					if ($sess_data['level'] == 'admin') {
						redirect('admin');
					}else if ($sess_data['level'] == 'pegawai') {
						redirect('pegawai');
					}else{
						$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">username atau password salah<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
						redirect('login');
					}
				}else{
					$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">username atau password salah<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
						redirect('login');
				}
			}

			// if (isset($_POST['login'])) {
			// 	$username = $this->input->post('username', TRUE);
			// 	$password = $this->input->post('password', TRUE);

			// 	$cek = $this->M_login->proseslogin($username, $password);
			// 	$hasil = count($cek);
			// 	if ($hasil > 0){
			// 		$pelogin = $this->db->get_where('data_user', array('username'=>$username, 'password'=>$password))->row();
			// 		if ($pelogin->level == 'admin') {
			// 			redirect('admin');
			// 		} else if ($pelogin->level == 'pegawai'){
			// 			redirect('pegawai');
			// 		}
					
			// 		//echo $pelogin->nama;
			// 		// redirect ('welcome/beranda');
			// 	} else{
			// 		redirect ('login/index');
			// 	}
			// }
		}

		public function beranda()
		{
			$this->load->view('beranda');
		}

		

		public function logout()
		{
			$this->session->sess_destroy();
			redirect ('login/index');
		}
	}

?>
