<!-- Nombre Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nombre', 'Nombre:'); ?>

    <?php echo Form::text('nombre', null, ['class' => 'form-control']); ?>

</div>

<!-- Fecha De Compra Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('fecha_de_compra', 'Fecha De Compra:'); ?>

    <?php echo Form::text('fecha_de_compra', null, ['class' => 'form-control','id'=>'fecha_de_compra']); ?>

</div>

<?php $__env->startPush('scripts'); ?>
    <script type="text/javascript">
        $('#fecha_de_compra').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        })
    </script>
<?php $__env->stopPush(); ?>

<!-- Cantidad Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('cantidad', 'Cantidad:'); ?>

    <?php echo Form::number('cantidad', null, ['class' => 'form-control']); ?>

</div>

<!-- Marca Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('marca', 'Marca:'); ?>

    <?php echo Form::text('marca', null, ['class' => 'form-control']); ?>

</div>

<!-- Fecha De Vencimiento Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('fecha_de_vencimiento', 'Fecha De Vencimiento:'); ?>

    <?php echo Form::text('fecha_de_vencimiento', null, ['class' => 'form-control','id'=>'fecha_de_vencimiento']); ?>

</div>

<?php $__env->startPush('scripts'); ?>
    <script type="text/javascript">
        $('#fecha_de_vencimiento').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        })
    </script>
<?php $__env->stopPush(); ?>

<!-- Presentacion Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('presentacion', 'Presentacion:'); ?>

    <?php echo Form::text('presentacion', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Guardar', ['class' => 'btn btn-danger']); ?>

    <a href="<?php echo e(route('insumos.index')); ?>" class="btn btn-default">Cancelar</a>
</div>
<?php /**PATH C:\laragon\www\sistema-odontologia-mg\resources\views/insumos/fields.blade.php ENDPATH**/ ?>