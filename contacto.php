<!doctype html>
<html lang="es">
	<head>
		<title> Index </title>
		<meta charset="utf-8" >
		<link rel="stylesheet" type="text/css" href="css/estilo.css" >
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
				<li><a 
                      href="cotizaciones.php" title="Cotizaciones">Cotizaciones
                </a></li>
                <li><a
                    href="promociones.php" title="Promociones">Promociones
               </a></li>
				<li class="active"><a
                       href="contacto.php" title="Contacto">Contacto
                </a></li>
				<li><a 
                      href="iniciodesecion.php" title="Iniciar sesión">Iniciar sesión</a></li>
                <li><a
                        href="acerca.php" title="Acerca de">Acerca de
                </a></li>
			</ul>
		</nav>
		
		<section> 
			<article class="interno"> 
			<br /><br />
				<center>
				<h3>Formulario de contacto</h3>
				<div class="box">
					<form action="insertar.php" method="post">
						<label>Nombre</lable>
							<input type="text" id="nombre" name="nombre" placeholder="nombre"/>
						<label>Email</lable>
							<input type="text" id="email" name="email" placeholder="email"/>
						<label>Mensaje</lable>
						<textarea placeholder="escribe tu mensaje" id="mensaje" name="mensaje"></textarea>
						<input type="submit" value="Enviar"/>
</form>
</div>
			</article>
		</section>
		
		<footer>
			<h1> DERECHOS RESERVADOS 2020 </h1>
		</footer>		
		<script src="js/script.js"></script>
	</body>
</html>