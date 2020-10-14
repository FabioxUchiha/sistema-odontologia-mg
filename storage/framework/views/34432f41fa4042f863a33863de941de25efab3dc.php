<!-- Documento Field -->
<div class="form-group">
    <?php echo Form::label('documento', 'Documento:'); ?>

    <p><?php echo e($notas->documento); ?></p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    <?php echo Form::label('nombre', 'Nombre:'); ?>

    <p><?php echo e($notas->nombre); ?></p>
</div>

<!-- Telefono Field -->
<div class="form-group">
    <?php echo Form::label('telefono', 'Telefono:'); ?>

    <p><?php echo e($notas->telefono); ?></p>
</div>

<!-- Procedimiento Field -->
<div class="form-group">
    <?php echo Form::label('procedimiento', 'Procedimiento:'); ?>

    <p><?php echo e($notas->procedimiento); ?></p>
</div>

<!-- Observaciones Field -->
<div class="form-group">
    <?php echo Form::label('observaciones', 'Observaciones:'); ?>

    <p><?php echo e($notas->observaciones); ?></p>
</div>

<!-- Creado el Field -->
<div class="form-group">
    <?php echo Form::label('created_at', 'Creado:'); ?>

    <p><?php echo e($notas->created_at); ?></p>
</div>

<!-- Actualizado el Field -->
<div class="form-group">
    <?php echo Form::label('updated_at', 'Actualizado:'); ?>

    <p><?php echo e($notas->updated_at); ?></p>
</div>

<?php /**PATH C:\laragon\www\sistema-odontologia-mg\resources\views/notas/show_fields.blade.php ENDPATH**/ ?>