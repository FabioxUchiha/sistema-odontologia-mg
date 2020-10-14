<?php $__env->startSection('content'); ?>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('editar insumos')): ?>
    <section class="content-header">
        <h1>
            Insumos
        </h1>
   </section>
   <div class="content">
       <?php echo $__env->make('adminlte-templates::common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   <?php echo Form::model($insumos, ['route' => ['insumos.update', $insumos->id], 'method' => 'patch']); ?>


                        <?php echo $__env->make('insumos.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                   <?php echo Form::close(); ?>

               </div>
           </div>
       </div>
   </div>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sistema-odontologia-mg\resources\views/insumos/edit.blade.php ENDPATH**/ ?>