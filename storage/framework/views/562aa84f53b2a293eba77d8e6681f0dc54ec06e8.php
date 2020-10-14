<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            Desplegable Marca Instrumental
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    <?php echo $__env->make('desplegable_marca_instrumentals.show_fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <a href="<?php echo e(route('desplegableMarcaInstrumentals.index')); ?>" class="btn btn-default">Volver</a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sistema-odontologia-mg\resources\views/desplegable_marca_instrumentals/show.blade.php ENDPATH**/ ?>