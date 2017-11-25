
<div class="android-content mdl-layout__content">

	<div class="mdl-grid">
		<div class="mdl-cell mdl-cell--8-col mdl-cell--6-col-table">
			
			<div class="demo-card-wide mdl-card1 mdl-shadow--2dp ">
		  
				  <div class="mdl-card__title">
				    <h2 class="mdl-card__title-text">REGISTRO DATOS DEL AREA</h2>
				  </div>
				  <div class="mdl-card__actions mdl-card--border"></div>
				<div class="mdl-card__supporting-text">
			
					<table class="table table-striped table-bordered table-responsive-lg">
						<thead>
							<tr>
								<th>Id</th>
								<th>Nombre del Area</th>
								<th> Acciones </th>

							</tr>
						</thead>

						<tbody>
								<?php foreach($todasarea-> result () as $areas):?>
										<tr>
											<td> <?php echo $areas->area_CODIGO ; ?> </td>
											<td> <?php echo $areas->area_NOMBRE ; ?> </td>
											<td hidden><?php $rutaeliminar=base_url()."index.php/areas/eliminar/".$areas->area_CODIGO ?></td>
											<td hidden><?php $data = "'".$areas->area_CODIGO."'".","."'".$areas->area_NOMBRE."'"?></td>
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
				    <h2 class="mdl-card__title-text">areas</h2>
				  </div>
				  <div class="mdl-card__actions mdl-card--border"></div>
				  <div class="mdl-card__supporting-text">
				  	<form name="frm_areas" method="POST" action="<?php echo base_url(); ?>index.php/areas/validar">
				  	<!-- CONTENIDO -->
				  	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
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
<!-- inicia la visuaizacion de la pantalla donde me trae todos los datos de la area-->

<div class="modal fade" id="modal_update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    	<form action="<?php echo base_url(); ?>index.php/areas/editar" method="POST">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modificar informacion del area</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
		
<!-- SE REALIZA LA LLAMADA DE LOS DATOS QUE  SE VAN A INGRESAR-->

		<input type="hidden" name="txt_area_CODIGO" id="txt_area_CODIGO">
		<label>Nombre del  area </label>
        <input type="text" name="txt_area_NOMBRE" id="txt_area_NOMBRE" class="form-control">
        

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button  class="btn btn-success">Actualizar</button>
      </div>
      </form>

    </div>
  </div>
</div>


<script type="text/javascript" src="<?php echo base_url(); ?>tools/script/areas.js"></script>

<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

