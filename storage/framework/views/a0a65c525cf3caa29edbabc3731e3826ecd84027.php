<?php $__env->startSection('content'); ?>
<style>
#suma{display:none;}
</style>
    <section class="content-header">
        <h1 class="pull-left">Ingresos y Egresos</h1>
        <h1 class="pull-right">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('crear inventarios')): ?>
           <a class="btn btn-danger pull-right" style="margin-top: -1px;margin-bottom: 5px;margin-left: 5px" href="<?php echo e(route('ingresos.create')); ?>">Agregar Ingreso o Egreso</a>
            <?php endif; ?>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    <?php echo $__env->make('ingresos.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
        <div class="text-right">
        <div id="suma">
            <?php $__currentLoopData = $ingresosDia->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $diario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($diario->tipo == 'Ingreso'): ?>
                <?php echo e($total += $diario->precio); ?>

            <?php endif; ?>
            <?php if($diario->tipo == 'Egreso'): ?>
                <?php echo e($total -= $diario->precio); ?>

            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
            <button type="button" class="btn btn-danger">
                Ingresos hoy <span class="badge badge-light"><?php echo e($total); ?></span>
            </button>
        </div>
        <br>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('crear ingresos')): ?>
               
               <a class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px" href="<?php echo e(route('ingresos.export')); ?>">Exportar a Excel</a>
        <?php endif; ?>
        <div class="text-center">
            <?php echo $__env->make('adminlte-templates::common.paginate', ['records' => $ingresos], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sistema-odontologia-mg\resources\views/ingresos/index.blade.php ENDPATH**/ ?>