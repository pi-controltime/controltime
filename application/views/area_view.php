<div class="android-content mdl-layout__content">

	<form name="frm_area" method="POST" action="<?php echo base_url(); ?>index.php/area/validar">
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
		    <h2 class="mdl-card__title-text">AREA</h2>
		  </div>
		  <div class="mdl-card__actions mdl-card--border"></div>
		  <div class="mdl-card__supporting-text">
		  	<!-- CONTENIDO -->
		  	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		  	    <input class="mdl-textfield__input" type="text" id="AREA_NOMBRE" name="AREA_NOMBRE">
		  	    <!--Ingreso -->
		  	    <label class="mdl-textfield__label" for="AREA_NOMBRE">NOMBRE DEL AREA</label>
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
		    <h2 class="mdl-card__title-text">REGISTRO DATOS DE AREAS</h2>
		  </div>
		  <div class="mdl-card__actions mdl-card--border"></div>
		  <div class="mdl-card__supporting-text">
		  	<!-- CONTENIDO -->
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		  	    <input class="mdl-textfield__input" type="text" id="AREA_CODIGO" name="AREA_CODIGO">
		  	    <!--Ingreso -->
		  	    <label class="mdl-textfield__label" for="AREA_CODIGO">ID</label>
		  	 </div>
		  	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		  	    <input class="mdl-textfield__input" type="text" id="AREA_NOMBRE" name="AREA_NOMBRE">
		  	    <!--Ingreso -->
		  	    <label class="mdl-textfield__label" for="AREA_NOMBRE">NOMBRE DEL AREA</label>
		  	 </div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		  	    <input class="mdl-textfield__input" type="text" id="AREA_FECHAREGISTRO" name="AREA_FECHAREGISTRO">
		  	    <!--Ingreso -->
		  	    <label class="mdl-textfield__label" for="AREA_FECHAREGISTRO">FECHA REGISTRO</label>
		  	 </div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		  	    <input class="mdl-textfield__input" type="text" id="AREA_REGISTRADOPOR" name="AREA_REGISTRADOPOR">
		  	    <!--Ingreso -->
		  	    <label class="mdl-textfield__label" for="AREA_REGISTRADOPOR">REGISTRO POR</label>
		  	 </div>





		  	 </div>



		 </div>

