
<?php $__env->startSection('content'); ?>
<style>
#suma{display:none;}
</style>
<div id="suma">
<?php $__currentLoopData = $ingresos->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ingreso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<?php echo e($total += $ingreso->precio); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<br>
<div class="container">
	<button type="button" class="btn btn-primary ">
        Ingresos del mes <span class="badge badge-light"><?php echo e($total); ?></span>
    </button>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sistema-odontologia-mg\resources\views/dashboard/dashboard.blade.php ENDPATH**/ ?>