$(document).ready(inicio);

function inicio(){

	preloadImage('./img/fondo.png');
	preloadImage('./img/fondo_gris.png');
	preloadImage('./img/poster_video.png');
	

	//ScrollReveal().reveal('.slogan');
	ScrollReveal().reveal('.slogan1', { duration: 2500, delay: 250 });
	ScrollReveal().reveal('.slogan2', { duration: 2500, delay: 1500 });
	//ScrollReveal().reveal('.slogan3', { delay: 2000 });
	$(".slogan3").delay(2500).slideToggle(1500);


	ScrollReveal().reveal('.texto-contacto-1', { duration: 1000, delay: 500 });
	ScrollReveal().reveal('.texto-contacto-2', { duration: 1500, delay: 1000 });
	ScrollReveal().reveal('.texto-contacto-3', { duration: 1500, delay: 1250 });
	
	$("#nav-btn").click(function(){
		$(".bg-slide-nav").fadeIn("slow");
		$(".slide-nav-content").fadeIn("slow");
        $(".slide-nav").animate({
            width: "toggle",
            opacity: "toggle"
        }, "slow");
    });

    $("#btn-exit-nav").click(function(){
    	$(".bg-slide-nav").fadeOut("slow");
    	$(".slide-nav-content").fadeOut("slow");
        $(".slide-nav").animate({
            width: "toggle",
            opacity: "toggle"
        }, "slow");
    });


    $('form').submit(function(ev){
    	ev.preventDefault();
    	enviarMail();
    });

}

function preloadImage(url){
    var img=new Image();
    img.src=url;
}

function enviarMail(){
	//var nombre = $('#nombre').val();
	var nombre = $('#nombre');
	var ciudad = $('#ciudad');//.val().trim();
	var pais = $('#pais');//.val().trim();
	var telefono = $('#telefono');//.val().trim();
	var mail = $('#mail');//.val().trim();
	var about = $('#about');//.val().trim();
	var asunto = $('#asunto');//.val().trim();
	var mensaje = $('#mensaje');//.val().trim();
	//var terminos = $('#terminos').val();
	if ($('#terminos').is(':checked')) {var terminos = true;} else {var terminos = false;}




	var formOk = validarForm(nombre, ciudad, pais, telefono, mail, about, asunto, mensaje, terminos);

	//console.log(formOk);
	if (formOk) {
		$.ajax({
			type: "POST",
			url: "enviar_mail.php",
			dataType : "json",
			data: ('nombre='+nombre.val().trim()+'&ciudad='+ciudad.val().trim()+'&pais='+pais.val().trim()+'&telefono='+telefono.val().trim()+'&mail='+mail.val().trim()+'&about='+about.val().trim()+'&asunto='+asunto.val().trim()+'&mensaje='+mensaje.val().trim()+'&terminos='+terminos),
			success: function(resp){
				console.log(resp);
				if (resp[0] == "ERROR") {
					alert(resp[1]);
				} else {
					alert('Mensaje enviado exitosamente.');
					window.location.href="contacto.php";
				}
				
			}, error: function(resp){
				console.log(resp);
				alert("Ocurrio un error al enviar el mensaje. Intente nuevamente.");
			}
		});
	}

}


function validarForm(nombre, ciudad, pais, telefono, mail, about, asunto, mensaje, terminos){

	var errores = 0;

	//reestablecer colores
	$(nombre).css({"border-bottom": "1px solid #c2B59b"});
	$(ciudad).css({"border-bottom": "1px solid #c2B59b"});
	$(pais).css({"border-bottom": "1px solid #c2B59b"});
	$(telefono).css({"border-bottom": "1px solid #c2B59b"});
	$(mensaje).css({"border-bottom": "1px solid #c2B59b"});
	$(mail).css({"border-bottom": "1px solid #c2B59b"});
	$("#terminosReq").css("display","none");
	$("#nombreReq").css("display","none");
	$("#ciudadReq").css("display","none");
	$("#paisReq").css("display","none");
	$("#telefonoReq").css("display","none");
	$("#mensajeReq").css("display","none");
	$("#mailReq").css("display","none"); 



	if (!terminos) {
		//$("#terminos").css({"border": "1px solid #C40529"});
		$("#terminosReq").css("display","block");
		errores++;
	}
	
	if ($(nombre).val().trim() == "") {
		$(nombre).css({"border-bottom": "1px solid #C40529"});
		$("#nombreReq").css("display","block");
		errores++;
	}
	if ($(ciudad).val().trim() == "") {
		$(ciudad).css({"border-bottom": "1px solid #C40529"});
		$("#ciudadReq").css("display","block");
		errores++;
	}
	if ($(pais).val().trim() == "") {
		$(pais).css({"border-bottom": "1px solid #C40529"});
		$("#paisReq").css("display","block");
		errores++;
	}
	if ($(telefono).val().trim() == "") {
		$(telefono).css({"border-bottom": "1px solid #C40529"});
		$("#telefonoReq").css("display","block");
		errores++;
	}

	if ($(mensaje).val().trim() == "") {
		$(mensaje).css({"border-bottom": "1px solid #C40529"});
		$("#mensajeReq").css("display","block");
		errores++;
	}

	var m = $(mail).val().trim();
	var mOk=isEmail(m);

	if (!mOk) {
		$(mail).css({"border-bottom": "1px solid #C40529"});
		$("#mailReq").css("display","block");
		errores++;
	}

	if (errores == 0) { return true; } else { return false;}
}


function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}
