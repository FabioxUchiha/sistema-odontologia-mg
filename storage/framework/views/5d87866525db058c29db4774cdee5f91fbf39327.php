<!-- Nombre Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nombre', 'Nombre:'); ?>

    <?php echo Form::text('nombre', null, ['class' => 'form-control']); ?>

</div>

<!-- Categoria Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('categoria', 'Categoria:'); ?>

    <?php echo Form::text('categoria', null, ['class' => 'form-control']); ?>

</div>

<!-- Marca Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('marca', 'Marca:'); ?>

    <?php echo Form::text('marca', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Guardar', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('desplegableInventarios.index')); ?>" class="btn btn-default">Cancelar</a>
</div>
<?php /**PATH C:\laragon\www\sistema-odontologia-mg\resources\views/desplegable_inventarios/fields.blade.php ENDPATH**/ ?>