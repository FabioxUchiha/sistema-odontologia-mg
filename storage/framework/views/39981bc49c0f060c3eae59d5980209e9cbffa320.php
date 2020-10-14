<!-- Documento Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('documento', 'Documento:'); ?>

    <?php echo Form::number('documento', null, ['class' => 'form-control']); ?>

</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nombre', 'Nombre:'); ?>

    <?php echo Form::text('nombre', null, ['class' => 'form-control']); ?>

</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('telefono', 'Telefono:'); ?>

    <?php echo Form::number('telefono', null, ['class' => 'form-control']); ?>

</div>

<!-- Procedimiento Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('procedimiento', 'Procedimiento:'); ?>

    <?php echo Form::text('procedimiento', null, ['class' => 'form-control']); ?>

</div>

<!-- Observaciones Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('observaciones', 'Observaciones:'); ?>

    <?php echo Form::text('observaciones', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Guardar', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('notas.index')); ?>" class="btn btn-default">Cancelar</a>
</div>
<?php /**PATH C:\xampp\htdocs\sistema-odontologia-mg\resources\views/notas/fields.blade.php ENDPATH**/ ?>