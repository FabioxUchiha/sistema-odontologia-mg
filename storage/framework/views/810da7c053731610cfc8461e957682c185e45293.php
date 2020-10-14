<!-- Fecha Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('fecha', 'Fecha:'); ?>

    <?php echo Form::text('fecha', null, ['class' => 'form-control','id'=>'fecha']); ?>

</div>

<?php $__env->startPush('scripts'); ?>
    <script type="text/javascript">
        $('#fecha').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        })
    </script>
<?php $__env->stopPush(); ?>

<!-- Servicio Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('servicio', 'Servicio:'); ?>

    <select name="servicio" class="form-control">
        <option type="text" value="<?php echo e($ingresos->servicio ?? ''); ?>">
            <?php if($ingresos->servicio ?? ''): ?>
                <?php echo e($ingresos->servicio); ?>

            <?php else: ?>
                Seleccione...
            <?php endif; ?>
        </option>
        <?php $__currentLoopData = $desplegable_servicio_ingresos->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $servicio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option type="text" value="<?php echo e($servicio->nombre); ?>">
                <?php echo e($servicio->nombre); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>


<!-- Tipo Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('tipo', 'Tipo:'); ?>

    <select name="tipo" class="form-control">
        <option type="text" value="<?php echo e($ingresos->tipo ?? ''); ?>">
            <?php if($ingresos->tipo ?? ''): ?>
            <?php echo e($ingresos->tipo); ?>

            <?php else: ?>
            Seleccione...
            <?php endif; ?>
        </option>
        <option type="text" value="Ingreso">
            Ingreso
        </option>
        <option value="Egreso">
            Egreso
        </option>
    </select>
</div>

<!-- Precio Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('precio', 'Precio:'); ?>

    <?php echo Form::number('precio', null, ['class' => 'form-control']); ?>

</div>

<!-- Detalle Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('detalle', 'Detalle:'); ?>

    <?php echo Form::textarea('detalle', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Guardar', ['class' => 'btn btn-danger']); ?>

    <a href="<?php echo e(route('ingresos.index')); ?>" class="btn btn-default">Cancelar</a>
</div>
<?php /**PATH C:\laragon\www\sistema-odontologia-mg\resources\views/ingresos/fields.blade.php ENDPATH**/ ?>