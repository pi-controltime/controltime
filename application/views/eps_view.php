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

</form>
<div class="demo-card-wide mdl-card1 mdl-shadow--2dp ba-center">
		  
		  <div class="mdl-card__title">
		    <h2 class="mdl-card__title-text">REGISTRO DATOS DE LA EPS</h2>
		  </div>
		  <div class="mdl-card__actions mdl-card--border"></div>
		  <div class="mdl-card__supporting-text">
	
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>NOMBRE EPS</th>
				<th>FECHA DE REGISTRO</th>
				<th>REGISTRADO POR</th>
				<th>  </th>
				<th> PROCESO A REALIZAR </th>

			</tr>
		</thead>

		<tbody>
				<?php foreach($todaseps-> result () as $eps):?>
						<tr>
							<td> <?php echo $eps->EPS_CODIGO ; ?> </td>
							<td> <?php echo $eps->EPS_DESCRIPCION ; ?> </td>
							<td> <?php echo $eps->EPS_FECHAREGISTRO ; ?> </td>
							<td> <?php echo $eps->EPS_REGISTRADOPOR ; ?> </td>
							<td>	
								<?php echo "<td> <a href=".base_url()." eps/editar/".$eps->EPS_CODIGO."> EDITAR </a>  | ";
								 echo "<a href=".base_url(). " eps/eliminar/".$eps->EPS_CODIGO."> ELIMINAR </a> </td>;" ?>
		  						<!--<button class="button button2">Editar </button><br><br>
								<button class="button button2">Eliminar</button>-->
							</td>
							
						</tr>
				<?php endforeach; ?>
			
		</tbody>

	</table>
		 
</div>


		 </div>