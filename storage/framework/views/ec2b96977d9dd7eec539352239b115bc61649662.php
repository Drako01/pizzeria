<?php $__env->startSection('contenido'); ?>
<section class="login">
    <div class="formulario ">

        <form action="" method="POST" class="" class="col s12" autocomplete="off">
            <?php echo csrf_field(); ?>
            <div class="row card-panel panel-body">
                <div class="nombre titulo_prod">
                    <?php
                    echo '<h2>Iniciar Sesión</h2>' ?></div><br>
                <div class="input-field col s12"><label for="email" class="text-form01">Ingrese su Email: </label>
                    <input autocomplete="off" type="email" name="email" value="<?php echo e(old('email')); ?>" id="email" class="validate" required autofocus>
                </div>

                <div class="input-field col s12"><label for="pass" class="text-form01">Ingrese su Contraseña: </label>
                    <input autocomplete="off" type="password" name="password" id="password" class="validate" required>
                </div>
                <div>
                    <label>
                        <input type="checkbox" name="remember" />
                        <span>Recordar mi Sesión</span>
                    </label>
                </div>


            </div>
            <div class="button-field">
                <input type="reset" value="Borrar" class="boton" />
                <input type="submit" value="Ingresar" class="boton" name="enviar" />
            </div>
        </form>

        <?php if($errors->any()): ?>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <?php echo e($error); ?>

            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <?php endif; ?>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Git\PHP Avanzado\entrega-final\pizzeria\resources\views/pages/login.blade.php ENDPATH**/ ?>