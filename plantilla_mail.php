<!DOCTYPE html>
<html>
<head>
	<title>Contacto</title>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Libre+Baskerville:ital@1&family=Libre+Franklin&display=swap');
		body {
			font-family: 'Lato', sans-serif;
			position:relative;
			margin:auto;
			width: auto;
			
			display: inline-block;
		}
		body div {
			margin:1em;
			width: auto;
			padding:0em 1em 1em 1em;
			border: 1px solid black;
			display: inline-block;
		}
		h3{
			width: auto;
			display: inline-block;
			margin: 1em 0 0.5em 0;
		}
		p {
			font-weight: 300;
			font-size: 12px;
			margin: 0.4em 0;
			width: auto;
			display: inline-block;
		}
		p span{
			font-weight: 400;
			font-size: 14px;
			margin-left: 0.5em;
		}
	</style>
</head>
<body>
	<div>
	<h3>Contacto</h3><br>
	<p>Nombre:  <span>$nombre_completo</span></p> <br>
	<p>Ciudad:  <span>$ciudad</span></p> <br>
	<p>País:  <span>$pais</span></p> <br>
	<p>Teléfono:  <span>$telefono</span></p> <br>
	<p>¿De dónde nos conoce?:  <span>$about</span></p> <br>
	<p>Asunto:  <span>$asunto</span></p> <br>
	<p>Mensaje: <br> <span style="margin: 0;">$mensaje</span></p>
	</div>
</body>
</html>