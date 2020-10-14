<!-- Nombre Field -->
<div class="form-group">
    <?php echo Form::label('nombre', 'Nombre:'); ?>

    <p><?php echo e($desplegableServicioIngreso->nombre); ?></p>
</div>

<!-- Creado el Field -->
<div class="form-group">
    <?php echo Form::label('created_at', 'Creado el:'); ?>

    <p><?php echo e($desplegableServicioIngreso->created_at->format('Y-d-m')); ?></p>
</div>

<!-- Actualizado el Field -->
<div class="form-group">
    <?php echo Form::label('updated_at', 'Actualizado el:'); ?>

    <p><?php echo e($desplegableServicioIngreso->updated_at->format('Y-d-m')); ?></p>
</div>

<?php /**PATH C:\laragon\www\sistema-odontologia-mg\resources\views/desplegable_servicio_ingresos/show_fields.blade.php ENDPATH**/ ?>