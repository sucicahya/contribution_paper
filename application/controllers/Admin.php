<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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

	public function __construct(){
			parent::__construct();

			if ($this->session->userdata('level')!='admin') {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">login dulu<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
				redirect ('login');
			}
		}

	public function index()
	{
		$data['hitung_struktur']	= $this->M_admin->hitung_struktur();
		$data['hitung_pengumuman']	= $this->M_admin->hitung_pengumuman();
		$data['hitung_pengaduan']	= $this->M_admin->hitung_pengaduan();
		$data['hitung_pengguna']	= $this->M_admin->hitung_pengguna();

		$this->load->view('templates/header2');
		$this->load->view('templates/sidebar2');
		$this->load->view('admin', $data);
		$this->load->view('templates/footer2');
	}

	// public function jumlah_struktur(){
	// 	$data['admin']= $this->M_admin->hitung_struktur()->result();

	// 	$this->load->view('templates/header2');
	// 	$this->load->view('templates/sidebar2');
	// 	$this->load->view('admin', $data);
	// 	$this->load->view('templates/footer2');
			
	// 	}

	// public function dashboard()
	// {
	// 	$this->load->view('templates/header');
	// 	$this->load->view('templates/sidebar');
	// 	$this->load->view('dashboard');
	// 	$this->load->view('templates/footer');
	// }
}
