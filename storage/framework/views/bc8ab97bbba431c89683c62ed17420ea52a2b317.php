<?php $__env->startSection('contenido'); ?>


<section class="mapa">
    <div class="formulario1">
        <p><strong>Dirección</strong>: Av. Le Vayer 1234</p>
        <p><strong>Teléfono</strong>: +541157614322</p>
        <p><strong>Email</strong>: contacto@newyorkpizza.com
    </div>
    <div class="mapouter">
        <div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
        src="https://maps.google.com/maps?width=800&amp;height=600&amp;hl=en&amp;q=pizzeria new york&amp;t=&amp;z=14&amp;
        ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Git\PHP Avanzado\entrega-final\pizzeria\resources\views/pages/ubicacion.blade.php ENDPATH**/ ?>