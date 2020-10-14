<!-- Nombre Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nombre', 'Nombre:'); ?>

    <input class="form-control"
    type="text-transform:uppercase;"
    onkeyup="javascript:this.value=this.value.toUpperCase();"
    placeholder="Nombre..." type="text" name="nombre" required
    value="<?php echo e($desplegableCategoriaInstrumental->nombre ?? ''); ?>">
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Guardar', ['class' => 'btn btn-danger']); ?>

    <a href="<?php echo e(route('desplegableCategoriaInstrumentals.index')); ?>" class="btn btn-default">Cancelar</a>
</div>
<?php /**PATH C:\laragon\www\sistema-odontologia-mg\resources\views/desplegable_categoria_instrumentals/fields.blade.php ENDPATH**/ ?>