<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1 class="pull-left">Desplegable Servicio o Procedimiento</h1>
        <h1 class="pull-right">
           <a class="btn btn-danger pull-right" style="margin-top: -10px;margin-bottom: 5px" href="<?php echo e(route('desplegableServicioIngresos.create')); ?>">Agregar Nuevo Servicio</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    <?php echo $__env->make('desplegable_servicio_ingresos.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
        <div class="text-center">
             <?php echo $__env->make('adminlte-templates::common.paginate', ['records' => $desplegableServicioIngresos], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sistema-odontologia-mg\resources\views/desplegable_servicio_ingresos/index.blade.php ENDPATH**/ ?>