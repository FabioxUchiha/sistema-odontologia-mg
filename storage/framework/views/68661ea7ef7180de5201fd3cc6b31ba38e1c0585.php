<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1 class="pull-left">Users</h1>
        <h1 class="pull-right">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('crear usuarios')): ?>
                <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px"
                    href="<?php echo e(route('users.create')); ?>">Agregar Nuevo</a>
            <?php endif; ?>

        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <?php echo $__env->make('users.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
        <div class="text-center">

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sistema-odontologia-mg\resources\views/users/index.blade.php ENDPATH**/ ?>