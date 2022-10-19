<?php $__env->startSection('contenido'); ?>

<section class="login">
    <div class="formulario ">
        <form method="POST" class="col s12" autocomplete="off" action="<?php echo e(route('pages.update', $user->id)); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        

            <div class="row card-panel panel-body">
                <div class="nombre titulo_prod">
                    <h2>Editar Usuario </h2>
                </div><br>

                <div class="input-field col s12"><label for="name" class="text-form01">Ingrese un Usuario: </label>
                    <input autocomplete="off" type="text" value="<?php echo e($user->name); ?>" name="name" id="name" class="validate" required>
                </div>
                <div class="input-field col s12"><label for="email" class="text-form01">Ingrese un Email: </label>
                    <input autocomplete="off" type="email" value="<?php echo e($user->email); ?>" name="email" id="email" class="validate" required>
                </div>
                <div class="input-field col s12"><label for="password" class="text-form01">Ingrese una Contraseña: </label>
                    <input autocomplete="off" type="password"  value="<?php echo e($user->password); ?>" name="password" id="password" class="validate" required>
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

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Git\PHP Avanzado\entrega-final\pizzeria\resources\views/pages/edit.blade.php ENDPATH**/ ?>