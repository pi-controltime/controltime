<div class="android-content mdl-layout__content">

	<form name="frm_eps" method="POST" action="<?php echo base_url(); ?>index.php/eps/validar">
		<!-- Wide card with share menu button -->

		<style>
		.demo-card-wide.mdl-card {
		  width: 100%;
		}
		.demo-card-wide > .mdl-card__title {
		  height: 60px;
		  color: white;
		  background: tomato;
		}
		.demo-card-wide > .mdl-card__menu {
		  color: #fff;
		}



		.ba-align-right{
			
		}
/*SE CREA NUEVO FORMATO PARA LA TABLA QUE SE VA A CREAR ESTILO  FORMULARIO*/
		.demo-card-wide.mdl-card1 {
		  width: 100%;
		}


	</style>

	<div class="mdl-grid">
		<div class="mdl-cell mdl-cell--8-col mdl-cell--6-col-table">
			
			<div class="demo-card-wide mdl-card1 mdl-shadow--2dp ">
		  
				  <div class="mdl-card__title">
				    <h2 class="mdl-card__title-text">REGISTRO DATOS DE LA EPS</h2>
				  </div>
				  <div class="mdl-card__actions mdl-card--border"></div>
				<div class="mdl-card__supporting-text">
			
					<table class="table table-striped table-bordered table-responsive-lg">
						<thead>
							<tr>
								<th>Id</th>
								<th>Nombre E.P.S.</th>
								<th> Acciones </th>

							</tr>
						</thead>

						<tbody>
								<?php foreach($todaseps-> result () as $eps):?>
										<tr>
											<td> <?php echo $eps->EPS_CODIGO ; ?> </td>
											<td> <?php echo $eps->EPS_DESCRIPCION ; ?> </td>
											<td hidden><?php $rutaeliminar=base_url()."index.php/eps/eliminar/".$eps->EPS_CODIGO ?></td>
											<td hidden><?php $rutaeditar=base_url()."index.php/eps/editar/".$eps->EPS_CODIGO ?></td>
											<td>
												<a href="<?php echo $rutaeditar ?>" class="btn btn-warning">
													<i class="material-icons">update</i>
												</a>
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
				    <h2 class="mdl-card__title-text">EPS</h2>
				  </div>
				  <div class="mdl-card__actions mdl-card--border"></div>
				  <div class="mdl-card__supporting-text">
				  	<!-- CONTENIDO -->
				  	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				  	    <input class="mdl-textfield__input" type="text" id="EPS_DESCRIPCION" name="EPS_DESCRIPCION">
				  	    <!--Ingreso -->
				  	    <label class="mdl-textfield__label" for="EPS_DESCRIPCION">NOMBRE DE LA EPS</label>
				  	 </div>

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
 		
</form>


<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>