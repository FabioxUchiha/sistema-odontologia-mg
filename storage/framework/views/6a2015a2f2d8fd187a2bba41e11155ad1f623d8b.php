<?php $__env->startSection('content'); ?>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('crear notas')): ?>
    <section class="content-header">
        <h1>
            Notas
        </h1>
    </section>
    <div class="content">
        <?php echo $__env->make('adminlte-templates::common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="box box-primary">
            <div class="box-body" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/background5.jpg);">
                <div class="row">
                    <?php echo Form::open(['route' => 'notas.store']); ?>


                        <?php echo $__env->make('notas.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sistema-odontologia-mg\resources\views/notas/create.blade.php ENDPATH**/ ?>