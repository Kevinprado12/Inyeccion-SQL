<?php
session_start();
//' OR 1=1 --
//https://gist.github.com/ojgarciab/4f706704640d3f4bb6b4acfcaba59eeb
?><!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Entrada a la aplicación</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
</head>

<body style="padding-top: 3rem;">
    <div class="container">
        <div class="row">
           <!-- <div class="col-sm-6 col-md-4 col-md-offset-1">
                <h1 class="text-center login-title">Entrada al sistema (PDO malo)</h1>
                <div class="account-wall">
                    <form class="form-signin" method="post" action="login-pdo.malo.php">
                        <input name="usuario" type="text" class="form-control" placeholder="Usuario" required autofocus>
                        <input name="contraseña" type="password" class="form-control" placeholder="Contraseña" required>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
                        <label class="checkbox pull-left">
                    <input type="checkbox" value="remember-me">
                    Recordarme
                </label>
                        <a href="#" class="pull-right need-help">¿Necesita ayuda?</a><span class="clearfix"></span>
                    </form>
                </div>
                <a href="#" class="text-center new-account">Crear una cuenta</a>
            </div> -->
            <section className="vh-100">
            <head>
    <meta charset="utf-8">
    <title>Formulario de Ingreso</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Estilos personalizados -->

<body>
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <!-- Imagen de la izquierda -->
            <div class="col-md-6 img-col">
                <img src="">
            </div>

            <!-- Formulario de inicio de sesión -->
            <div class="col-md-6 form-col">
                <h1 class="login-title">Entrada al sistema </h1>
                <div class="account-wall">
                    <form class="form-signin" method="post" action="login-mysqli.malo.php">
                        <!-- Botones sociales -->
                        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start mb-3">
                            <button type="button" class="btn btn-primary btn-floating mx-1">
                                <i class="fab fa-facebook-f"></i>
                            </button>
                            <button type="button" class="btn btn-primary btn-floating mx-1">
                                <i class="fab fa-twitter"></i>
                            </button>
                            <button type="button" class="btn btn-primary btn-floating mx-1">
                                <i class="fab fa-linkedin-in"></i>
                            </button>
                        </div>

                        <!-- Campo de Usuario -->
                        <div class="form-outline">
                            <label class="form-label" for="usuario">Usuario</label>
                            <input name="usuario" type="text" class="form-control form-control-lg" placeholder="Ingrese su usuario" required autofocus>
                        </div>

                        <!-- Campo de Contraseña -->
                        <div class="form-outline">
                            <label class="form-label" for="contraseña">Contraseña</label>
                            <input name="contraseña" type="password" class="form-control form-control-lg" placeholder="Ingrese su contraseña" required>
                        </div>

                        <!-- Recordarme y Olvidar contraseña -->
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" value="remember-me" id="form2Example3" />
                                <label class="form-check-label" for="form2Example3">Recordarme</label>
                            </div>
                            <a href="#!" class="text-body">¿Olvidó su contraseña?</a>
                        </div>

                        <!-- Botón de Ingreso -->
                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">¿No tienes una cuenta? <a href="#!" class="link-danger">Crear una cuenta</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</section>

        <!--
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-1">
                <h1 class="text-center login-title">Entrada al sistema (PDO)</h1>
                <div class="account-wall">
                    <form class="form-signin" method="post" action="login-pdo.php">
                        <input name="usuario" type="text" class="form-control" placeholder="Usuario" required autofocus>
                        <input name="contraseña" type="password" class="form-control" placeholder="Contraseña" required>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
                        <label class="checkbox pull-left">
                    <input type="checkbox" value="remember-me">
                    Recordarme
                </label>
                        <a href="#" class="pull-right need-help">¿Necesita ayuda?</a><span class="clearfix"></span>
                    </form>
                </div>
                <a href="#" class="text-center new-account">Crear una cuenta</a>
            </div>
            <div class="col-sm-6 col-md-4 col-md-offset-1">
                <h1 class="text-center login-title">Entrada al sistema (mysqli)</h1>
                <div class="account-wall">
                    <form class="form-signin" method="post" action="login-mysqli.php">
                        <input name="usuario" type="text" class="form-control" placeholder="Usuario" required autofocus>
                        <input name="contraseña" type="password" class="form-control" placeholder="Contraseña" required>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
                        <label class="checkbox pull-left">
                    <input type="checkbox" value="remember-me">
                    Recordarme
                </label>
                        <a href="#" class="pull-right need-help">¿Necesita ayuda?</a><span class="clearfix"></span>
                    </form>
                </div>
                <a href="#" class="text-center new-account">Crear una cuenta</a>
            </div>
        </div>-->
<?php
if (isset($_SESSION['alerta'])) {
?>        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3">
                <div class="alert <?= $_SESSION['alerta']['clase'] ?> text-center"><?= $_SESSION['alerta']['contenido'] ?></div>
            </div>
        </div>
    </div>
<?php
    unset($_SESSION['alerta']);
}
?>    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>