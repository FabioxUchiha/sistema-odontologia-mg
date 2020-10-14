<div class="table-responsive">
    <table class="table" id="inventarios-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Categoria</th>
                <th>Marca</th>
                <th>Cantidad</th>
                <th>Estado Instrumental</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $inventarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inventario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($inventario->nombre); ?></td>
                <td><?php echo e($inventario->categoria); ?></td>
                <td><?php echo e($inventario->marca); ?></td>
                <td><?php echo e($inventario->cantidad); ?></td>
                <td><?php echo e($inventario->estado_instrumental); ?></td>
                <td>
                    <?php echo Form::open(['route' => ['inventarios.destroy', $inventario->id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('ver inventarios')): ?>
                        <a href="<?php echo e(route('inventarios.show', [$inventario->id])); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('editar inventarios')): ?>
                        <a href="<?php echo e(route('inventarios.edit', [$inventario->id])); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('borrar inventarios')): ?>
                        <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estas seguro?')"]); ?>

                        <?php endif; ?>
                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH C:\laragon\www\sistema-odontologia-mg\resources\views/inventarios/table.blade.php ENDPATH**/ ?>