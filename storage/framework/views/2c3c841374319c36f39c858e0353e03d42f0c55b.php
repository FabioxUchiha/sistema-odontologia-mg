<!-- Nombre Field -->
<div class="form-group">
    <?php echo Form::label('nombre', 'Nombre:'); ?>

    <p><?php echo e($inventario->nombre); ?></p>
</div>

<!-- Categoria Field -->
<div class="form-group">
    <?php echo Form::label('categoria', 'Categoria:'); ?>

    <p><?php echo e($inventario->categoria); ?></p>
</div>

<!-- Marca Field -->
<div class="form-group">
    <?php echo Form::label('marca', 'Marca:'); ?>

    <p><?php echo e($inventario->marca); ?></p>
</div>

<!-- Cantidad Field -->
<div class="form-group">
    <?php echo Form::label('cantidad', 'Cantidad:'); ?>

    <p><?php echo e($inventario->cantidad); ?></p>
</div>

<!-- Estado Instrumental Field -->
<div class="form-group">
    <?php echo Form::label('estado_instrumental', 'Estado Instrumental:'); ?>

    <p><?php echo e($inventario->estado_instrumental); ?></p>
</div>

<!-- Creado el Field -->
<div class="form-group">
    <?php echo Form::label('created_at', 'Creado el:'); ?>

    <p><?php echo e($inventario->created_at->format('Y/m/d')); ?></p>
</div>

<!-- Actualizado el Field -->
<div class="form-group">
    <?php echo Form::label('updated_at', 'Actualizado el:'); ?>

    <p><?php echo e($inventario->updated_at->format('Y/m/d')); ?></p>
</div>

<?php /**PATH C:\laragon\www\sistema-odontologia-mg\resources\views/inventarios/show_fields.blade.php ENDPATH**/ ?>