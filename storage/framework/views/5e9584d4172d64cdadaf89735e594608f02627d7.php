<div class="table-responsive">
    <table class="table" id="roles-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Permissions</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($role->name); ?></td>
                    <td><?php echo e(implode(", ", $role->permissions->pluck('name')->toArray())); ?></td>
                    <td>
                        <?php echo Form::open(['route' => ['roles.destroy', $role->id], 'method' => 'delete']); ?>

                        <div class='btn-group'>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('ver roles')): ?>
                            <a href="<?php echo e(route('roles.show', [$role->id])); ?>" class='btn btn-default btn-xs'><i
                                class="glyphicon glyphicon-eye-open"></i></a>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('editar roles')): ?>
                            <a href="<?php echo e(route('roles.edit', [$role->id])); ?>" class='btn btn-default btn-xs'><i
                                class="glyphicon glyphicon-edit"></i></a>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('borrar roles')): ?>
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
<?php /**PATH C:\xampp\htdocs\sistema-odontologia-mg\resources\views/roles/table.blade.php ENDPATH**/ ?>