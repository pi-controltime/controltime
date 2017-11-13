<div class="android-content mdl-layout__content">

	<form name="frm_instituciones" method="POST" action="<?php echo base_url(); ?>index.php/instituciones/validar">
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
		    <h2 class="mdl-card__title-text">INSTITUCIONES</h2>
		  </div>
		  <div class="mdl-card__actions mdl-card--border"></div>
		  <div class="mdl-card__supporting-text">
		  	<!-- CONTENIDO -->
		  	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		  	    <input class="mdl-textfield__input" type="text" id="INSTI_NOMBREINSTITUCION" name="INSTI_NOMBREINSTITUCION">
		  	    <!--Ingreso -->
		  	    <label class="mdl-textfield__label" for="INSTI_NOMBREINSTITUCION">NOMBRE DE LA INSTITUCION</label>
		  	 </div>
		  	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		  	    <input class="mdl-textfield__input" type="text" id="INSTI_JEFEVOLUNTARIADO" name="INSTI_JEFEVOLUNTARIADO">
		  	    <!--Ingreso -->
		  	    <label class="mdl-textfield__label" for="INSTI_JEFEVOLUNTARIADO">NOMBRE DEL COORDINADOR DEL VOLUNTARIADO</label>
		  	 </div>
		  	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		  	    <input class="mdl-textfield__input" type="text" id="INSTI_TELEFONO" name="INSTI_TELEFONO">
		  	    <!--Ingreso -->
		  	    <label class="mdl-textfield__label" for="INSTI_TELEFONO">TELEFONO DEL COORDINADOR DE LA INSTITUCION</label>
		  	 </div>
		  	 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		  	    <input class="mdl-textfield__input" type="text" id="INSTI_CELULAR" name="INSTI_CELULAR">
		  	    <!--Ingreso -->
		  	    <label class="mdl-textfield__label" for="INSTI_CELULAR">CELULAR DEL COORDINADOR DE LA INSTITUCION</label>
		  	 </div>
		  	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		  	    <input class="mdl-textfield__input" type="text" id="INSTI_CORREOELECTRONICO" name="INSTI_CORREOELECTRONICO">
		  	    <!--Ingreso -->
		  	    <label class="mdl-textfield__label" for="INSTI_CORREOELECTRONICO">CORREO ELECTRONICO DEL COORDINADOR DE LA INSTITUCIÓN</label>
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
		    <h2 class="mdl-card__title-text">REGISTRO DATOS DE LAS INSTITUCIONES</h2>
		  </div>
		  <div class="mdl-card__actions mdl-card--border"></div>
		  <div class="mdl-card__supporting-text">
		  	<!-- CONTENIDO -->
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		  	    <input class="mdl-textfield__input" type="text" id="INSTI_CODIGO" name="INSTI_CODIGO">
		  	    <!--Ingreso -->
		  	    <label class="mdl-textfield__label" for="INSTI_CODIGO">ID</label>
		  	 </div>
		  	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		  	    <input class="mdl-textfield__input" type="text" id="INSTI_NOMBREINSTITUCION" name="INSTI_NOMBREINSTITUCION">
		  	    <!--Ingreso -->
		  	    <label class="mdl-textfield__label" for="INSTI_NOMBREINSTITUCION">NOMBRE DE LA INSTITUCION</label>
		  	 </div>
		  	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		  	    <input class="mdl-textfield__input" type="text" id="INSTI_JEFEVOLUNTARIADO" name="INSTI_JEFEVOLUNTARIADO">
		  	    <!--Ingreso -->
		  	    <label class="mdl-textfield__label" for="INSTI_JEFEVOLUNTARIADO">NOMBRE DEL COORDINADOR DEL VOLUNTARIADO</label>
		  	 </div>
		  	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		  	    <input class="mdl-textfield__input" type="text" id="INSTI_TELEFONO" name="INSTI_TELEFONO">
		  	    <!--Ingreso -->
		  	    <label class="mdl-textfield__label" for="INSTI_TELEFONO">TELEFONO DEL COORDINADOR DE LA INSTITUCION</label>
		  	 </div>
		  	 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		  	    <input class="mdl-textfield__input" type="text" id="INSTI_CELULAR" name="INSTI_CELULAR">
		  	    <!--Ingreso -->
		  	    <label class="mdl-textfield__label" for="INSTI_CELULAR">CELULAR DEL COORDINADOR DE LA INSTITUCION</label>
		  	 </div>
		  	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		  	    <input class="mdl-textfield__input" type="text" id="INSTI_CORREOELECTRONICO" name="INSTI_CORREOELECTRONICO">
		  	    <!--Ingreso -->
		  	    <label class="mdl-textfield__label" for="INSTI_CORREOELECTRONICO">CORREO ELECTRONICO DEL COORDINADOR DE LA INSTITUCIÓN</label>
		  	 </div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		  	    <input class="mdl-textfield__input" type="text" id="INSTI_FECHAREGISTRO" name="INSTI_FECHAREGISTRO">
		  	    <!--Ingreso -->
		  	    <label class="mdl-textfield__label" for="INSTI_FECHAREGISTRO">FECHA REGISTRO</label>
		  	 </div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		  	    <input class="mdl-textfield__input" type="text" id="INSTI_REGISTRADOPOR" name="INSTI_REGISTRADOPOR">
		  	    <!--Ingreso -->
		  	    <label class="mdl-textfield__label" for="INSTI_REGISTRADOPOR">REGISTRO POR</label>
		  	 </div>





		  	 </div>


		 
		 </div>
