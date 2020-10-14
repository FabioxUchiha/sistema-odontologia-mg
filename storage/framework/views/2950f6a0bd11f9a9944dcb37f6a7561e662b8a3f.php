<div class="table-responsive">
    <table class="table" id="desplegableInventarios-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Categoria</th>
        <th>Marca</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $desplegableInventarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $desplegableInventarios): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($desplegableInventarios->nombre); ?></td>
            <td><?php echo e($desplegableInventarios->categoria); ?></td>
            <td><?php echo e($desplegableInventarios->marca); ?></td>
                <td>
                    <?php echo Form::open(['route' => ['desplegableInventarios.destroy', $desplegableInventarios->id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo e(route('desplegableInventarios.show', [$desplegableInventarios->id])); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="<?php echo e(route('desplegableInventarios.edit', [$desplegableInventarios->id])); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH C:\laragon\www\sistema-odontologia-mg\resources\views/desplegable_inventarios/table.blade.php ENDPATH**/ ?>