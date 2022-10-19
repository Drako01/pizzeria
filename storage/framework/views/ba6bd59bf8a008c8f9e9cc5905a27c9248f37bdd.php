<?php $__env->startSection('contenido'); ?>

<section class="login">
    <div class="formulario ">
        <form action="users" method="POST" class="col s12" autocomplete="off">
            <div class="row card-panel panel-body">
                <div class="nombre titulo_prod">
                    <?php
                    echo '<h2>Registrarse</h2>' ?></div><br>
                <div class="input-field col s12"><label for="name" class="text-form01">Ingrese su Usuario: </label>
                    <input autocomplete="off" type="text" name="name" id="name" class="validate" required>
                </div>
                <div class="input-field col s12"><label for="email" class="text-form01">Ingrese su Email: </label>
                    <input autocomplete="off" type="email" name="email" id="email" class="validate" required>
                </div>
                <div class="input-field col s12"><label for="password" class="text-form01">Ingrese su Contraseña: </label>
                    <input autocomplete="off" type="password" name="password" id="password" class="validate" required>
                </div>
            </div>
            <div class="button-field">
                <input type="reset" value="Borrar" class="boton" />
                <input type="submit" value="Guardar" class="boton" name="enviar" />
            </div>
        </form>

    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Git\PHP Avanzado\entrega-final\pizzeria\resources\views/users/create.blade.php ENDPATH**/ ?>