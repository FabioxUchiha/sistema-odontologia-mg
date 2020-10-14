<div class="table-responsive">
    <table class="table" id="ingresos-table">
        <thead>
            <tr>
                <th>Fecha</th>
        <th>Servicio</th>
        <th>Detalle</th>
        <th>Tipo</th>
        <th>Precio</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $ingresos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ingresos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($ingresos->fecha->format('Y/m/d')); ?></td>
                <td><?php echo e($ingresos->servicio); ?></td>
                <td><?php echo e($ingresos->detalle); ?></td>
                <td><?php echo e($ingresos->tipo); ?></td>
                <td><?php echo e($ingresos->precio); ?></td>
                <td>
                    <?php echo Form::open(['route' => ['ingresos.destroy', $ingresos->id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                         <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('ver inventarios')): ?>
                        <a href="<?php echo e(route('ingresos.show', [$ingresos->id])); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                         <?php endif; ?>
                         <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('editar inventarios')): ?>
                        <a href="<?php echo e(route('ingresos.edit', [$ingresos->id])); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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
<?php /**PATH C:\laragon\www\sistema-odontologia-mg\resources\views/ingresos/table.blade.php ENDPATH**/ ?>