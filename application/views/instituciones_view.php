<div class="android-content mdl-layout__content">

<div class="mdl-grid">
	<!--********* TABLA DE DATOS ********* -->
	<div class="mdl-cell mdl-cell--8-col mdl-cell--6-col-tablet ">
		
		<div class="demo-card-square mdl-card mdl-shadow--2dp max-width-persona">
		  <div class="mdl-card__title mdl-card--expand mdl-card--border">
		    <h2 class="mdl-card__title-text">Instituciones registradas</h2>
		  </div>
		  <div class="mdl-card__supporting-text">
		    <table class="mdl-data-table mdl-js-data-table">
		    	<tr>
		    		<th>Codigo</th>
		    		<th>Nombre</th>
		    		<th>Telefono</th>
		    		<th>Jefe Voluntariado</th>
		    		<th>Correo</th>
		    	</tr>
		    	<tr>
		    		<td>1001</td>
		    		<td>San Mateo</td>
		    		<td>755555</td>
		    		<td>leonor</td>
		    		<td>leonor@sanmateo.edu.co</td>		    		
		    	</tr>
		    </table>
		  </div>
		  <div class="mdl-card__actions mdl-card--border">
		    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
		      View Updates
		    </a>
		  </div>
		</div>
	</div>
	<!--********* FIN TABLA DE DATOS ********* -->
	<!--********* FORMULARIO INSTITUCIONES ********* -->
	<div class="mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet max-whidth-persona">
		
		<div class="tarjeta-sarea mdl-card mdl-shadow--2dp max-width-persona" >
		  <div class="mdl-card__title  mdl-card--border ">
		    <h2 class="mdl-card__title-text">Nueva institución </h2>

		  </div>

		  <div class="mdl-card__supporting-text">
			<div class="mdl-grid">
				
				<div class="mdl-textfield mdl-js-textfield">
					<input class="mdl-textfield__input" type="text" id="txt_codigo">
					<label class="mdl-textfield__label" for="txt_codigo">Codigo</label>
				</div>
				
			</div>
			<div class="mdl-grid">
				<div class="mdl-textfield mdl-js-textfield">
					<input class="mdl-textfield__input" type="text" id="txt_nombre">
					<label class="mdl-textfield__label" for="txt_nombre">Nombre</label>
					
				</div>
			</div>
			<div class="mdl-grid">
				<div class="mdl-textfield mdl-js-textfield">
					<input class="mdl-textfield__input" type="text" id="txt_tel">
					<label class="mdl-textfield__label" for="txt_tel">Telefono</label>
				</div>
			</div>
			<div class="mdl-grid">
				<div class="mdl-textfield mdl-js-textfield">
					<input class="mdl-textfield__input" type="text" id="txt_jefe">
					<label class="mdl-textfield__label" for="txt_jefe">Jefe voluntariado</label>
				</div>
			</div>
			<div class="mdl-grid">
				<div class="mdl-textfield mdl-js-textfield">
					<input class="mdl-textfield__input" type="text" id="txt_correo">
					<label class="mdl-textfield__label" for="txt_correo">Correo</label>
				</div>
			</div>		 
		  </div>
		  <div class="mdl-card__actions mdl-card--border">
		  	<button class="mdl-button mdl-js-button mdl-button--primary">
		  	  Registrar
		  	</button>
		  </div>



		</div>

	</div>
	<!--********* FIN FORMULARIO INSTITUCIONES ********* -->
</div>