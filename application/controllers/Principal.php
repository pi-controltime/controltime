<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	function __construct(){
		    parent::__construct();
		    $this->load->model('principal_model');
		    $this->load->model('certlistos_model');
		    $this->load->model('repersonas_model');
		    /*$this->load->library('recaptcha');*/

	}
	public function index()
	{

		if ($this->session->userdata('user_logueado')) {
			$dato['title_page'] = "Principal | ControlTime"; 
		
			$this->load->view('templates/header_principal', $dato);
			$this->load->view('principal_view');
			$this->load->view('templates/footer');
		}
		else
		{
			echo "<script>alert('No iniciaste sesion, no puedes ingresar a este lugar.');</script>";
			redirect('index.php/login', 'refresh');
		}
		
	}
	public function registrar(){
		//consigo las horas acumiladas de los empleados
		

		

		$doc = $this->input->get('txt_doc');
		$opt = $this->input->get('options');
		date_default_timezone_set('America/Bogota');
		$dateTime=date('Y/m/d h:i:s', time());
		
		

		//consigo los datos de la persona
		$dataPerso=$this->repersonas_model->obtener($doc);
		//obtego los datos acumulados por persona
		$horAcum = $this->certlistos_model->obtenerData($doc);

		$date = date('Y/m/d');
		$dateMax = date('Y/m/d',strtotime($horAcum[0]->Hasta));
		

		$usuario=$this->session->userdata('name_usuario');
		//revisar si existe el usuario en la base de datos
		if ($dataPerso) {

			switch ($opt) {
				case '1':

					

						if ($horAcum) {
							
							if ($dateMax == $date) {
								echo "<script>alert('Ya tiene registrada una entrada el dia de hoy, no puede registrar dos entradas el mismo dia.');</script>";

								redirect('index.php/principal', 'refresh');
								
								
							}
							else
							{
								if ($horAcum[0]->HorasAcumuladas >= $horAcum[0]->perso_canthoras) {
									echo "<script>alert('No podemos registrar esta entrada por que la persona con cedula  ".$doc." ya cumplio con sus horas de voluntariado, para mas información consulte el reporte de horas.');</script>";

										redirect('index.php/principal', 'refresh');
								}
								else
								{
									$datos = array(
												"contro_fecha"=>$date,
												"contro_horaingreso"=>$dateTime,
												"contro_horasalida"=>$dateTime,
												"contro_fecharegistro"=>$dateTime,
												"contro_registradopor"=>$usuario,
												"perso_cedula"=>$doc

											);
									$this->principal_model->registrar($datos);
								}
								
								
							}
						}
						else
						{
							$datos = array(
										"contro_fecha"=>$date,
										"contro_horaingreso"=>$dateTime,
										"contro_horasalida"=>$dateTime,
										"contro_fecharegistro"=>$dateTime,
										"contro_registradopor"=>$usuario,
										"perso_cedula"=>$doc

									);
							$this->principal_model->registrar($datos);
						}
						
						
					

					
				break;
						
				case '2':
					//comprobar si ya tiene registrada una entrada
					if ($horAcum) {
						if ($dateMax == $date) {
							if ($horAcum[0]->HorasAcumuladas >= $horAcum[0]->perso_canthoras) 
							{
										echo "<script>alert('No podemos registrar esta salida por que la persona con numero de documento  ".$doc." ya cumplio con sus horas de voluntariado, para mas información consulte el reporte de horas.');</script>";

											redirect('index.php/principal', 'refresh');
							}
							else
							{
									$datos = array(
										"contro_horasalida"=>$dateTime
							

									);

									$this->principal_model->regSalida($doc,$date,$dateTime);
									
							}
						}
						else
						{
							echo "<script>alert('No encontramos registrada una entrada el dia de hoy para la persona con el numero de documento  ".$doc." antes de registrar una salida debe registrar una entrada.');</script>";

								redirect('index.php/principal', 'refresh');
						}	
					}
					else
					{
						echo "<script>alert('No encontramos registrada una entrada con el numero de documento  ".$doc." antes de registrar una salida debe registrar una entrada.');</script>";

							redirect('index.php/principal', 'refresh');

					}
					
				break;
			}	
		}
		else
		{
			echo "<script>alert('El documento numero ".$doc." no se encuentra registrado en la base de datos, por favor asegurese de que este bien escrito y/o que se encuentre registrado.');</script>";
				redirect('index.php/principal', 'refresh');
		}	
	}
	
}