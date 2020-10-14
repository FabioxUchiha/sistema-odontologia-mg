<!-- Nombre Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nombre', 'Nombre:'); ?>

    <select name="nombre" class="form-control">
        <option type="text" value="<?php echo e($inventario->nombre ?? ''); ?>">
            <?php if($inventario->nombre ?? ''): ?>
            <?php echo e($inventario->nombre); ?>

            <?php else: ?>
            Seleccione...
            <?php endif; ?>
        </option>
        <?php $__currentLoopData = $desplegable_nombre_inventario->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option type="text" value="<?php echo e($item->nombre); ?>">
                <?php echo e($item->nombre); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>

<!-- Categoria Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('categoria', 'Categoria:'); ?>

    <select name="categoria" class="form-control">
        <option type="text" value="<?php echo e($inventario->categoria ?? ''); ?>">
            <?php if($inventario->categoria ?? ''): ?>
            <?php echo e($inventario->categoria); ?>

            <?php else: ?>
            Seleccione...
            <?php endif; ?>
        </option>
        <?php $__currentLoopData = $desplegable_categoria_instrumental->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option type="text" value="<?php echo e($item->nombre); ?>">
                <?php echo e($item->nombre); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>

<!-- Marca Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('marca', 'Marca:'); ?>

    <select name="marca" class="form-control">
        <option type="text" value="<?php echo e($inventario->marca ?? ''); ?>">
            <?php if($inventario->marca ?? ''): ?>
            <?php echo e($inventario->marca); ?>

            <?php else: ?>
            Seleccione...
            <?php endif; ?>
        </option>
        <?php $__currentLoopData = $desplegable_marca_instrumental->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option type="text" value="<?php echo e($item->nombre); ?>">
                <?php echo e($item->nombre); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>

<!-- Cantidad Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('cantidad', 'Cantidad:'); ?>

    <?php echo Form::number('cantidad', null, ['class' => 'form-control']); ?>

</div>

<!-- Estado Instrumental Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('estado_instrumental', 'Estado Instrumental:'); ?>

    <?php echo Form::text('estado_instrumental', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Guardar', ['class' => 'btn btn-danger']); ?>

    <a href="<?php echo e(route('inventarios.index')); ?>" class="btn btn-default">Cancelar</a>
</div>
<?php /**PATH C:\laragon\www\sistema-odontologia-mg\resources\views/inventarios/fields.blade.php ENDPATH**/ ?>