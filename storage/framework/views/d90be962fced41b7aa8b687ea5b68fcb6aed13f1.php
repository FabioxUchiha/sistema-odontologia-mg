<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            Notas
        </h1>
   </section>
   <div class="content">
       <?php echo $__env->make('adminlte-templates::common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   <?php echo Form::model($notas, ['route' => ['notas.update', $notas->id], 'method' => 'patch']); ?>


                        <?php echo $__env->make('notas.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                   <?php echo Form::close(); ?>

               </div>
           </div>
       </div>
   </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sistema-odontologia-mg\resources\views/notas/edit.blade.php ENDPATH**/ ?>