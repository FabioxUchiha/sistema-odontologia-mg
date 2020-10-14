<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['ver notas', 'borrar notas', 'crear notas','editar notas'])): ?>
<li class="<?php echo e(Request::is('notas*') ? 'active' : ''); ?>">
    <a href="<?php echo e(route('notas.index')); ?>"><i class="fa fa-edit"></i><span>Notas</span></a>
</li>
<?php endif; ?>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['ver usuarios', 'borrar usuarios', 'crear usuarios','editar usuarios'])): ?>
<li class="<?php echo e(Request::is('users*') ? 'active' : ''); ?>">
    <a href="<?php echo e(route('users.index')); ?>"><i class="fa fa-edit"></i><span>Usuarios</span></a>
</li>
<?php endif; ?>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['ver roles', 'borrar roles', 'crear roles','editar roles'])): ?>
<li class="<?php echo e(Request::is('roles*') ? 'active' : ''); ?>">
    <a href="<?php echo e(route('roles.index')); ?>"><i class="fa fa-edit"></i><span>Roles</span></a>
</li>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\sistema-odontologia-mg\resources\views/layouts/menu.blade.php ENDPATH**/ ?>