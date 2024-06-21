<?php
    require_once("config/conexion.php");
    if(isset($_POST["enviar"]) and $_POST["enviar"]=="si"){
        require_once("models/Usuario.php");
        $usuario = new Usuario();
        $usuario->login();
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AnderCode::Acceso</title>
    <link rel="stylesheet" href="public/css/csspropio/login.css">
</head>
<body>
    <div class="cont-general">
        <div class="cont-1">
            <img src="public/1.png" alt="Sveltia Bot" class="sveltia-bot" id="imgtipo">
        </div>
        <div class="cont-2">
     
            <form action="" method="post" id="login_form">
                <input type="hidden" id="rol_id" name="rol_id" value="1">



                <header class="sign-title"id="lbltitulo">Acceso Usuario</header>

               <!-- /*Switch case mensajes de error */-->

                <?php if (isset($_GET["m"])): ?>
                    <div class="alert alert-warning alert-icon alert-close alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <i class="font-icon font-icon-warning"></i>
                        <?php if ($_GET["m"] == "1"): ?>
                            El Usuario y/o Contraseña son incorrectos.
                        <?php elseif ($_GET["m"] == "2"): ?>
                            Los campos están vacíos.
                        <?php endif; ?>
                    </div>
                <?php endif; ?>


                <div class="form-group">
                    <input type="text" id="usu_correo" name="usu_correo" class="form-control" placeholder="E-Mail" required>
                </div>
                <div class="form-group">
                    <input type="password" id="usu_pass" name="usu_pass" class="form-control" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <div class="float-right reset">
                        <a href="reset-password.html">Cambiar Contraseña</a>
                    </div>
                    <div class="float-left reset">
                        <a href="#" id="btnsoporte">Acceso Soporte</a>
                    </div>
                </div>
                <input type="hidden" name="enviar" value="si">
                <button type="submit" class="btn btn-rounded">Acceder</button>
            </form>
        </div>
    </div>

    <!-- Scripts -->
    <script src="public/js/lib/jquery/jquery.min.js"></script>
    <script src="public/js/lib/tether/tether.min.js"></script>
    <script src="public/js/lib/bootstrap/bootstrap.min.js"></script>
    <script src="public/js/plugins.js"></script>
    <script src="public/js/lib/match-height/jquery.matchHeight.min.js"></script>
    <script>
        $(function() {
            $('.page-center').matchHeight({
                target: $('html')
            });

            $(window).resize(function(){
                setTimeout(function(){
                    $('.page-center').matchHeight({ remove: true });
                    $('.page-center').matchHeight({
                        target: $('html')
                    });
                }, 100);
            });
        });
    </script>
    <script src="public/js/app.js"></script>
    <script src="datos.js"></script>
    <script type="text/javascript"  src="index.js"></script>
</body>
</html>
