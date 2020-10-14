<!-- Fecha Field -->
<div class="form-group">
    <?php echo Form::label('fecha', 'Fecha:'); ?>

    <p><?php echo e($ingresos->fecha->format('Y/m/d')); ?></p>
</div>

<!-- Servicio Field -->
<div class="form-group">
    <?php echo Form::label('servicio', 'Servicio:'); ?>

    <p><?php echo e($ingresos->servicio); ?></p>
</div>

<!-- Detalle Field -->
<div class="form-group">
    <?php echo Form::label('detalle', 'Detalle:'); ?>

    <p><?php echo e($ingresos->detalle); ?></p>
</div>

<!-- Tipo Field -->
<div class="form-group">
    <?php echo Form::label('tipo', 'Tipo:'); ?>

    <p><?php echo e($ingresos->tipo); ?></p>
</div>

<!-- Precio Field -->
<div class="form-group">
    <?php echo Form::label('precio', 'Precio:'); ?>

    <p><?php echo e($ingresos->precio); ?></p>
</div>

<!-- Creado el Field -->
<div class="form-group">
    <?php echo Form::label('created_at', 'Creado el:'); ?>

    <p><?php echo e($ingresos->created_at->format('Y/m/d')); ?></p>
</div>

<!-- Actualizado el Field -->
<div class="form-group">
    <?php echo Form::label('updated_at', 'Editado el:'); ?>

    <p><?php echo e($ingresos->updated_at->format('Y/m/d')); ?></p>
</div>

<?php /**PATH C:\laragon\www\sistema-odontologia-mg\resources\views/ingresos/show_fields.blade.php ENDPATH**/ ?>