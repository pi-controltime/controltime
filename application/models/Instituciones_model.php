<?php 
class Instituciones_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	/*All functions*/
	function getAll(){
		$allInst = $this->db->query("select * from instituciones order by insti_codigo asc");
		if ($allInst->num_rows()>0) {
			return $allInst;
		}
		else
		{
			return false;
		}
	}

	function registrarInsti($data){
		
		//print_r($data);
		$this->db->insert("instituciones", $data);
		echo "<script>alert('Institucion registrada con exito!!.');</script>";

		redirect('index.php/instituciones', 'refresh');

	}
	function eliminaReg($mivar){
		$this->db->where('insti_codigo',$mivar);
		$this->db->delete('instituciones');
		echo "<script>alert('Institucion eliminada con exito!!.');</script>";

		redirect('index.php/instituciones', 'refresh');
	}
	function actualizarReg($id,$datos){
		$this->db->where('insti_codigo',$id);
		$this->db->update('instituciones',$datos);
		echo "<script>alert('Institucion actualizada con exito!!.');</script>";

		redirect('index.php/instituciones', 'refresh');

	}

}
?>