<div class="table-responsive">
    <table class="table" id="notas-table">
        <thead>
            <tr>
                <th>Documento</th>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Procedimiento</th>
                <th>Observaciones</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $notas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($notas->documento); ?></td>
                    <td><?php echo e($notas->nombre); ?></td>
                    <td><?php echo e($notas->telefono); ?></td>
                    <td><?php echo e($notas->procedimiento); ?></td>
                    <td><?php echo e($notas->observaciones); ?></td>
                    <td>
                        <?php echo Form::open(['route' => ['notas.destroy', $notas->id], 'method' => 'delete']); ?>

                        <div class='btn-group'>

                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('ver notas')): ?>
                                <a href="<?php echo e(route('notas.show', [$notas->id])); ?>" class='btn btn-default btn-xs'><i
                                        class="glyphicon glyphicon-eye-open"></i></a>
                            <?php endif; ?>

                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('editar notas')): ?>
                                <a href="<?php echo e(route('notas.edit', [$notas->id])); ?>" class='btn btn-default btn-xs'><i
                                        class="glyphicon glyphicon-edit"></i></a>
                            <?php endif; ?>

                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('borrar notas')): ?>
                                <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class'
                                => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                            <?php endif; ?>
                        </div>
                        <?php echo Form::close(); ?>

                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH C:\xampp\htdocs\sistema-odontologia-mg\resources\views/notas/table.blade.php ENDPATH**/ ?>