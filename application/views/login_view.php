<div class="android-content mdl-layout__content">

	<form name="frm_login" method="POST" action="<?php echo base_url(); ?>index.php/login/validar">
		<!-- Wide card with share menu button -->
		<style>
		.demo-card-wide.mdl-card {
		  width: 512px;
		}
		.demo-card-wide > .mdl-card__title {

		  height: 60px;
		  color: white;
		  background: red;
		  
		}
		.demo-card-wide > .mdl-card__menu {
		  color: #fff;
		}
		.ba-center{
			width: 200px;
			margin-top: 50px;
			margin-bottom: 50px;
			margin-left: auto;
			margin-right: auto;
		}
		.mdl-card__supporting-text{
			text-align: center;
		}
		.ba-align-right{
			margin-left: 70%;
		}
		</style>

		<div class="demo-card-wide mdl-card mdl-shadow--2dp ba-center">
		  <div class="mdl-card__title">
		    <h2 class="mdl-card__title-text">Formulario de ingreso</h2>
		  </div>
		  <div class="mdl-card__actions mdl-card--border"></div>
		  <div class="mdl-card__supporting-text">
		  	<!-- CONTENIDO DEL FORMULARIO -->
		  	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		  	    <input class="mdl-textfield__input" type="text" id="usuario" name="usuario">
		  	    <label class="mdl-textfield__label" for="usuario">Correo electronico</label>
		  	 </div>
		  	 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		  	     <input class="mdl-textfield__input" type="text" id="password" name="password">
		  	     <label class="mdl-textfield__label" for="password">Contraseña</label>
		  	  </div>
		  </div>
		  <div class="mdl-card__actions mdl-card--border">
		    <input type="submit" name="bnt_ingresar" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored ba-align-right" value="Iniciar Sesion">

		  </div>
		  <div class="mdl-card__menu">
		    
		  </div>
		</div>


	</form>
