<div class="table-responsive">
    <table class="table" id="desplegableMarcaInstrumentals-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $desplegableMarcaInstrumentals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $desplegableMarcaInstrumental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($desplegableMarcaInstrumental->nombre); ?></td>
                <td>
                    <?php echo Form::open(['route' => ['desplegableMarcaInstrumentals.destroy', $desplegableMarcaInstrumental->id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo e(route('desplegableMarcaInstrumentals.show', [$desplegableMarcaInstrumental->id])); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="<?php echo e(route('desplegableMarcaInstrumentals.edit', [$desplegableMarcaInstrumental->id])); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH C:\laragon\www\sistema-odontologia-mg\resources\views/desplegable_marca_instrumentals/table.blade.php ENDPATH**/ ?>