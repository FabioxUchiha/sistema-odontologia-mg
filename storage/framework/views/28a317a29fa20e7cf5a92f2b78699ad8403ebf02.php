<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            Desplegable Nombre Inventario
        </h1>
   </section>
   <div class="content">
       <?php echo $__env->make('adminlte-templates::common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   <?php echo Form::model($desplegableNombreInventario, ['route' => ['desplegableNombreInventarios.update', $desplegableNombreInventario->id], 'method' => 'patch']); ?>


                        <?php echo $__env->make('desplegable_nombre_inventarios.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                   <?php echo Form::close(); ?>

               </div>
           </div>
       </div>
   </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sistema-odontologia-mg\resources\views/desplegable_nombre_inventarios/edit.blade.php ENDPATH**/ ?>