<div class="android-content mdl-layout__content">

	<form name="frm_eps" method="POST" action="<?php echo base_url(); ?>index.php/eps/validar">
		<!-- Wide card with share menu button -->

		<style>
		.demo-card-wide.mdl-card {
		  width: 670px;
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
			margin-left: 75%;
		}

/*SE CREA NUEVO FORMATO PARA LA TABLA QUE SE VA A CREAR ESTILO  FORMULARIO*/
		.demo-card-wide.mdl-card1 {
		  width: 1200px;
		}

		</style>

		<div class="demo-card-wide mdl-card mdl-shadow--2dp ba-center">
		  
		  <div class="mdl-card__title">
		    <h2 class="mdl-card__title-text">EPS</h2>
		  </div>
		  <div class="mdl-card__actions mdl-card--border"></div>
		  <div class="mdl-card__supporting-text">
		  	<!-- CONTENIDO -->
		  	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		  	    <input class="mdl-textfield__input" type="text" id="EPS_NOMBRE" name="EPS_NOMBRE">
		  	    <!--Ingreso -->
		  	    <label class="mdl-textfield__label" for="EPS_NOMBRE">NOMBRE DE LA EPS</label>
		  	 </div>

		 </div>

		  <div class="mdl-card__actions mdl-card--border">
		  	<!--el boton-->
		    <input type="submit" name="bnt_registrar" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored ba-align-right" value="Registrar Datos">

		  </div>

		  <div class="mdl-card__menu">
		    
		  </div>
		</div>

</form>

<div class="demo-card-wide mdl-card1 mdl-shadow--2dp ba-center">
		  
		  <div class="mdl-card__title">
		    <h2 class="mdl-card__title-text">REGISTRO DATOS DE LAS EPS</h2>
		  </div>
		  <div class="mdl-card__actions mdl-card--border"></div>
		  <div class="mdl-card__supporting-text">
		  	<!-- CONTENIDO -->
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		  	    <input class="mdl-textfield__input" type="text" id="EPS_CODIGO" name="EPS_CODIGO">
		  	    <!--Ingreso -->
		  	    <label class="mdl-textfield__label" for="EPS_CODIGO">ID</label>
		  	 </div>
		  	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		  	    <input class="mdl-textfield__input" type="text" id="EPS_NOMBRE" name="EPS_NOMBRE">
		  	    <!--Ingreso -->
		  	    <label class="mdl-textfield__label" for="EPS_NOMBRE">NOMBRE DE LA EPS</label>
		  	 </div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		  	    <input class="mdl-textfield__input" type="text" id="EPS_FECHAREGISTRO" name="EPS_FECHAREGISTRO">
		  	    <!--Ingreso -->
		  	    <label class="mdl-textfield__label" for="EPS_FECHAREGISTRO">FECHA REGISTRO</label>
		  	 </div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		  	    <input class="mdl-textfield__input" type="text" id="EPS_REGISTRADOPOR" name="EPS_REGISTRADOPOR">
		  	    <!--Ingreso -->
		  	    <label class="mdl-textfield__label" for="EPS_REGISTRADOPOR">REGISTRO POR</label>
		  	 </div>





		  	 </div>



		 </div>

