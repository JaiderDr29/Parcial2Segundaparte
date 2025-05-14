<?php
require_once ("config/conexion.php"); 

/*TODO_: Sistema de acceso personalizado para Jaider Rodriguez */
if (isset($_POST["enviar"]) && $_POST["enviar"] == "si") {
    require_once("models/Usuario.php");
    $usuario = new Usuario();
    $usuario->Login();
}
?>

<!doctype html>
<html lang="es" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">
<head>
    <meta charset="utf-8" />
    <title>Sistema JR | Jaider Rodriguez</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Sistema de gestión JR - Soluciones Tecnológicas" name="description" />
    <meta content="Jaider Rodriguez" name="author" />
    <!-- Favicon personalizado -->
    <link rel="shortcut icon" href="assets/images/logo-jr.png">

    <!-- Layout config Js -->
    <script src="assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="assets/css/custom-jr.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="auth-page-wrapper pt-5">
        <!-- Fondo con efecto de partículas -->
        <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
            <div class="bg-overlay-jr"></div>
            <div class="shape">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1440 120">
                    <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
                </svg>
            </div>
        </div>

        <!-- Contenido principal -->
        <div class="auth-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-sm-5 mb-4 text-white-50">
                            <div>
                                <a href="" class="d-inline-block auth-logo">
                                    <img src="assets/images/logo-jr-light.png" alt="Logo JR" height="30">
                                </a>
                            </div>
                            <p class="mt-3 fs-15 fw-medium">SISTEMA DE GESTIÓN JR</p>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4 card-jr">
                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5 class="text-primary">¡Bienvenido al Sistema JR!</h5>
                                    <p class="text-muted">Ingresa tus credenciales</p>
                                </div>
                                <div class="col-12">
                                    <?php
                                    if (isset($_SESSION['passErrorMessage'])) {
                                        echo '<div class="alert alert-danger">' . htmlspecialchars($_SESSION['passErrorMessage']) . '</div>';
                                        unset($_SESSION['passErrorMessage']);
                                    }
                                    if (isset($_SESSION['genericErrorMessage'])) {
                                        echo '<div class="alert alert-warning">' . htmlspecialchars($_SESSION['genericErrorMessage']) . '</div>';
                                        unset($_SESSION['genericErrorMessage']);
                                    }
                                    ?>
                                </div>
                                <div class="p-2 mt-4">
                                    <form id="loginForm" method="post" class="needs-validation" novalidate>
                                        <div class="mb-3">
                                            <label for="txt_user" class="form-label">Usuario JR</label>
                                            <input type="email" class="form-control" name="txt_user" id="txt_user"
                                                placeholder="usuario@jrtech.com" required>
                                            <div class="invalid-feedback">Ingresa tu usuario corporativo</div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Contraseña</label>
                                            <div class="input-group">
                                                <input type="password" class="form-control" name="txt_pass" 
                                                    id="txt_pass" placeholder="********" required>
                                                <button class="btn btn-outline-secondary" type="button" id="view_pass">
                                                    <i class="ri-eye-fill"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="rememberMe">
                                            <label class="form-check-label" for="rememberMe">Mantener sesión</label>
                                        </div>

                                        <div class="mt-4">
                                            <input type="hidden" name="enviar" value="si">
                                            <button class="btn btn-jr-primary w-100 py-2" type="submit">
                                                <i class="ri-login-box-line me-2"></i> Acceder
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer personalizado -->
        <footer class="footer-jr">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0">
                                &copy; <script>document.write(new Date().getFullYear())</script> 
                                <span class="text-jr-accent">JR Solutions</span> - 
                                Desarrollado por <strong>Jaider Rodriguez</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Scripts -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/pages/particles.app.js"></script>
    <script src="assets/js/password-addon.init.js"></script>
    <script src="log_in.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>