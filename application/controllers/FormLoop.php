<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class FormLoop extends CI_Controller {

  public function index()
  {
    $data['title'] = "Insert Form Looping Using Javascript";
    $this->load->view('form/form_loop', $data);
  }

  public function post()
  {
    $i = 0; // untuk loopingnya
    $a = $this->input->post('nik_pindah');
    if ($a[0] !== null) 
    {
      foreach ($a as $row) 
      {
        $data = [
          'nik'=>$row,
        ];

        $insert = $this->db->insert('nik_pindah', $data);
        if ($insert) {
          $i++;
        }
      }
    }

    $arr['success'] = true;
    $arr['notif']  = '<div class="alert alert-success">
      <i class="fa fa-check"></i> Data Berhasil Disimpan
    </div>';
    return $this->output->set_output(json_encode($arr));

  }

}

/* End of file FormLoop.php */
/* Location: ./application/controllers/FormLoop.php */