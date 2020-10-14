<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1 class="pull-left" >Notas</h1>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('crear notas')): ?>
            <h1 class="pull-right">
                <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px"
                    href="<?php echo e(route('notas.create')); ?>">Agregar nueva Nota</a>
            </h1>
        <?php endif; ?>

    </section>
    <div class="content">
        <div class="clearfix"></div>

        <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <?php echo $__env->make('notas.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
        <div class="text-center">

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sistema-odontologia-mg\resources\views/notas/index.blade.php ENDPATH**/ ?>