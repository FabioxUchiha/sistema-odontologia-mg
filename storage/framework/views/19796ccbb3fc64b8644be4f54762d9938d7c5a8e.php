<div class="table-responsive">
    <table class="table" id="users-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($user->name); ?></td>
                    <td><?php echo e($user->email); ?></td>
                    <td><?php echo e(implode(" ", $user->getRoleNames()->toArray())); ?></td>
                    <td>
                        <?php echo Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']); ?>

                        <div class='btn-group'>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('ver usuarios')): ?>
                                <a href="<?php echo e(route('users.show', [$user->id])); ?>" class='btn btn-default btn-xs'><i
                                class="glyphicon glyphicon-eye-open"></i></a>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('editar usuarios')): ?>
                                <a href="<?php echo e(route('users.edit', [$user->id])); ?>" class='btn btn-default btn-xs'><i
                                        class="glyphicon glyphicon-edit"></i></a>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('borrar usuarios')): ?>
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
<?php /**PATH C:\xampp\htdocs\sistema-odontologia-mg\resources\views/users/table.blade.php ENDPATH**/ ?>