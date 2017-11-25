<div class="android-content mdl-layout__content">

	<!-- Wide card with share menu button -->
	
	<div class="uno-card-wide principal mdl-card mdl-shadow--2dp">
	  <div class="mdl-card__title">
	    <h2 class="mdl-card__title-text">Registro hora de ingreso y salida.</h2>
	  </div>
	  <div class="mdl-card__supporting-text">
	    <!-- formulario -->
	    <form action="#" method="GET">

	    	<div class="mdl-grid">
	    		<div class="mdl-cell mdl-cell--10-col mdl-cell--8-col-tablet">
	    			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	    			  	<input class="mdl-textfield__input" type="text" id="sample3">
	    			  	<label class="mdl-textfield__label" for="sample3">Numero de documento</label>
	    			</div>
	    		</div>	    		
	    	
	    	</div>

	    	<div class="mdl-grid">
	    		<div class="desicion">
	    			<div class="mdl-cell mdl-cell--6-col-tablet">
	    				<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
	    					<input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
	    					<span class="mdl-radio__label">Entrada</span>
	    				</label>
	    			</div>
	    			<div class="mdl-cell mdl-cell--6-col-tablet">
	    				<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
	    					<input type="radio" id="option-2" class="mdl-radio__button" name="options" value="1" checked>
	    					<span class="mdl-radio__label">Salida</span>
	    				</label>
	    			</div>

	    		</div>		
	    	</div>
	    	
	    	
	    </form>
	    <!-- fin formulario -->

	  </div>
	  <div class="mdl-card__actions mdl-card--border">
	    <input type="submit" name="btnregistro" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" value="Registrar">
	  </div>
	  
	</div>

	<script type="text/javascript" src="<?php echo base_url(); ?>tools/js/principal.js"></script>
