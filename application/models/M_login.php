<?php

	class M_login extends CI_Model {

		public function cek_login($username, $password_2)
		{
			$this->db->where("username", $username);
			$this->db-> where("password_2", $password_2);
			return $this->db->get('data_user');
		}

		public function getLoginData($user, $pass)
		{
			$u = $user;
			$p = MD5($pass);

			$query_cekLogin = $this->db->get_where('data_user', array('username' => $u, 'password_2' => $p));

			if(count($query_cekLogin->result()) > 0){
				foreach ($query_cekLogin->result() as $qck) {
					foreach ($query_cekLogin->result() as $ck) {
						$sess_data ['logged_in'] = TRUE;
						$sess_data ['username']	 = $ck->username;
						$sess_data ['password_2']	 = $ck->password_2;
						$sess_data ['level']	 = $ck->level;
						$this->session->set_userdata($sess_data);
					}
					redirect('administrator/dashboard');
				}
			}else{
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">username atau password salah<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
				redirect('login');
			}
		}

		// public function proseslogin($username, $password){
		// 	$this->db->where('username', $username);
		// 	$this->db->where('password', $password);

		// 	return $this->db->get('data_user')->row();
		// }
	}

?>
