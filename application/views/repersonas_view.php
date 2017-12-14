<div class="android-content mdl-layout__content">
	<div class="mdl-cell mdl-cell--12-col mdl-cell--10-col-tablet ">

		<div class="demo-card-square mdl-card mdl-shadow--2dp max-width-persona" cellspacing="0" width="100%" id="table_personas">

		<div class="mdl-card__supporting-text">
			<div class="tablacertificados">
				<div id="buttonAction"></div>
				<!--<form method="GET" action="<?php //echo base_url(); ?>index.php/certlistos/tratar">-->
				<table class="table table-bordered table-striped table-responsive-lg display" id="tbl_perso">
				  <thead>
				    <tr>
				      
				      <th>Identificacion</th>
				      <th>Nombres</th>
				      <th>Apellidos</th>
				      <th>Telefono</th>
				      <th>Celular</th>
				      <th>Correo</th>
				      <th>Modalidad</th>
				      <th>Estado</th>
				      <th>Cantidad Horas</th>
				      <th>Estudios en curso</th>
				      <th>Eps</th>
				      <th>Institucion</th>
				      <th>Acciones</th>
				    </tr>
				  </thead>
				  <tbody>

				  	<?php foreach ($resPerso->result() as $rowdata): ?>
				  	<tr>
				      <td><?php echo $rowdata->perso_cedula ;?></td>
				      <td><?php echo $rowdata->perso_nombres ;?></td>
				      <td><?php echo $rowdata->perso_apellidos ;?></td>
				      <td><?php echo $rowdata->perso_telefonofijo;?></td>
				      <td><?php echo $rowdata->perso_celular;?></td>
				      <td><?php echo $rowdata->perso_usermail;?></td>
				      <td><?php echo $rowdata->perso_modalidad;?></td>
				      <td><?php echo $rowdata->perso_estado;?></td>
				      <td><?php echo $rowdata->perso_canthoras;?></td>
				      <td><?php echo $rowdata->perso_estudiosencurso;?></td>
				      <td><?php echo $rowdata->eps_nombre;?></td>
				      <td><?php echo $rowdata->insti_nombreinstitucion;?></td>
				      <td>
				      	
				      	<a href="<?php echo base_url('index.php/certlistos/solCertificado/');?><?php echo $rowdata->perso_cedula ?>" class="btn btn-sm btn-info" name="btn_solcertificado" id="btn_solcertificado" title="Certificar">
				      		<i class="material-icons">assignment</i>
				      	</a>



				      	<a href="<?php echo base_url('index.php/repersonas/modificar/');?><?php echo $rowdata->perso_cedula ?>" class="btn btn-sm btn-warning" name="btn_modificar" id="btn_modificar" title="Modificar">
				      		<i class="material-icons">update</i>
				      	</a>


				      	<?php $tipoUsus = $this->session->userdata('tipo_usuario'); 
				      	if ($tipoUsus=="Jefe" or $tipoUsus =="Administrador") { ?>


				      	<a href="<?php echo base_url('index.php/repersonas/eliminar/');?><?php echo $rowdata->perso_cedula ?>" class="btn btn-sm btn-danger" name="btn_certificar" id="btn_certificar" title="Eliminar">
				      		<i class="material-icons">delete_forever</i>
				      	</a>
				      	
				      	<?php } ?>
				      	
				      </td>
				    </tr>	
				  	<?php endforeach ?>
				    
				    
					  </tbody>
					</table>
					<!--</form>-->
				</div>
			</div>
			<!--<div class="mdl-card__actions mdl-card--border">
			  	<button class="mdl-button mdl-js-button mdl-button--primary">
			  	  Registrar
			  	</button>
			</div>-->
		</div>

	</div>



<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
	  
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo base_url('tools/js/repersonas.js'); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>	