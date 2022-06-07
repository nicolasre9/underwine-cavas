<?php include('head.php'); ?>

<body class="">
	<div class="container-fluid col-xl-12 p-0"> <!--- container-fluid --> 

		<!-- Header Contacto -->
		<header class="row header-visible header-fixed fixed-top col-xl-12 mx-auto">

			<div class="col-2 col-xl-2 align-self-center pl-4 logo-header">
				<a href="https://underwinecavaspremium.com/">
					<!--
				<p>UNDER<span>WINE</span></p>
				<p>CAVAS PREMIUM</p>
			-->
				<img src="img/logo.png" class="" style="width: 190px; height: auto;object-fit:cover;object-position:50% 50%;">
				</a>
			</div>
			<div id="nav-btn" class="align-self-center offset-8 offset-sm-9 offset-md-8 offset-xl-9 pl-4 pl-lg-3 pr-2 btn-menu-nav btn-menu-nav-contacto">
				<p>&nbsp;&nbsp;&nbsp;&nbsp;</p>
			</div>
		</header>
		

		<?php include('side_nav.php'); ?>

		<!-- Main Contacto -> Formulario -->
		<main class="row contacto col-xl-12 mx-auto">
			<div class="col-xl-12">

				<div class="col-xl-12 mx-auto intro-contacto text-center">

					<p class="col-11 mx-auto col-xl-12 text-center texto-contacto-1">Estás a un paso de conocer la experiencia Underwine</p>
					<p class="texto-contacto-2">Envianos tus datos completando el formulario y recibirás el brochure por mail. <span></span></p>
					
				</div>

				<form class="col-12 col-md-8 col-xl-6 mx-auto text-body texto-contacto-3">
					<input type="text" id="nombre" name="nombre" placeholder="NOMBRE COMPLETO*" >
					<p class="input-requerido" id="nombreReq">Campo requerido</p>
					<input type="text" id="ciudad" name="ciudad" placeholder="CIUDAD*" >
					<p class="input-requerido" id="ciudadReq">Campo requerido</p>
					<input type="text" id="pais" name="pais" placeholder="PAIS*" >
					<p class="input-requerido" id="paisReq">Campo requerido</p>
					<input type="text" id="telefono" name="telefono" placeholder="TELÉFONO*" >
					<p class="input-requerido" id="telefonoReq">Campo requerido</p>
					<input type="text" id="mail" name="mail" placeholder="MAIL*" >
					<p class="input-requerido" id="mailReq">Ingrese un mail válido</p>
					<input type="text" id="about" name="about" placeholder="DE DÓNDE NOS CONOCE">
					<input type="text" id="asunto" name="asunto" placeholder="ASUNTO">
					<textarea class="" type="text" id="mensaje" name="mensaje" placeholder="ESCRIBIR MENSAJE*" cols="40" rows="5" ></textarea>
					<p class="input-requerido" id="mensajeReq">Campo requerido</p>
					<label><input type="checkbox" id="terminos" name="terminos" > He leído y acepto los <a href="#">Términos y Condiciones</a></label>	
					<p class="input-requerido" id="terminosReq">Debe aceptar los términos y condiciones</p>
					<input id="btn-contacto" class="boton-secundario mx-auto" type="submit" name="enviar" value="ENVIAR">
				</form>

				<div class="info-contacto texto-contacto-3 mt-xl-5">
					<p>info@underwinecavaspremium.com</p>
					<p>WhatsApp +54 9 112459 7809</p>
					<p>Buenos Aires - ARGENTINA</p>
				</div>
			</div>
		</main>

		
		<div class="btn-contact-float">
			<a href="https://wa.me/5491124597809" target="_blank">
			 <p>
			 	<i class="fa fa-whatsapp" style=""></i>
			 	<span>ESCRIBINOS</span>
			 </p>
			</a>
		</div>
		

		<!-- Footer Contacto -->
		<footer class="row contacto col-md-12 mx-auto pl-0 pl-md-5 mt-0 pt-4 pt-md-6">
			<div class="col-md-12 mt-0 mt-md-2">
				<!--<div class="row col-md-9">-->
					<div class="col-md-2">
						<p class="title-footer mt-4 mb-1 pt-1 pb-1 mt-md-5 mb-md-4 pt-md-0">EXPLORAR</p>
						<ul>
							<li><a href="#" class="text-nowrap">Sobre UW</a></li>
							<li><a href="#">Contacto</a></li>
						</ul>
					</div>

					<div class="offset-md-1 offset-xl-0 col-md-2">
						<p class="title-footer mt-4 mb-1 pt-1 pb-1 mt-md-5 mb-md-4 pt-md-0">CAVAS</p>
						<ul>
							<li><a href="#">Concrete</a></li>
							<li><a href="#" class="text-nowrap">Pure White</a></li>
						</ul>
					</div>
				<!--</div>-->

				<!--<div class="row col-md-3 align-top">-->
					<div class="col-md-2 offset-md-4 offset-xl-5 ico-social-footer align-top ">
						<p class="title-footer mt-4 mb-1 pt-1 pb-1 mt-md-5 mb-md-4 pt-md-0">FOLLOW US</p>
						<a href="https://www.instagram.com/underwine_cavaspremium/" target="_blank"><i class="fa fa-instagram mt-2 mt-md-4 pt-md-1 pr-4"></i></a>
						<a href="https://www.facebook.com/underwine.cavaspremium/" target="_blank"><i class="fa fa-facebook-f mt-2 mt-md-4 pt-md-1"></i></a>
					</div>
				<!--</div>-->
				<p class="politicas pt-3 text-center text-md-left ml-md-2 pl-md-1">2020 Underwine Cavas Premium. <a href="#">Políticas de privacidad.</a></p>
			</div>			
			
		</footer>

	</div>
	

	
</body>

</html>