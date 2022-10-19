<?php $__env->startSection('contenido'); ?>

<div class="fondo">
    <h4>Usuarios Registrados</h4>
</div>
<?php if(session('success')): ?>
<div class="card blue-grey darken-1">
    <div class="card-content white-text " style="text-align: center; font-size:20px;">
        <p><?php echo e(session('success')); ?></p>
    </div>
</div>
<?php endif; ?>
<div class="button-field">
    <a href="create">
        <button class="boton">
            Crear Usuario
        </button>
    </a>
</div>
<div class="users">
    <div class="usuarios_reg">

        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Creado</th>
                    <th>Modificado</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </tr>
            </thead>

            <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($user->id); ?></td>
                    <td><?php echo e($user->name); ?></td>
                    <td><?php echo e($user->email); ?></td>
                    <td><?php echo e($user->created_at); ?></td>
                    <td><?php echo e($user->updated_at); ?></td>


                    <td><a href="<?php echo e(route('pages.edit', $user->id)); ?>"><img src="../img/edit.png"></a></td>
                    <td>
                        <form method="POST" action="<?php echo e(route('pages.destroy', $user->id)); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <input type="hidden" name="destroy">
                            <button type="submit" class="hidden_btn" onclick="return eliminar_cont()"><img src="../img/trash.png"></button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<script type="text/javascript">
    function eliminar_cont() {

        if (confirm('Esta seguro de eliminar el registro?') == true) {
            alert('El registro ha sido eliminado correctamente!');
            return true;
        } else {
            return false;
        }
    }
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Git\PHP Avanzado\entrega-final\pizzeria\resources\views/pages/usuarios_reg.blade.php ENDPATH**/ ?>