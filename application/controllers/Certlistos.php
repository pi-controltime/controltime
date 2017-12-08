<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//require base_url().'/PHPMailer/PHPMailer/src/PHPMailer.php';
//require base_url().'/PHPMailer/PHPMailer/src/SMTP.php';


class Certlistos extends CI_Controller {

	function __construct(){
		    parent::__construct();
		   
		    $this->load->model('certlistos_model');
		    //$this->load->library('Pdf');

		    /*$this->load->library('recaptcha');*/

	}
	public function index()
	{
		if ($this->session->userdata('user_logueado')) {
			$dato['title_page'] = "Listos Certificar | ControlTime";

			$all = $this->certlistos_model->getData();

			$datos = array(
				"restabla"=>$all
			);

			$this->load->view('templates/header_principal', $dato);
			$this->load->view('certlistos_view',$datos);
			$this->load->view('templates/footer_principal');
		}
		else
		{
			echo "<script>alert('No iniciaste sesion, no puedes ingresar a este lugar.');</script>";
			redirect('index.php/login', 'refresh');
		}
	}



	public function sendMail($de,$para,$asunto,$mensaje)
	{
		//configuracion para gmail
		 /*$configGmail = array(
		 'protocol' => 'smtp',
		 'smtp_host' => 'smtp.gmail.com',
		 'smtp_port' => 587,
		 'smtp_crypto' => 'tls',
		 'smtp_user' => 'dzambrano.226@gmail.com',
		 'smtp_pass' => 'Santiago3116284343',
		 'mailtype' => 'html',
		 'charset' => 'utf-8',
		 'newline' => "\r\n"
		 );   */

		 //Indicamos el protocolo a utilizar
        $config['protocol'] = 'smtp';
         
       //El servidor de correo que utilizaremos
        $config["smtp_host"] = 'ssl://smtp.gmail.com';
         
       //Nuestro usuario
        $config["smtp_user"] = 'gzambrano@sanmateo.edu.co';
         
       //Nuestra contraseña
        $config["smtp_pass"] = '3113663725';    
         
       //El puerto que utilizará el servidor smtp
        $config["smtp_port"] = '465';
        
       //El juego de caracteres a utilizar
        $config['charset'] = 'utf-8';
 
       //Permitimos que se puedan cortar palabras
        $config['wordwrap'] = TRUE;
         
       //El email debe ser valido  
       $config['validate'] = true;

		 //cargamos la configuración para enviar con gmail
		  $this->email->initialize($config);
		  
		  $this->email->from('dzambrano.226@gmail.com', 'David Zambrano - Controltime');
		  $this->email->to($para);
		  $this->email->subject($asunto);
		  $this->email->message($mensaje);
		  $this->email->send();
		  //con esto podemos ver el resultado
		  var_dump($this->email->print_debugger());
		  
	}
	function solCertificado()
	{
		$op = $this->uri->segment(3);

		date_default_timezone_set('America/Bogota');
		$dateTime=date('Y/m/d h:i:s', time());

		$usu = $this->session->userdata('name_usuario');
		
		$data = array(
			"perso_fecharegistro"=>$dateTime,
			"perso_registradopor"=>$usu,
			"estcertificado_persona"=>"Pendiente"

		);

		/*$de=$usu;
		$para=$usu;
		$asunto="Solicitud de certificado registrada - Controltime";
		$mensaje="<h2>Email enviado con codeigniter haciendo uso del smtp de gmail</h2><hr><br> Bienvenido al blog";*/
		
		$this->certlistos_model->certificar($op,$data);

		//$this->sendMail($de,$para,$asunto,$mensaje);

		echo "<script>alert('Su solicitud fue generada. Tan pronto se autorice la certificacion el estado estar cambiando.');</script>";
			redirect('index.php/certlistos', 'refresh');
	}
	function certificar()
	{
		$op = $this->uri->segment(3);

		date_default_timezone_set('America/Bogota');
		$dateTime=date('Y/m/d h:i:s', time());


		
		$usu = $this->session->userdata('name_usuario');
		
		$data = array(
			"perso_fecharegistro"=>$dateTime,
			"perso_registradopor"=>$usu,
			"estcertificado_persona"=>"Certificado"

		);
		
		$this->certlistos_model->certificar($op,$data);
		echo "<script>alert('Certificado generado, se envio una copia de este al voluntario y a la institucion.');</script>";
			redirect('index.php/certlistos', 'refresh');
	}
	function repPdf()
	{
		$op = $this->uri->segment(3);
		date_default_timezone_set('America/Bogota');
		$dateTime=date('Y/m/d h:i:s', time());
		$fecha = date('Y/m/d');

		$namePDF = "Cert".$op."_".$dateTime.".pdf";

		$dataPersona = $this->certlistos_model->getDataPersona($op);
		$dataFechas = $this->certlistos_model->getDataFechas($op);


		foreach ($dataPersona as $a) {

				$id = $a->perso_cedula;
				$nom= $a->perso_nombres." ".$a->perso_apellidos;
				$cantHoras = $a->perso_canthoras;
		}
		foreach ($dataFechas->result() as $f) {
			
			$fini = $f->Desde;
			$ffin =$f->Hasta;
		}
		
		$this->load->library('pdf');
		
		/*$a = new mpdf();
		var_dump($a);*/
		//$this->load->view('certificadopdf_view');
		$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
		$pdf->SetTitle('Certificado Voluntariado');
		$pdf->SetHeaderMargin(30);
		$pdf->SetTopMargin(20);
		$pdf->setFooterMargin(20);
		$pdf->SetAutoPageBreak(true);
		$pdf->SetAuthor('Author');
		$pdf->SetDisplayMode('real', 'default');

		$pdf->AddPage();

		$header = '<div class="ff2"><span class="a">Santa fe de Bogot&aacute;&nbsp; '.$fecha.'</span></div>
		<div class="ff4">&nbsp;</div>
		<div class="ff4">&nbsp;</div>
		<div class="ff2"><span class="a">Por medio de la presente el Banco de alimentos de Bogota, hace constar que:</span></div>
		<div class="ff2">&nbsp;</div>
		
		';

		$body = '<div class="ff3">'.$nom.' identificado con documento numero '.$id.',<span class="a"> cumplio con '.$cantHoras.'</span><span class="a"> hrs prestando el servicio de voluntariado entre '.$fini.' a '.$ffin.'</span>
		<div class="ff3">&nbsp;</div>
		<span class="a">A continuacion se describe las horas realizadas por dia:</span>
		<div class="ff3">&nbsp;</div>
		<div class="ff3">&nbsp;</div>

		<table>
			<tr>
				<th>Fecha</th>
				<th>Horas realizadas</th>

			</tr>
			<tr>
				<td>2017-12-12</td>
				<td>8</td>

			</tr>
		</table>

		<div class="ff3">&nbsp;</div>
		<div class="ff3">&nbsp;</div>
		<div class="ff3">&nbsp;</div>';

		$footer = '<span class="a">La presente solicitud se firma en la ciudad de Bogota el '.$fecha.'</span></div>
		<div class="ff3">&nbsp;</div>
		<div class="ff3">&nbsp;</div>
		<div class="ff3">&nbsp;</div>
		<div class="ff3">&nbsp;</div>
		<div class="ff3">&nbsp;</div>
		<div class="ff3"><span class="a">_______________________</span></div>
		<div class="ff3"><span class="a">Jefe de voluntariado</span></div>';

		$html = $header.$body.$footer;

		$pdf->writeHTML($html, true, false, true, false, '');
		//$pdf->Write(5, 'Some sample text');
		$pdf->Output($namePDF, 'I');


	}
	function enviarMailManual()
	{
		$op = $this->uri->segment(3);
	}
	function cancelCertificado(){
		$op = $this->uri->segment(3);

		date_default_timezone_set('America/Bogota');
		$dateTime=date('Y/m/d h:i:s', time());
		
		$usu = $this->session->userdata('name_usuario');
		
		$data = array(
			"perso_fecharegistro"=>$dateTime,
			"perso_registradopor"=>$usu,
			"estcertificado_persona"=>"No certificado"

		);
		$this->certlistos_model->certificar($op,$data);
		echo "<script>alert('Certificado generado, se envio una copia de este al voluntario y a la institucion.');</script>";
			redirect('index.php/certlistos', 'refresh');		
	}
}
