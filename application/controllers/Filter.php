<?php
	class Filter extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model('M_filter');

			// if ($this->session->userdata('level')!='pegawai') {
			// 	$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">login dulu<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			// 	redirect ('login');
			// }
		}

		public function index (){
			// $data['inventory']= $this->M_inventory->tampil_data()->result();
			// require FCPATH . 'vendor/autoload.php';

			// $this->load->library('CsvReader');
			// $csvFilePath = 'cp.csv';
			// $columnIndex = 1;
			// $data['inventory'] = $this->csvreader->get_column($csvFilePath, $columnIndex);




			// $this->load->view('templates/header');
			// $this->load->view('templates/sidebar');
			// $this->load->view('inventory', $data);
			// $this->load->view('templates/footer');
			$getdata = $this->M_inventory->getdatareg();
			$data['datareg'] = $getdata;
			$data['filter']= $this->M_filter->tampil_data()->result();

			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('filter', $data);
			$this->load->view('templates/footer');
		}

		public function getdatakantor(){
			$id_regional = $this->input->post('data_regional');
			$getdataktr = $this->M_filter->getdataktr($id_regional);
			// var_dump($getdataktr);
			echo json_encode($getdataktr);
		}

	}


?>