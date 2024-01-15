<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grafik extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('M_grafik');
    }

    function index()
    {
      $data['hasil']=$this->M_grafik->Jum_mahasiswa_perjurusan();
      $this->load->view('v_grafik',$data);
    }
}
?>