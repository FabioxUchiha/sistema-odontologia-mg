<!-- Nombre Field -->
<div class="form-group">
    <?php echo Form::label('nombre', 'Nombre:'); ?>

    <p><?php echo e($insumos->nombre); ?></p>
</div>

<!-- Fecha De Compra Field -->
<div class="form-group">
    <?php echo Form::label('fecha_de_compra', 'Fecha De Compra:'); ?>

    <p><?php echo e($insumos->fecha_de_compra->format('Y/m/d')); ?></p>
</div>

<!-- Cantidad Field -->
<div class="form-group">
    <?php echo Form::label('cantidad', 'Cantidad:'); ?>

    <p><?php echo e($insumos->cantidad); ?></p>
</div>

<!-- Marca Field -->
<div class="form-group">
    <?php echo Form::label('marca', 'Marca:'); ?>

    <p><?php echo e($insumos->marca); ?></p>
</div>

<!-- Fecha De Vencimiento Field -->
<div class="form-group">
    <?php echo Form::label('fecha_de_vencimiento', 'Fecha De Vencimiento:'); ?>

    <p><?php echo e($insumos->fecha_de_vencimiento->format('Y/m/d')); ?></p>
</div>

<!-- Presentacion Field -->
<div class="form-group">
    <?php echo Form::label('presentacion', 'Presentacion:'); ?>

    <p><?php echo e($insumos->presentacion); ?></p>
</div>

<!-- Creado el Field -->
<div class="form-group">
    <?php echo Form::label('created_at', 'Creado el:'); ?>

    <p><?php echo e($insumos->created_at->format('Y/m/d')); ?></p>
</div>

<!-- Actualizado el Field -->
<div class="form-group">
    <?php echo Form::label('updated_at', 'Actualizado el:'); ?>

    <p><?php echo e($insumos->updated_at->format('Y/m/d')); ?></p>
</div>

<?php /**PATH C:\laragon\www\sistema-odontologia-mg\resources\views/insumos/show_fields.blade.php ENDPATH**/ ?>