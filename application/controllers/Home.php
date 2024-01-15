<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $data['profil']= $this->M_profil->tampil_data()->result();
        $this->load->view('front/header');
        $this->load->view('home', $data);
        // $this->load->view('front/footer');
        // $this->load->view('home');
        // $this->load->view('templates/footer2');
        // $data = $this->dashboard->user();
        // $data['profil'] = $this->galery->profil();
        

        // $data['sm'] = $this->db->get('surat_masuk')->row_array();
        // var_dump($data);
        // $this->load->view('templates/header', $judul);
        // $this->load->view('home');
        // $this->load->view('templates/footer',$data);
    }
}
