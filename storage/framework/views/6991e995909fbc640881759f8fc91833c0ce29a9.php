<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo en PHP - Avanzado</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div id="contenedor">
        <header>
            <nav id="botonera_principal">
                <ul>
                    <li><a href="/">Inicio</a> </li>
                    <li><a href="fotos">Nuestras Pizzas</a> </li>
                    <li><a href="acerca_de">Acerca de</a> </li>
                    <li><a href="ubicacion">Donde Estamos?</a> </li>
                    <li><a href="contacto">Contacto</a> </li>
                    <?php if(auth()->guard()->check()): ?>
                    <li><a href="usuarios_reg">Usuarios</a></li>

                    <li>
                        <form method="POST" action="/salir" style="display: inline;">
                            <?php echo csrf_field(); ?>
                            <a href="salir">
                                Salir</a>
                        </form>

                    </li>
                    <?php else: ?>
                    <li><a href="users/create">Registro</a> </li>
                    <li><a href="login">Iniciar Sessión</a> </li>
                    <?php endif; ?>
                </ul>
            </nav>
            <div class="fondo_usr"></div>

        </header>

        <?php if(session('status')): ?>

        <div class="card blue-grey darken-1">
            <div class="card-content white-text " style="text-align: center; font-size:20px;">
                <p><?php echo e(session('status')); ?></p>
            </div>
        </div>
        <?php endif; ?>


        <?php echo $__env->yieldContent('contenido'); ?>

        <footer>
            <p>&COPY; Alejandro Di Stefano - Nivel Avanzado de PHP y MySQL</p>
        </footer>
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="/js/script.js"></script>
</body>

</html>
<?php /**PATH F:\Git\PHP Avanzado\entrega-final\pizzeria\resources\views///layout/layout.blade.php ENDPATH**/ ?>