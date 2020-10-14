<!-- Documento Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('documento', 'Documento:'); ?>

    <?php echo Form::number('documento', null, ['class' => 'form-control']); ?>

</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nombre', 'Nombre:'); ?>

    <input class="form-control"
    type="text-transform:uppercase;"
    onkeyup="javascript:this.value=this.value.toUpperCase();"
    type="text" name="nombre" required
    value="<?php echo e($notas->nombre ?? ''); ?>">
</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('telefono', 'Telefono:'); ?>

    <?php echo Form::number('telefono', null, ['class' => 'form-control']); ?>

</div>

<!-- Procedimiento Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('procedimiento', 'Procedimiento:'); ?>

    <select name="procedimiento" class="form-control">
        <option type="text" value="<?php echo e($notas->procedimiento ?? ''); ?>">
            <?php if($notas->procedimiento ?? ''): ?>
                <?php echo e($notas->procedimiento); ?>

            <?php else: ?>
                Seleccione...
            <?php endif; ?>
        </option>
        <?php $__currentLoopData = $desplegable_servicio_ingresos->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $procedimiento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option type="text" value="<?php echo e($procedimiento->nombre); ?>">
                <?php echo e($procedimiento->nombre); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>

<!-- Observaciones Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('observaciones', 'Observaciones:'); ?>

    <?php echo Form::textarea('observaciones', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Guardar', ['class' => 'btn btn-danger']); ?>

    <a href="<?php echo e(route('notas.index')); ?>" class="btn btn-default">Cancelar</a>
</div>
<?php /**PATH C:\laragon\www\sistema-odontologia-mg\resources\views/notas/fields.blade.php ENDPATH**/ ?>