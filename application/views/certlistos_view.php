<div class="android-content mdl-layout__content">
	<div class="tablacertificados">

		<table class="table table-bordered table-striped">
		  <thead>
		    <tr>
		    	<th>Identificacion</th>
		      <th>Nombres</th>
		      <th>Apellidos</th>
		      <th>Fecha</th>
		      <th>Hora ingreso</th>
		      <th>Hora salida</th>
		      <th># horas realizadas</th>
		    </tr>
		  </thead>
		  <tbody>

		  	<?php foreach ($restabla->result() as $rowdata): ?>
		  	<tr>
		      <td><?php echo $rowdata->perso_cedula ;?></td>
		      <td><?php echo $rowdata->perso_nombres ;?></td>
		      <td><?php echo $rowdata->perso_apellidos ;?></td>
		      <td><?php echo $rowdata->contro_fecha;?></td>
		      <td><?php echo $rowdata->contro_horaingreso;?></td>
		      <td><?php echo $rowdata->contro_horasalida;?></td>
		      <td><?php echo $rowdata->cant_horas;?></td>
		    </tr>	
		  	<?php endforeach ?>
		    
		    
		  </tbody>
		</table>


	</div>
	


	
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>	
