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
		$dato['title_page'] = "Personas | ControlTime"; 
		
		$ins=$this->personas_model->getInstitu();
		$eps=$this->personas_model->getEPS();
		$sar=$this->personas_model->getSarea();

		$datosList = array(
			"insti"=>$ins,
			"eps"=>$eps,
			"sarea"=>$sar
		);

		$this->load->view('templates/header_principal', $dato);
		$this->load->view('personas_view', $datosList);
		$this->load->view('templates/footer_principal');
	}

	public function registrar()
	{

		if ($this->input->is_ajax_request()) {

			$doc = $this->input->post('txt_doc');

			$nom = $this->input->post('txt_nombres');
			$ap = $this->input->post('txt_apellidos');
			$telfijo = $this->input->post('txt_telfijo');
			$cel = $this->input->post('txt_cel');
			$modalidad = $this->input->post('txt_modalidad');
			$correo = $this->input->post('txt_correo');
			$pass = $this->input->post('txt_pass');
			$inst = $this->input->post('select_institucion');
			$eps = $this->input->post('select_eps');
			$sarea = $this->input->post('select_subarea');	

			/*Reglas para validar formulario*/
			/*Sintaxis set_rules('nomcampo','nombre a mostrar','reglas de validacion')*/
			$this->form_validation->set_rules('doc','Identificación','trim|required|integer|min_length[3]');
			/*$this->form_validation->set_rules('nom','Nombres','require');
			$this->form_validation->set_rules('ap','Apellidos','require');
			$this->form_validation->set_rules('telfijo','Telefono Fijo','integer');
			$this->form_validation->set_rules('cel','Celular','integer');
			$this->form_validation->set_rules('modalidad','Modalidad','min_length[3]');
			$this->form_validation->set_rules('correo','Correo','require|valid_email');
			$this->form_validation->set_rules('pass','Contraseña','min_length[6]');
			$this->form_validation->set_rules('inst','Institucion','require');
			$this->form_validation->set_rules('eps','Eps','require');
			$this->form_validation->set_rules('sarea','Area','require');*/

			$this->form_validation->set_message("doc","Debe diligenciar el numero de indentificación.");
			/*$this->form_validation->set_message("nom","El campo nombres no debe estar vacio.");
			$this->form_validation->set_message("ap","El campo apellidos no debe estar vacio.");
			$this->form_validation->set_message("telfijo","El telefono fijo debe ser de caracter numerico.");
			$this->form_validation->set_message("cel","El numero de celular no puede contener texto.");
			$this->form_validation->set_message("modalidad","No puede contener menos de 3 caracteres");
			$this->form_validation->set_message("correo","El formato de su correo es invalido, verifique.");
			$this->form_validation->set_message("pass","Por su seguridad la contraseña debe tener 6 caracteres como minimo y debe incluir Mayusculas, Minusculas y numeros.");
			$this->form_validation->set_message("inst","Debe seleccionar una institucion, si no la encuentra en la lista debera crearla.");
			$this->form_validation->set_message("eps","Debe seleccionar una eps, si no la encuentra en la lista debera crearla.");
			$this->form_validation->set_message("sarea","Debe seleccionar una sub area, si no la encuentra en la lista debera crearla.");	*/

			if ($this->form_validation->run() == FALSE) {
				//echo "No cumple con las validaciones";
				echo $this->form_validation->run()."mal"." ".$doc;
			}
			else
			{
				echo $this->form_validation->run()."bien";

			}

		}
		
	}
}