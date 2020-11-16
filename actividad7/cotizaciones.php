<!doctype html>
<html lang="es">
	<head>
		<title> Index </title>
		<meta charset="utf-8" >
		<link rel="stylesheet" type="text/css" href="css/estilo.css" >
		<script type="text/javascript" src="js/script.js"></script>
	</head>
	
	<body> 		
		<nav>
			<ul>
				<li><a
                      href="index.php" title="Inicio">Agencia
                </a></li>
				<li><a 
                      href="galeria1.php" title="Galería 1">Galería 1
                </a></li>
				<li><a
                      href="galeria2.php" title="Galería 2">Galería 2
                 </a></li>
				<li class="active"><a 
                      href="cotizaciones.php" title="Cotizaciones">Cotizaciones
                </a></li>
                <li><a 
                    href="promociones.php" title="Promociones">Promociones
                </a></li>
				<li><a 
                      href="contacto.php" title="Contacto">Contacto
                </a></li>
				<li><a
                      href="iniciodesecion.php" title="Iniciar sesión">Iniciar sesión
                </a></li>
                <li><a 
                    href="acerca.php" title="Acerca de">Acerca de
              </a></li>
			</ul>
		</nav>
		
		<section> 
			<article>
				<br /><br />
				<center>
				<h3>Cotizaciones de la agencia</h3>
				<table>
					<tr>
						<td><div class="sanmiguel">
							<a id="sanmiguel" href="#imagen1" ">
							<img src="imagenes/San Miguel de Allende.jpg" id="sanmiguel" name="sanmiguel" width="200" height="122"></a></div>
						</td>
						<td><div class="dolores">
							<a id="dolores" href="#imagen2" ">
							<img src="imagenes/dolores.jpg" id="dolores" name="dolores" width="200" height="122"></a></div>
						</td>
						<td><div class="guanajuato">
							<a id="guanajuato" href="#imagen3" ">
							<img src="imagenes/guanajuato.jpg" id="guanajuato" name="guanajuato" width="200" height="122"></a></div>
						</td>
						<td><div class="comonfotr">
							<a id="comonfotr"  href="#imagen4" ">
							<img src="imagenes/comonfort.jpg" id="comonfotr" name="comonfotr" width="200" height="122"></a></div>
						</td>
						<td><div class="corralejo">
							<a id="corralejo" href="#imagen5" ">
							<img src="imagenes/hacienda corralejo.jpg" id="corralejo" name="corralejo" width="200" height="122"></a></div>
						</td>
						<td><div class="inturbide">
							<a id="inturbide" href="#imagen6" ">
							<img src="imagenes/san jose inturbide.jpg" id="inturbide" name="inturbide" width="200" height="122"></a></div>
						</td>
					</tr>
				</table>
				<div id="imagen1">
					<img src="imagenes/San Miguel de Allende.jpg" id="sanmiguel2" name="sanmiguel" title="sanmiguel" >
				</div>
				<div id="imagen2">
					<img src="imagenes/dolores.jpg" id="dolores" name="dolores2" title="dolores" >
				</div>
				<div id="imagen3">
					<img src="imagenes/guanajuato.jpg" id="guanajuato2" name="guanajuato" title="guanajuato">
				</div>
				<div id="imagen4">
					<img src="imagenes/comonfort.jpg" id="comonfort2" name="comonfort" title="comonfort">
				</div>
				<div id="imagen5">
					<img src="imagenes/hacienda corralejo.jpg" id="corralejo2" name="corralejo" title="corralejo">
				</div>
				<div id="imagen6">
					<img src="imagenes/san jose inturbide.jpg" id="inturbide2" name="inturbide" title="inturbide">
				</div>
				Destino: <select name="Lugar" id="destino">

					<option>San Miguel de Allende</option>
					
					<option>Dolores</option>
					
					<option>Guanajuato</option>

					<option>Comonfort</option>
					
					<option>Hacienda de Corralejo</option>
					
					<option>San Jose Inturbide</option>
				</select>
				<p id="datop"></p>
				<button onclick="prueba(document.getElementById('destino').value)" >Consultar precio</button>
				Precio: <p id="precio1""></p>
			<form method="GET">
				<p><label for="Inicio">Inicio:</label>
				<input type="date" id="i" name="Inicio"/></p>
				<p><label for="Final">Final:</label>
				<input type="date" id="f" name="Final"/></p>
				<p><label for="Personas">Personas:</label>
				<input type="text" id="p" name="Personas"/></p>
				<p><button id="envio" onclick="rdatos(document.getElementById('i').Value, document.getElementById('f').Value,
					document.getElementById('p').Value)">Enviar Formulario</button></p>
			</form>
		</center>
		</article>
		</section>
		
		<footer>
			<h1> DERECHOS RESERVADOS 2020 </h1>
		</footer>		
		<script src="js/script.js"></script>
	</body>
</html>