<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="build/js/app.js"></script>
    <link rel="shortcut icon" href="<?= asset('./images/cit.png') ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?= asset('build/styles.css') ?>">
    <script>
window.history.pushState(null, "", window.location.href);
window.onpopstate = function(event) {
    window.history.pushState(null, "", window.location.href);
};
</script>
    <title></title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
        
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="/login_pruebas/">
                <img src="<?= asset('./images/ejercito.jpg') ?>" width="35px'" alt="cit" >
                INGESOFT
            </a>
            <div class="collapse navbar-collapse" id="navbarToggler">
                
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin: 0;">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/login_pruebas/"><i class="bi bi-house-fill me-2"></i>Inicio</a>
                    </li>
  
                    <div class="nav-item dropdown " >
                        <a class="nav-link dropdown-toggle" href="/login_pruebas/asignaciones" data-bs-toggle="dropdown">
                            <i class="bi bi-gear me-2"></i>Ingresar datos
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-dark "id="dropwdownRevision" style="margin: 0;">
                            <!-- <h6 class="dropdown-header">Información</h6> -->
                            <li>
                                <a class="dropdown-item nav-link text-white " href="/login_pruebas/empleados"><i class="ms-lg-0 ms-2 bi bi-plus-circle me-2"></i>Empleados</a>
                            </li>
                            <li>
                                <a class="dropdown-item nav-link text-white " href="/login_pruebas/puestos"><i class="ms-lg-0 ms-2 bi bi-plus-circle me-2"></i>Puestos</a>
                            </li>
                            <li>
                                <a class="dropdown-item nav-link text-white " href="/login_pruebas/areas"><i class="ms-lg-0 ms-2 bi bi-plus-circle me-2"></i>Areas</a>
                            </li>
                            <li>
                                <a class="dropdown-item nav-link text-white " href="/login_pruebas/asignaciones"><i class="ms-lg-0 ms-2 bi bi-plus-circle me-2"></i>Asignaciones</a>
                            </li> 
                            <li>
                                <a class="dropdown-item nav-link text-white" href="/login_pruebas/detalle"><i class="ms-lg-0 ms-2 bi bi-plus-circle me-2"></i>Detalles</a>
                            </li>                                             
                        </ul>
                    </div> 

                </ul> 
                <form>
                    <div class="col-lg-1 d-grid mb-lg-0 mb-2">
                        <!-- Ruta relativa desde el archivo donde se incluye menu.php -->
                        <button class="btn btn-danger" type="submit" id="closeSession"
                            name="closeSession"><i class="bi bi-arrow-bar-left"></i>CERRAR SESIÓN</button>
                    </div>
                </form>

            
            </div>
        </div>
        
    </nav>
    <div class="progress fixed-bottom" style="height: 6px;">
        <div class="progress-bar progress-bar-animated bg-danger" id="bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <div class="container-fluid pt-5 mb-4" style="min-height: 85vh">
        
        <?php echo $contenido; ?>
    </div>
    <div class="container-fluid " >
        <div class="row justify-content-center text-center">
            <div class="col-12">
                <p style="font-size:xx-small; font-weight: bold;">
                        Comando de Informática y Tecnología, <?= date('Y') ?> &copy;
                </p>
            </div>
        </div>
    </div>

    <script src="<?= asset('./build/js/menu/index.js') ?>"></script>
</body>
</html>