<?php 
/*session_start();
require_once 'php/negocio/UsuarioSession.php';*/       
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<?php 
/*if(!negocio\UsuarioSession::existeSession()){
    echo 'no existe';
}*/
?>
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="img/logo1.png" alt="">
                </div>
                <form action="php/negocio/LoginBL.php?op=usuariologin" 
                	id="frmLogin" method="post" class="col-12">
                    <div class="form-group" id="user-group">
                        <input type="text" name="login" class="form-control" placeholder="Nombre de Usuario">
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" name="password" class="form-control" placeholder="Contraseña">
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Ingresar</button>
                </form>
                <div class="col-12 forgot">
                    <a href="#">Recordar Contraseña</a>
                </div>
            </div>
        </div>
    </div>

    <script src="js/fontawesome-all.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>

<script>

    $(document).ready(function(){
    	$("#frmLogin").submit(function(e){
        	e.preventDefault();
			option={
				url: $("#frmLogin").attr('action'),
				method: $("#frmLogin").attr('method'),
				data: $("#frmLogin").serialize(),
				dataType: 'json'
			};
			$.ajax(option).done(function(data){
				if(!data){
					alert('El usuario no existe, volver a intentar..!');
				}else{
					window.location = "bienvenido.php";
				}
				
			});
        });
    });

</script>



