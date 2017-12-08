<div class="android-content mdl-layout__content">
	
	<div class="mdl-cell mdl-cell--12-col mdl-cell--10-col-tablet ">
		
		<div class="demo-card-square mdl-card mdl-shadow--2dp max-width-persona" cellspacing="0" width="100%" id="table_institu">
		  <!--<div class="mdl-card__title mdl-card--expand mdl-card--border">

		  	<div class="mdl-row">
		  		<h2 class="mdl-card__title-text">Filtros</h2>
		  	</div>
		    <div class="mld-row">
		    	<div class="mdl-cell mdl-cell--12-col mdl-cell--10-col-tablet">
		    		
		    	</div>
		    </div>

		  </div>-->
		 
		<div class="mdl-card__supporting-text">
			<div class="tablacertificados">
				<!--<form method="GET" action="<?php //echo base_url(); ?>index.php/certlistos/tratar">-->
				<table class="table table-bordered table-striped table-responsive-lg display" id="tbl_reg">
				  <thead>
				    <tr>
				    	<th>Identificacion</th>
				      <th>Nombres</th>
				      <th>Apellidos</th>
				      <th>Desde</th>
				      <th>Hasta</th>
				      <th>Horas Acumuladas</th>
				      <th>Horas a realizar</th>
				      <th>Estado del certificado</th>
				      <th>Acciones</th>
				    </tr>
				  </thead>
				  <tbody>

				  	<?php foreach ($restabla->result() as $rowdata): ?>
				  	<tr>
				      <td><?php echo $rowdata->perso_cedula ;?></td>
				      <td><?php echo $rowdata->perso_nombres ;?></td>
				      <td><?php echo $rowdata->perso_apellidos ;?></td>
				      <td><?php echo $rowdata->Desde;?></td>
				      <td><?php echo $rowdata->Hasta;?></td>
				      <td><?php echo $rowdata->HorasAcumuladas;?></td>
				      <td><?php echo $rowdata->perso_canthoras;?></td>
				      <td><?php //echo $rowdata->estcertificado_persona;?>
				      		<?php if ($rowdata->estcertificado_persona == "No certificado"): ?>
				      			<span class="badge badge-danger">
				      				No certificado
				      				
				      			</span>
				      		<?php endif ?>
				      		<?php if ($rowdata->estcertificado_persona == "Pendiente"): ?>
				      			<span class="badge badge-warning">
				      				Pendiente
				      				
				      			</span>
				      		<?php endif ?>
				      		<?php if ($rowdata->estcertificado_persona == "Certificado"): ?>
				      			<span class="badge badge-success">
				      				Certificado
				      				
				      			</span>
				      		<?php endif ?>
				      </td>
				      <td>
				      	
				      	<a href="<?php echo base_url('index.php/certlistos/solCertificado/');?><?php echo $rowdata->perso_cedula ?>" class="btn btn-sm btn-warning" name="btn_solcertificado" id="btn_solcertificado" title="Solicitar certificado">
				      		<i class="material-icons">check</i>
				      	</a>
				      	<?php $tipoUsus = $this->session->userdata('tipo_usuario'); 
				      	if ($tipoUsus=="Jefe" or $tipoUsus =="Administrador") { ?>
				      	<a href="<?php echo base_url('index.php/certlistos/certificar/');?><?php echo $rowdata->perso_cedula ?>" class="btn btn-sm btn-success" name="btn_certificar" id="btn_certificar" title="Certificar">
				      		<i class="material-icons">done_all</i>
				      	</a>
				      	<a href="<?php echo base_url('index.php/certlistos/cancelCertificado/');?><?php echo $rowdata->perso_cedula ?>" class="btn btn-sm btn-danger" name="btn_cancelcertificado" id="btn_cancelcertificado" title="Cancelar certificado">
				      		<i class="material-icons"><i class="material-icons">cancel</i></i>
				      	</a>
				      	<?php } ?>
				      	<a href="<?php echo base_url('index.php/certlistos/repPdf/');?><?php echo $rowdata->perso_cedula ?>" class="btn btn-sm btn-danger" name="btn_pdf" id="btn_pdf" title="Generar PDF">
				      		<i class="material-icons">picture_as_pdf</i>
				      	</a>
				      	<a href="<?php echo base_url('index.php/certlistos/sendMail/');?><?php echo $rowdata->perso_cedula ?>" class="btn btn-sm btn-dark" name="btn_enviar" id="btn_enviar" title="Enviar por correo">
				      		<i class="material-icons">send</i>
				      	</a>
				      	
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
	<script type="text/javascript" src="<?php echo base_url()?>tools/js/certlistos.js"></script>


	
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>	
