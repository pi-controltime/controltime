<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Certificadopdf extends CI_Controller {

	function __construct(){
		    parent::__construct();
		    $this->load->model('certlistos_model');
		    //$this->load->library('dompdf/dompdf.php');
		    /*$this->load->library('recaptcha');*/

	}
	public function index()
	{
		if ($this->session->userdata('user_logueado')) {
			$dato['title_page'] = "Listos Certificar | ControlTime";

			$all = $this->certlistos_model->getData();
			$datos['contenido']="hola mi primer pdf con codeigniter";
			/*$datos = array(
				"restabla"=>$all

			);*/
			$data['the_content']='mPDF and CodeIgniter are cool!';

			
			$this->load->view('certificadopdf_view',$datos);
			
		}
		else
		{
			echo "<script>alert('No iniciaste sesion, no puedes ingresar a este lugar.');</script>";
			redirect('index.php/login', 'refresh');
		}
	}

	public function descargar(){

			$op = $this->uri->segment(3);

			$data['contenido']='mPDF and CodeIgniter are cool!';
			        //load the view and saved it into $html variable
			        $html=$this->load->view('certificadopdf_view', $data, true);
			 
			        //this the the PDF filename that user will get to download
			        $pdfFilePath = "output_pdf_name.pdf";
			 
			        //load mPDF library
			        $this->load->library('m_pdf');
			 
			       //generate the PDF from the given html
			        $this->m_pdf->pdf->WriteHTML($html);
			 
			        //download it.
			        $this->m_pdf->pdf->Output($pdfFilePath, "D");      
	}
	
	private function createFolder()
	
	{
	    if(!is_dir("./files"))
	    {
	        mkdir("./files", 0777);
	        mkdir("./files/pdfs", 0777);
	    }
	}

}
