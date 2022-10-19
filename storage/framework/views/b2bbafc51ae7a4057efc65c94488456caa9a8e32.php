<?php $__env->startSection('contenido'); ?>

<div class="usuarios_reg editar">

	<form method="POST" action="/editar/<?php echo e($user->id); ?>">
        @cdrf
        <?php echo method_field('PUT'); ?>
		<label type="text" value="<?php echo e($user->id); ?>"></label>
		<input type="text" value="<?php echo e($user->name); ?>" placeholder="Escriba su email" id="name" name="actualizarEmail">
        <input type="email" value="<?php echo e($user->email); ?>" placeholder="Escriba su email" id="email" name="actualizarEmail">

		<div class="button-field">
			<input type="reset" value="Reset" class="boton" />
			<input type="submit" value="Actualizar" class="boton" />
		</div>
	</form>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Git\PHP Avanzado\entrega-final\pizzeria\resources\views/pages/editar.blade.php ENDPATH**/ ?>