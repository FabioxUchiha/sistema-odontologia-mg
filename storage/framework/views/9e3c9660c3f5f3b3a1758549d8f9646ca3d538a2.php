<div class="table-responsive">
    <table class="table" id="insumos-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Fecha De Compra</th>
                <th>Cantidad</th>
                <th>Marca</th>
                <th>Fecha De Vencimiento</th>
                <th>Presentacion</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $insumos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $insumos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($insumos->nombre); ?></td>
                <td><?php echo e($insumos->fecha_de_compra->format('Y/m/d')); ?></td>
                <td><?php echo e($insumos->cantidad); ?></td>
                <td><?php echo e($insumos->marca); ?></td>
                <td><?php echo e($insumos->fecha_de_vencimiento->format('Y/m/d')); ?>

                            <?php if($insumos->fecha_de_vencimiento <= date('Y-m-d')): ?>
                                <span class="badge">
                                    vencido
                                </span>
                            <?php else: ?>
                                    <?php if((date('Y')+1) < $insumos->fecha_de_vencimiento->format('Y')): ?>
                                <span class="label label-success badge">
                                    vence
                                    <?php echo e($insumos->fecha_de_vencimiento->diffForHumans()); ?>

                                </span>
                                    <?php elseif((date('6')) > $insumos->fecha_de_vencimiento->format('m')): ?>
                                <span class="label label-danger badge">
                                    vence
                                    <?php echo e($insumos->fecha_de_vencimiento->diffForHumans()); ?>

                                </span>
                                    <?php elseif((date('6')) <= $insumos->fecha_de_vencimiento->format('m')): ?>
                                <span class="label label-warning badge">
                                    vence
                                    <?php echo e($insumos->fecha_de_vencimiento->diffForHumans()); ?>

                                </span>
                                    <?php endif; ?>

                            <?php endif; ?>
                </td>
                <td><?php echo e($insumos->presentacion); ?></td>
                <td>
                    <?php echo Form::open(['route' => ['insumos.destroy', $insumos->id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('ver insumos')): ?>
                        <a href="<?php echo e(route('insumos.show', [$insumos->id])); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('editar insumos')): ?>
                        <a href="<?php echo e(route('insumos.edit', [$insumos->id])); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('borrar insumos')): ?>
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
<?php /**PATH C:\laragon\www\sistema-odontologia-mg\resources\views/insumos/table.blade.php ENDPATH**/ ?>