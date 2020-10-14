<!-- Nombre Field -->
<div class="form-group">
    <?php echo Form::label('nombre', 'Nombre:'); ?>

    <p><?php echo e($desplegableMarcaInstrumental->nombre); ?></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    <?php echo Form::label('created_at', 'Creado el:'); ?>

    <p><?php echo e($desplegableMarcaInstrumental->created_at); ?></p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    <?php echo Form::label('updated_at', 'Actualizado el:'); ?>

    <p><?php echo e($desplegableMarcaInstrumental->updated_at); ?></p>
</div>

<?php /**PATH C:\laragon\www\sistema-odontologia-mg\resources\views/desplegable_marca_instrumentals/show_fields.blade.php ENDPATH**/ ?>