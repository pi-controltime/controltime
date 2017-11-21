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
		    	<tr>
		    		<td>1001</td>
		    		<td>San Mateo</td>
		    		<td>755555</td>
		    		<td>leonor</td>
		    		<td>leonor@sanmateo.edu.co</td>
		    		<td>
		    			<button class="btn btn-warning btn-sm">
		    				<i class="material-icons">update</i>
		    			</button>
		    			<button class="btn btn-danger btn-sm">
		    				<i class="material-icons">delete_forever</i>
		    			</button>
		    		</td>		    		
		    	</tr>
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

<script type="text/javascript" src="<?php echo base_url(); ?>tools/js/instituciones.js"></script>