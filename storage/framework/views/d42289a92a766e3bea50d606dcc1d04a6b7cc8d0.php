<div class="table-responsive">
    <table class="table" id="desplegableNombreIntrumentals-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $desplegableNombreIntrumentals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $desplegableNombreIntrumental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($desplegableNombreIntrumental->nombre); ?></td>
                <td>
                    <?php echo Form::open(['route' => ['desplegableNombreIntrumentals.destroy', $desplegableNombreIntrumental->id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo e(route('desplegableNombreIntrumentals.show', [$desplegableNombreIntrumental->id])); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="<?php echo e(route('desplegableNombreIntrumentals.edit', [$desplegableNombreIntrumental->id])); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH C:\laragon\www\sistema-odontologia-mg\resources\views/desplegable_nombre_intrumentals/table.blade.php ENDPATH**/ ?>