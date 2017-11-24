<div class="android-content mdl-layout__content">

<div class="mdl-grid">
	<!--********* TABLA DE DATOS ********* -->
	<div class="mdl-cell mdl-cell--8-col mdl-cell--6-col-tablet ">
		
		<div class="demo-card-square mdl-card mdl-shadow--2dp max-width-persona" id="table_institu">
		  <div class="mdl-card__title mdl-card--expand mdl-card--border">
		    <h2 class="mdl-card__title-text">Instituciones registradas</h2>
		  </div>
		  <div class="mdl-card__supporting-text">
		    <table class="table table-striped table-bordered table-responsive-lg" id="tabinstituciones">
		    	<tr>
		    		<th scope="col">Codigo</th>
		    		<th scope="col">Nombre</th>
		    		<th scope="col">Telefono</th>
		    		<th scope="col">Jefe Voluntariado</th>
		    		<th scope="col">Correo</th>
		    		<th scope="col">Acciones</th>
		    	</tr>

		    	<?php foreach ($resInst->result() as $row) { ?>
		    		<tr>
		    			<td><?php echo $row->insti_codigo ?></td>
		    			<td><?php echo $row->insti_nombreinstitucion ?></td>
		    			<td><?php echo $row->insti_telefono ?></td>
		    			<td><?php echo $row->insti_jefevoluntariado ?></td>
		    			<td><?php echo $row->insti_correoelectronico ?></td>
		    			<td hidden><?php $data = "'".$row->insti_codigo."'".","."'".$row->insti_nombreinstitucion."'".","."'".$row->insti_telefono."'".","."'".$row->insti_jefevoluntariado."'".","."'".$row->insti_correoelectronico."'"?></td>

		    			<td hidden><?php $rutaelim = base_url()."index.php/instituciones/eliminar/".$row->insti_codigo ?></td>
		    			<td>
		    				<button class="btn btn-warning btn-sm" onclick="actualizar(<?php echo $data ?>);"">
		    					<i class="material-icons">update</i>
		    				</button>

		    				<a href="<?php echo $rutaelim; ?>" class="btn btn-danger btn-sm">
		    					<i class="material-icons">delete_forever</i>
		    				</a>

		    			</td>		    		
		    		</tr>	    		

		    	<?php } ?>

		    	
		    </table>
		  </div>
		  <!--<div class="mdl-card__actions mdl-card--border">
		    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
		      View Updates
		    </a>
		  </div>-->
		</div>
	</div>
	<!--********* FIN TABLA DE DATOS ********* -->
	<!--********* FORMULARIO INSTITUCIONES ********* -->
	<div class="mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet max-whidth-persona">
		
		<div class="tarjeta-sarea mdl-card mdl-shadow--2dp max-width-persona" id="table_ninstitu">
		  <div class="mdl-card__title  mdl-card--border ">
		    <h2 class="mdl-card__title-text">Nueva institución </h2>

		  </div>
		  <!-- MDL Progress Bar with Indeterminate Progress -->
		  <div class="mdl-progress mdl-js-progress mdl-progress__indeterminate" id="loading"></div>
		  <div class="mdl-card__supporting-text">
			<form method="POST"  action="<?php echo base_url(); ?>index.php/instituciones/registrar" id="frm_institu" name="frm_institu">
			<div class="mdl-grid">
				
				<div class="mdl-textfield mdl-js-textfield">
					<input class="mdl-textfield__input" type="text" id="txt_codigo" name="txt_codigo">
					<label class="mdl-textfield__label" for="txt_codigo">Codigo</label>
				</div>
				
			</div>
			<div class="mdl-grid">
				<div class="mdl-textfield mdl-js-textfield">
					<input class="mdl-textfield__input" type="text" id="txt_nombre" name="txt_nombre">
					<label class="mdl-textfield__label" for="txt_nombre">Nombre</label>
					
				</div>
			</div>
			<div class="mdl-grid">
				<div class="mdl-textfield mdl-js-textfield">
					<input class="mdl-textfield__input" type="text" id="txt_tel" name="txt_tel">
					<label class="mdl-textfield__label" for="txt_tel">Telefono</label>
				</div>
			</div>
			<div class="mdl-grid">
				<div class="mdl-textfield mdl-js-textfield">
					<input class="mdl-textfield__input" type="text" id="txt_jefe" name="txt_jefe">
					<label class="mdl-textfield__label" for="txt_jefe">Jefe voluntariado</label>
				</div>
			</div>
			<div class="mdl-grid">
				<div class="mdl-textfield mdl-js-textfield">
					<input class="mdl-textfield__input" type="text" id="txt_correo" name="txt_correo">
					<label class="mdl-textfield__label" for="txt_correo">Correo</label>
				</div>
			</div>		 
		  </div>
		  <div class="mdl-card__actions mdl-card--border">
		  	<button class="mdl-button mdl-js-button mdl-button--primary">
		  	  Registrar
		  	</button>
		  </div>

		  
		  </form>



		</div>


	</div>
	<!--********* FIN FORMULARIO INSTITUCIONES ********* -->
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal_update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    	<form action="<?php echo base_url(); ?>index.php/instituciones/editar" method="POST">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modificar informacion de la institución</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
		

		<input type="hidden" name="txt_uid" id="txt_uid">
		<label>Nombre</label>
        <input type="text" name="txt_unom" id="txt_unom" class="form-control">
        <label>Telefono</label>	
        <input type="text" name="txt_utel" id="txt_utel" class="form-control">
        <label>Jefe voluntariado</label>	
        <input type="text" name="txt_ujefe" id="txt_ujefe" class="form-control">
	    <label>Correo</label>    
        <input type="text" name="txt_ucorreo" id="txt_ucorreo" class="form-control">
        


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button  class="btn btn-success">Actualizar</button>
      </div>
      </form>

    </div>
  </div>
</div>
<!-- end modal -->

<script type="text/javascript" src="<?php echo base_url(); ?>tools/js/instituciones.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>