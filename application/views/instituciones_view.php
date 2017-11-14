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
/*creacion de caracteres y especificaciones para datos de la tabla*/
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: center;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: tomato;
    color: white;

/*decripcion o especificacion de los colores de los botones*/
button {
    background-color: #tomato; /*  */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}

button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
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

	<table>
			<tr>
				<th>ID</th>
				<th>NOMBRE INSTITUCION</th>
				<th>NOMBRE DEL COORDINADOR DE LA INSTITUCION</th>
				<th>CELULAR DEL COORDINADOR DE LA INSTITUCION</th>
				<th>CORREO ELECTRONICO DEL COORDINADOR DE LA INSTITUCIÓN</th>
				<th> PROCESO A REALIZAR </th>

			</tr>
		
		<tr>
				<td>ID</td>
				<td>NOMBRE DE LA INSTITUCION</td>
				<td>NOMBRE DEL COORDINADOR DEL VOLUNTARIADO</td>
				<td>CELULAR DEL COORDINADOR DE LA INSTITUCION</td>
				<td>CORREO ELECTRONICO DEL COORDINADOR DE LA INSTITUCIÓN</td>
				<td>
					<button class="button button2">Modificar </button><br><br>
					<button class="button button2">Elimminar</button>
				</td>
				
		</tr>
		
		<tr>
				<td>ID</td>
				<td>NOMBRE DE LA INSTITUCION</td>
				<td>NOMBRE DEL COORDINADOR DEL VOLUNTARIADO</td>
				<td>CELULAR DEL COORDINADOR DE LA INSTITUCION</td>
				<td>CORREO ELECTRONICO DEL COORDINADOR DE LA INSTITUCIÓN</td>
				<td>
					<button class="button button2">Modificar </button><br><br>
					<button class="button button2">Elimminar</button>
				</td>
				
		</tr>
		
		<tr>
				<td>ID</td>
				<td>NOMBRE DE LA INSTITUCION</td>
				<td>NOMBRE DEL COORDINADOR DEL VOLUNTARIADO</td>
				<td>CELULAR DEL COORDINADOR DE LA INSTITUCION</td>
				<td>CORREO ELECTRONICO DEL COORDINADOR DE LA INSTITUCIÓN</td>
				<td>
					<button class="button button2">Modificar </button><br><br>
					<button class="button button2">Elimminar</button>
				</td>
				
		</tr>


	</table>
		 
		</div>

		</div>
