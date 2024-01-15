<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('assets/dompdf/autoload.inc.php');
use Dompdf\Dompdf;

class Mypdf
{
	protected $ci;

	public function __construct()
	{
		$this->ci =& get_instance();
	}

	public function generate($view, $data = array(), $filename = 'Laporan', $paper = 'A4', $orientation = 'potrait')
	{
		$dompdf = new Dompdf();
		$html = $this->ci->load->view($view, $data, TRUE);
		$dompdf->loadHtml($html);
	    $dompdf->setPaper($paper, $orientation);
	    // Render the HTML as PDF
	    $dompdf->render();
	    $dompdf->stream( $filename . ".pdf", array("Attachment" => FALSE));
	}

	public function surat_keterangan($view, $data = array(), $filename = 'Surat-Keterangan', $paper = 'A5', $orientation = 'potrait')
	{
		$dompdf = new Dompdf(array('enable_remote' => true));
		// $dompdf = new Dompdf(array(15,12));
		// $pdf=new FPDF('P','in',array(15,12));
		// $pdf->setPaper([0, 0, 685.98, 396.85], 'landscape');
		$html = $this->ci->load->view($view, $data, TRUE);
		$dompdf->loadHtml($html);
		// $dompdf->setPaper([0, 0, 595.276, 420.9449], 'landscape');
	    // $dompdf->setPaper([0, 0, 419.53, 595.28], 'potrait');
	    // $dompdf->setPaper([0, 0, 420.9449, 595.276], $orientation);
	    $dompdf->setPaper($paper, $orientation);
	    // $dompdf->setFont('Arial','B',15);
	    // Render the HTML as PDF
	    $dompdf->render();
	    $dompdf->stream( $filename . ".pdf", array("Attachment" => FALSE));
	}

	public function surat_kelahiran($view, $data = array(), $filename = 'Surat-Kelahiran', $paper = 'A4', $orientation = 'potrait')
	{
		$dompdf = new Dompdf(array('enable_remote' => true));
		// $dompdf = new Dompdf();
		$html = $this->ci->load->view($view, $data, TRUE);
		$dompdf->loadHtml($html);
	    $dompdf->setPaper($paper, $orientation);
	    // Render the HTML as PDF
	    $dompdf->render();
	    $dompdf->stream( $filename . ".pdf", array("Attachment" => FALSE));
	}

	public function surat_kematian($view, $data = array(), $filename = 'Surat-Kematian', $paper = 'A4', $orientation = 'potrait')
	{
		$dompdf = new Dompdf(array('enable_remote' => true));
		// $dompdf = new Dompdf();
		$html = $this->ci->load->view($view, $data, TRUE);
		$dompdf->loadHtml($html);
	    $dompdf->setPaper($paper, $orientation);
	    // Render the HTML as PDF
	    $dompdf->render();
	    $dompdf->stream( $filename . ".pdf", array("Attachment" => FALSE));
	}

	public function surat_jejaka_duda($view, $data = array(), $filename = 'Surat-Jejaka-Duda', $paper = 'A4', $orientation = 'potrait')
	{
		$dompdf = new Dompdf();
		$html = $this->ci->load->view($view, $data, TRUE);
		$dompdf->loadHtml($html);
	    $dompdf->setPaper($paper, $orientation);
	    // Render the HTML as PDF
	    $dompdf->render();
	    $dompdf->stream( $filename . ".pdf", array("Attachment" => FALSE));
	}

	public function surat_perawan_janda($view, $data = array(), $filename = 'Surat-Perawan-Janda', $paper = 'A4', $orientation = 'potrait')
	{
		$dompdf = new Dompdf();
		$html = $this->ci->load->view($view, $data, TRUE);
		$dompdf->loadHtml($html);
	    $dompdf->setPaper($paper, $orientation);
	    // Render the HTML as PDF
	    $dompdf->render();
	    $dompdf->stream( $filename . ".pdf", array("Attachment" => FALSE));
	}

	public function surat_pindah_kelurahan($view, $data = array(), $filename = 'Surat-Pindah-Kelurahan', $paper = 'A4', $orientation = 'potrait')
	{
		$dompdf = new Dompdf(array('enable_remote' => true));
		// $dompdf = new Dompdf();
		$html = $this->ci->load->view($view, $data, TRUE);
		$dompdf->loadHtml($html);
	    $dompdf->setPaper($paper, $orientation);
	    // Render the HTML as PDF
	    $dompdf->render();
	    $dompdf->stream( $filename . ".pdf", array("Attachment" => FALSE));
	}

	public function surat_pindah_kecamatan($view, $data = array(), $filename = 'Surat-Pindah-Kecamatan', $paper = 'A4', $orientation = 'potrait')
	{
		$dompdf = new Dompdf(array('enable_remote' => true));
		// $dompdf = new Dompdf();
		$html = $this->ci->load->view($view, $data, TRUE);
		$dompdf->loadHtml($html);
	    $dompdf->setPaper($paper, $orientation);
	    // Render the HTML as PDF
	    $dompdf->render();
	    $dompdf->stream( $filename . ".pdf", array("Attachment" => FALSE));
	}

	public function surat_pindah_kabupaten($view, $data = array(), $filename = 'Surat-Pindah-Kabupaten', $paper = 'A4', $orientation = 'potrait')
	{
		$dompdf = new Dompdf(array('enable_remote' => true));
		// $dompdf = new Dompdf();
		$html = $this->ci->load->view($view, $data, TRUE);
		$dompdf->loadHtml($html);
	    $dompdf->setPaper($paper, $orientation);
	    // Render the HTML as PDF
	    $dompdf->render();
	    $dompdf->stream( $filename . ".pdf", array("Attachment" => FALSE));
	}

	public function surat_filter($view, $data = array(), $filename = 'Surat-Filter', $paper = 'A4', $orientation = 'potrait')
	{
		$dompdf = new Dompdf(array('enable_remote' => true));
		// $dompdf = new Dompdf(array(15,12));
		// $pdf=new FPDF('P','in',array(15,12));
		// $pdf->setPaper([0, 0, 685.98, 396.85], 'landscape');
		$html = $this->ci->load->view($view, $data, TRUE);
		$dompdf->loadHtml($html);
		// $dompdf->setPaper([0, 0, 595.276, 420.9449], 'landscape');
	    // $dompdf->setPaper([0, 0, 419.53, 595.28], 'potrait');
	    // $dompdf->setPaper([0, 0, 420.9449, 595.276], $orientation);
	    $dompdf->setPaper($paper, $orientation);
	    // $dompdf->setFont('Arial','B',15);
	    // Render the HTML as PDF
	    $dompdf->render();
	    $dompdf->stream( $filename . ".pdf", array("Attachment" => FALSE));
	}
}



?>