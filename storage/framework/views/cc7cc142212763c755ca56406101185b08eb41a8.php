<!-- Nombre Field -->
<div class="form-group">
    <?php echo Form::label('nombre', 'Nombre:'); ?>

    <p><?php echo e($desplegableCategoriaInstrumental->nombre); ?></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    <?php echo Form::label('created_at', 'Creado el:'); ?>

    <p><?php echo e($desplegableCategoriaInstrumental->created_at); ?></p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    <?php echo Form::label('updated_at', 'Actualizado el:'); ?>

    <p><?php echo e($desplegableCategoriaInstrumental->updated_at); ?></p>
</div>

<?php /**PATH C:\laragon\www\sistema-odontologia-mg\resources\views/desplegable_categoria_instrumentals/show_fields.blade.php ENDPATH**/ ?>