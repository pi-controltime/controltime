<div class="android-content mdl-layout__content">

	<div class="mdl-grid">
		<div class="mdl-cell mdl-cell--8-col mdl-cell--6-col-table">
			
			<div class="demo-card-wide mdl-card1 mdl-shadow--2dp ">
		  
				  <div class="mdl-card__title">
				    <h2 class="mdl-card__title-text">REGISTRO DATOS DEL SUBAREA</h2>
				  </div>
				  <div class="mdl-card__actions mdl-card--border"></div>
				<div class="mdl-card__supporting-text">
			
					<table class="table table-striped table-bordered table-responsive-lg">
						<thead>
							<tr>
								<th>Id</th>
								<th>Nombre del Subarea</th>
								<th>Nombre del Area</th>
								<th> Acciones </th>

							</tr>
						</thead>

						<tbody>
								<?php foreach($todasubarea-> result () as $subareas):?>
										<tr>
											<td> <?php echo $subareas->suba_CODIGO ; ?> </td>
											<td> <?php echo $subareas->suba_NOMBRE ; ?> </td>
											<td hidden><?php $rutaeliminar=base_url()."index.php/subareas/eliminar/".$subareas->suba_CODIGO ?></td>
											<td hidden><?php $data = "'".$subareas->suba_CODIGO."'".","."'".$subareas->suba_NOMBRE."'"?></td>
											<td>
												<button class="btn btn-warning btn-sm" onclick="actualizar(<?php echo $data ?>);"">
														<i class="material-icons">update</i>
							    				</button>

												<a href="<?php echo $rutaeliminar ?>" class="btn btn-danger">
													<i class="material-icons">delete_forever</i>
												</a> 

											</td>
											
										</tr>
								<?php endforeach; ?>
							
						</tbody>

					</table>
				</div>

			</div>
		</div>	


		<div class="mdl-cell mdl-cell--4-col mdl-cell--2-col-table">

		 			<div class="demo-card-wide mdl-card mdl-shadow--2dp ba-center">
				  

				  <div class="mdl-card__title">
				    <h2 class="mdl-card__title-text">Subareas</h2>
				  </div>
				  <div class="mdl-card__actions mdl-card--border"></div>
				  <div class="mdl-card__supporting-text">
				  	<form name="frm_subareas" method="POST" action="<?php echo base_url(); ?>index.php/subareas/validar">
				  	<!-- CONTENIDO -->
				  	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				  	    <input class="mdl-textfield__input" type="text" id="suba_NOMBRE" name="suba_NOMBRE">
				  	    <!--Ingreso -->
				  	    <label class="mdl-textfield__label" for="suba_NOMBRE">NOMBRE DEL SUBAREA</label>

					    <input class="mdl-textfield__input" type="text" id="area_NOMBRE" name="area_NOMBRE">
				  	    <!--Ingreso -->
				  	    <label class="mdl-textfield__label" for="area_NOMBRE">NOMBRE DEL AREA</label>
				  	 </div>
				  	 </form>
				 </div>

				  <div class="mdl-card__actions mdl-card--border">
				  	<!--el boton-->
				    <input type="submit" name="bnt_registrar" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored ba-align-right" value="Registrar Datos">

				  </div>

				  <div class="mdl-card__menu">
				    
				  </div>
				</div>

		</div>
	</div>
 </div>		

</div>
<!-- inicia la visuaizacion de la pantalla donde me trae todos los datos de la Subarea-->

<div class="modal fade" id="modal_update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    	<form action="<?php echo base_url(); ?>index.php/subareas/editar" method="POST">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modificar informacion del subarea</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
		
<!-- SE REALIZA LA LLAMADA DE LOS DATOS QUE  SE VAN A INGRESAR-->

		<input type="hidden" name="txt_suba_CODIGO" id="txt_suba_CODIGO">
		<label>Nombre del  subarea </label>
        <input type="text" name="txt_suba_NOMBRE" id="txt_suba_NOMBRE" class="form-control">
        

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button  class="btn btn-success">Actualizar</button>
      </div>
      </form>

    </div>
  </div>
</div>


<script type="text/javascript" src="<?php echo base_url(); ?>tools/script/subareas.js"></script>

<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
