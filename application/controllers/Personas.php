<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personas extends CI_Controller {

	function __construct(){
		    parent::__construct();
		    $this->load->model('personas_model');
		    $this->load->library('form_validation');
		    /*$this->load->library('recaptcha');*/

	}
	public function index()
	{
		if ($this->session->userdata('user_logueado')) {
			$dato['title_page'] = "Personas | ControlTime"; 
			
			$ins=$this->personas_model->getInstitu();
			$eps=$this->personas_model->getEPS();
			$sar=$this->personas_model->getSarea();
			$jefe=$this->personas_model->getJefe();

			$datosList = array(
				"insti"=>$ins,
				"eps"=>$eps,
				"sarea"=>$sar,
				"jefe"=>$jefe
			);

			$this->load->view('templates/header_principal', $dato);
			$this->load->view('personas_view', $datosList);
			$this->load->view('templates/footer_principal');
		}
		else
		{
			echo "<script>alert('No iniciaste sesion, no puedes ingresar a este lugar.');</script>";
			redirect('index.php/login', 'refresh');
		}
	}

	public function registrar()
	{

		//if ($this->input->is_ajax_request()) {

			date_default_timezone_set('America/Bogota');
			$dateTime=date('Y/m/d h:i:s', time());
			
			$doc = $this->input->post('txt_doc');

			$nom = $this->input->post('txt_nombres');
			$ap = $this->input->post('txt_apellidos');
			$telfijo = $this->input->post('txt_telfijo');
			$cel = $this->input->post('txt_cel');
			$modalidad = $this->input->post('txt_modalidad');
			$correo = $this->input->post('txt_correo');
			
			if (empty($pass)) {
				$pass = "NULL";
			}
			else
			{
				$pass = md5($this->input->post('txt_pass'));

			}
			$inst = $this->input->post('select_institucion');
			$eps = $this->input->post('select_eps');
			$sarea = $this->input->post('select_subarea');
			$canthoras = $this->input->post('txt_canthoras');
			$carreracurso = $this->input->post('txt_carreracurso');
			$tipousu = $this->input->post('select_tipusu');
			$jefe = $this->input->post('select_jefe');	

			$datos = array(
				"perso_cedula"=> $doc, 
				"perso_tipo"=> $tipousu,
				"perso_nombres"=> $nom,
				"perso_apellidos"=> $ap,
				"perso_telefonofijo"=> $telfijo,
				"perso_celular"=> $cel,
				"perso_usermail"=> $correo,
				"perso_contrasena"=> $pass,
				"perso_jefe"=> $jefe,
				"perso_modalidad"=> $modalidad,
				"perso_estado"=> "Activo",
				"perso_canthoras"=> $canthoras,
				"perso_estudiosencurso"=> $carreracurso,	 
				"perso_fecharegistro"=> $dateTime, 
				"perso_registradopor"=> "admin",
				"eps_codigo"=> $eps,
				"insti_codigo"=> $inst,
				"suba_codigo"=> $sarea

			);
			

			$this->personas_model->registrarDatos($datos);

		
	}
	public function getPersonas(){
	 	$res = $this->personas_model->getAll();


	}
}