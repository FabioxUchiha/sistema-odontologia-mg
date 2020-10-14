<div class="table-responsive">
    <table class="table" id="desplegableServicioIngresos-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $desplegableServicioIngresos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $desplegableServicioIngreso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($desplegableServicioIngreso->nombre); ?></td>
                <td>
                    <?php echo Form::open(['route' => ['desplegableServicioIngresos.destroy', $desplegableServicioIngreso->id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo e(route('desplegableServicioIngresos.show', [$desplegableServicioIngreso->id])); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="<?php echo e(route('desplegableServicioIngresos.edit', [$desplegableServicioIngreso->id])); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Estas seguro?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH C:\laragon\www\sistema-odontologia-mg\resources\views/desplegable_servicio_ingresos/table.blade.php ENDPATH**/ ?>