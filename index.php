<!DOCTYPE html>
<html lang="es">
<head>
	<title>Apple Academy - Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="librerias/images/logoBanner2.png"/>
	<link rel="stylesheet" type="text/css" href="librerias/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="librerias/css/util.css">
	<link rel="stylesheet" type="text/css" href="librerias/css/main.css">
	<link rel="stylesheet" type="text/css" href="librerias/css/alertify.min.css">
	<link rel="stylesheet" type="text/css" href="librerias/css/themes/default.css">
	<link rel="stylesheet" type="text/css" href="librerias/sweetalert/sweetalert2.css">
</head>
<body onload="nobackbutton();">
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(librerias/images/bg-01.jpg);">
					<span class="login100-form-title-1">Login - Apple Academy</span>
				</div>
				<form class="login100-form validate-form" method="POST" name="frmDatosUsuario" id="frmDatosUsuario">
					<div class="wrap-input100 validate-input m-b-26">
						<span class="label-input100">Usuario</span>
						<input class="input100" type="text" name="usuario" id="usuario" placeholder="Ingrese Usuario">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-18">
						<span class="label-input100">Contraseña</span>
						<input class="input100" type="password" name="clave" id="clave" placeholder="Ingrese Contraseña">
						<span class="focus-input100"></span>
					</div>
					<div class="container-login100-form-btn">
						<button type="button" class="login100-form-btn" name="btnEntrar" id="btnEntrar" onclick="validar()">
							Entrar
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="librerias/js/alertify.js"></script>
	<script src="librerias/vendor/jquery/jquery.min.js"></script>
	<script src="librerias/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="librerias/js/main.js"></script>
	<script src="https://www.gstatic.com/firebasejs/6.3.4/firebase-app.js"></script>
	<script src="https://www.gstatic.com/firebasejs/6.3.4/firebase-firestore.js"></script>
	<script src="librerias/sweetalert/sweetalert2.all.js"></script>

	<script>

		firebase.initializeApp({
			apiKey: 'AIzaSyBnqPhjPMeIZ3bDb2cIIZcJTVt6oSyt0_Y',
			authDomain: 'ssg-music-app.firebaseapp.com',
			projectId: 'ssg-music-app'
		});
//agregar Documentos
var db = firebase.firestore();
$("#usuario").focus();

function validar(){
	var user=document.getElementById('usuario').value;
	var pass=document.getElementById('clave').value;
	var ok=0;
	db.collection("usuarios").where("usuario", "==", user).where("clave", "==", pass).where("estado", "==", "ACTIVO")
	.get()
	.then(function(querySnapshot) {
		querySnapshot.forEach(function(doc) {
			ok=1;
		});
		if(ok){
					// Esta es la variable que vamos a pasar
		var miVariableJS= user;
		// Enviamos la variable de javascript a archivo.php
		$.post("assets/files/vista/appAcademy.php",{"texto":miVariableJS},function(respuesta){
		});
			window.location="assets/files/vista/appAcademy.php";
		}else if(ok ==0){
			Swal.fire({
				type: 'error',
				title: 'ALERTA',
				text: 'EL USUARIO Y CONTRASEÑA SON INVALIDOS! ',
				footer: 'O TU USUARIO AUN NO ESTA ACTIVO'
			})
		}
	})
	.catch(function(error) {
		alert("error");
	});

}



function nobackbutton(){ 
	window.location.hash="no-back-button";
        	window.location.hash="Again-No-back-button" //chrome
        	window.onhashchange=function(){window.location.hash="no-back-button";}
        }
    </script>
</body>
</html>