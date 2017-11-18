<div class="android-content mdl-layout__content">

<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
  <div class="mdl-tabs__tab-bar">
      <a href="#datospersonales" class="mdl-tabs__tab is-active">Datos Personales</a>
      <a href="#academia" class="mdl-tabs__tab">Informacion Academica</a>
      <a href="#ingreso" class="mdl-tabs__tab">Datos de ingreso</a>
  </div>

  <div class="mdl-tabs__panel is-active" id="datospersonales">
  	
<!-- ****************FIN TARJETA DATOS PERSONALES****************-->
  	<div class="demo-card-square mdl-card mdl-shadow--2dp">
  	  <div class="mdl-card__title mdl-card--expand mdl-card--border titlered">
  	    <h2 class="mdl-card__title-text">Datos Personales</h2>
  	  </div>
  	  <div class="mdl-card__supporting-text">
  	  	
  	  	<div class="mdl-grid">
  	  		<div class="mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet">
  	  			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
  	  			    <input class="mdl-textfield__input" type="number" id="txt_doc">
  	  			    <label class="mdl-textfield__label" for="txt_doc">Numero documento *</label>
  	  			</div>
  	  		</div>
  	  		<div class="mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet">
  	  			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
  	  			    <input class="mdl-textfield__input" type="text" id="txt_nombres">
  	  			    <label class="mdl-textfield__label" for="txt_nombres">Nombres *</label>
  	  			</div>
  	  		</div>
  	  		<div class="mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet">
  	  			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
  	  			    <input class="mdl-textfield__input" type="text" id="txt_apellidos">
  	  			    <label class="mdl-textfield__label" for="txt_apellidos">Apellidos *</label>
  	  			</div>
  	  		</div>
  	  		
  	  	</div>
  	  	<div class="mdl-grid">
  	  		<div class="mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet">
  	  			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
  	  			    <input class="mdl-textfield__input" type="text" id="txt_apellidos" pattern="[0-9]*">
  	  			    <label class="mdl-textfield__label" for="txt_apellidos">Telefono fijo</label>
  	  			    <span class="mdl-textfield__error">Este es un campo numerico</span>
  	  			</div>
  	  		</div>
  	  		<div class="mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet">
  	  			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
  	  			    <input class="mdl-textfield__input" type="text" id="txt_apellidos" pattern="[0-9]*">
  	  			    <label class="mdl-textfield__label" for="txt_apellidos">Telefono Celular</label>
  	  			    <span class="mdl-textfield__error">Este es un campo numerico</span>
  	  			</div>
  	  		</div>
  	  		<div class="mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet">
  	  			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
  	  			    <input class="mdl-textfield__input" type="text" id="txt_apellidos">
  	  			    <label class="mdl-textfield__label" for="txt_apellidos">Modalidad</label>
  	  			</div>
  	  		</div>
  	  	</div>
  	  	<div class="mdl-grid">
  	  		<div class="mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet">
  	  			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
  	  			    <input class="mdl-textfield__input" type="text" id="txt_apellidos">
  	  			    <label class="mdl-textfield__label" for="txt_apellidos">Correo electronico *</label>
  	  			</div>
  	  		</div>

          <div class="mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet">
            <p>¿ Esta persona tiene acceso al sistema ?</p>
          </div> 
          <div class="mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet">
            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switchpass" id="chkpass">
              <input type="checkbox" id="switchpass" class="mdl-switch__input" onclick="validacceso();">
              <span class="mdl-switch__label"></span>
            </label>
          </div>

  	  	</div>
	  	    
  	  </div>
  	  
  	  <!--<div class="mdl-card__actions mdl-card--border">
  	    <a a href="#academia" class="mdl-tabs__tab mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
  	      Siguiente
  	    </a>
  	  </div>-->
  	</div>
<!-- ****************FIN TARJETA DATOS PERSONALES****************-->

<!-- ****************TARJETA CONTRASENA****************-->

  	<div class="demo-card-square mdl-card mdl-shadow--2dp" id="tarjetapass">
  	  <div class="mdl-card__title mdl-card--expand mdl-card--border titlered">
  	    <h2 class="mdl-card__title-text">Establesca una contraseña </h2>
  	  	<!--<div class="mdl-card__subtitle-text"> Diligencie esta opcion unicamente si la persona registrada va a tener acceso al sistema</div>-->
  	  </div>

  	  <div class="mdl-card__supporting-text">
  	  	
        <div class="mdl-grid">

          <div class="mdl-cell mdl-cell--6-col mdl-cell--6-col-tablet">
  	  			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
  	  			    <input class="mdl-textfield__input" type="text" id="txt_pass" onkeyup="validapass();">
  	  			    <label class="mdl-textfield__label" for="txt_pass">Contraseña</label>
  	  			</div>
  	  		</div>
          <div class="mdl-cell mdl-cell--6-col mdl-cell--6-col-tablet">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="txt_pass2" onkeyup="validapass();">
                <label class="mdl-textfield__label" for="txt_pass2">Confirme su contraseña</label>
            </div>
          </div>


  	  	</div>  		    
  	  </div>

  	  <!--<div class="mdl-card__actions mdl-card--border">
  	    <a a href="#academia" class="mdl-tabs__tab mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
  	      Siguiente
  	    </a>
  	  </div>-->
  	</div>

<!-- ****************FIN TARJETA CONTRASENA****************-->
  </div>

  <div class="mdl-grid" id="academia">
    <!-- ****************TARJETA ACADEMIA****************-->

        <div class="tarjeta-institucion mdl-card mdl-shadow--2dp" id="tarjetapass">
          <div class="mdl-card__title mdl-card--expand mdl-card--border titlered">
            <h2 class="mdl-card__title-text">Información Academica </h2>
            <!--<div class="mdl-card__subtitle-text"> Diligencie esta opcion unicamente si la persona registrada va a tener acceso al sistema</div>-->
          </div>

          <div class="mdl-card__supporting-text">
            
            <div class="mdl-grid">

              <select class="form-control" id="select-institucion">
                <option disabled selected>Seleccione una institucion</option>
              </select>

            </div>          
          </div>

          <!--<div class="mdl-card__actions mdl-card--border">
            <a a href="#academia" class="mdl-tabs__tab mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
              Siguiente
            </a>
          </div>-->
        </div>

        <div class="tarjeta-eps mdl-card mdl-shadow--2dp" id="tarjetapass">
          <div class="mdl-card__title mdl-card--expand mdl-card--border titlered">
            <h2 class="mdl-card__title-text">Información Eps </h2>
            <!--<div class="mdl-card__subtitle-text"> Diligencie esta opcion unicamente si la persona registrada va a tener acceso al sistema</div>-->
          </div>

          <div class="mdl-card__supporting-text">
            
            <div class="mdl-grid">

              <select class="form-control" id="select-institucion">
                <option disabled selected>Seleccione una eps</option>
              </select>


            </div>          
          </div>

          <!--<div class="mdl-card__actions mdl-card--border">
            <a a href="#academia" class="mdl-tabs__tab mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
              Siguiente
            </a>
          </div>-->
        </div>

    <!-- ****************FIN TARJETA CONTRASENA****************-->
  </div>


  <div class="mdl-tabs__panel" id="ingreso">
    <ul>
      <li>Viserys</li>
      <li>Daenerys</li>
    </ul>
  </div>
</div>

<script type="text/javascript" src="<?php echo base_url(); ?>tools/js/personas.js"></script>
