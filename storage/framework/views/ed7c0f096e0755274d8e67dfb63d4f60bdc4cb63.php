
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['ver usuarios', 'borrar usuarios', 'crear usuarios','editar usuarios'])): ?>
<li class="<?php echo e(Request::is('users*') ? 'active' : ''); ?>">
    <a href="<?php echo e(route('users.index')); ?>"><i class="fa fa-user-circle"></i><span>Usuarios</span></a>
</li>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['ver roles', 'borrar roles', 'crear roles','editar roles'])): ?>
<li class="<?php echo e(Request::is('roles*') ? 'active' : ''); ?>">
    <a href="<?php echo e(route('roles.index')); ?>"><i class="fa fa-address-card"></i><span>Roles</span></a>
</li>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['ver inventarios', 'borrar inventarios', 'crear inventarios','editar inventarios'])): ?>
<li class="<?php echo e(Request::is('inventarios*') ? 'active' : ''); ?>">
    <a href="<?php echo e(route('inventarios.index')); ?>"><i class="fa fa-cubes"></i><span>Inventarios</span></a>
</li>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['ver ingresos', 'borrar ingresos', 'crear ingresos','editar ingresos'])): ?>
<li class="<?php echo e(Request::is('ingresos*') ? 'active' : ''); ?>">
    <a href="<?php echo e(route('ingresos.index')); ?>"><i class="fa fa-money"></i><span>Ingresos y Egresos</span></a>
</li>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['ver insumos', 'borrar insumos', 'crear insumos','editar insumos'])): ?>
<li class="<?php echo e(Request::is('insumos*') ? 'active' : ''); ?>">
    <a href="<?php echo e(route('insumos.index')); ?>"><i class="fa fa-archive"></i><span>Insumos</span></a>
</li>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['ver notas', 'borrar notas', 'crear notas','editar notas'])): ?>
<li class="<?php echo e(Request::is('notas*') ? 'active' : ''); ?>">
    <a href="<?php echo e(route('notas.index')); ?>"><i class="fa fa-clipboard"></i><span>Notas</span></a>
</li>
<?php endif; ?>


<li>
    <a href="<?php echo e(route('dashboard.index')); ?>"><i class="fa fa-tachometer"></i><span>Dashboard</span></a>
</li>


    
<li>
    <a class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        <i class="glyphicon glyphicon-th-list"></i>
          <span>
            Desplegables
            </span>
        <span class="caret"></span>
    </a>
<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">

    <li class="<?php echo e(Request::is('desplegableNombreInventarios*') ? 'active' : ''); ?>">
        <a class="text-black"
        href="<?php echo e(route('desplegableNombreInventarios.index')); ?>">
        <span>Nombre Instrumental</span></a>
    </li>


    <li class="<?php echo e(Request::is('desplegableCategoriaInstrumentals*') ? 'active' : ''); ?>">
        <a class="text-black"
        href="<?php echo e(route('desplegableCategoriaInstrumentals.index')); ?>">
        <span>Categoria Instrumental</span></a>
    </li>

    <li class="<?php echo e(Request::is('desplegableMarcaInstrumentals*') ? 'active' : ''); ?>">
        <a class="text-black"
        href="<?php echo e(route('desplegableMarcaInstrumentals.index')); ?>">
        <span>Marca Instrumental</span></a>
    </li>
    <li class="<?php echo e(Request::is('desplegableServicioIngresos*') ? 'active' : ''); ?>">
        <a class="text-black"
        href="<?php echo e(route('desplegableServicioIngresos.index')); ?>">
        <span>Nombre Servicios</span></a>
    </li>
</ul>
    

</li>






<?php /**PATH C:\laragon\www\sistema-odontologia-mg\resources\views/layouts/menu.blade.php ENDPATH**/ ?>