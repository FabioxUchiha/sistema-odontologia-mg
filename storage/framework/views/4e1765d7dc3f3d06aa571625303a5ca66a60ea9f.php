<!-- Name Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('name', 'Nombre:'); ?>

    <input class="form-control"
    type="text-transform:uppercase;"
    onkeyup="javascript:this.value=this.value.toUpperCase();"
    type="text" name="name" required
    value="<?php echo e($user->name ?? ''); ?>">
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('email', 'Email:'); ?>

    <?php echo Form::email('email', null, ['class' => 'form-control']); ?>

</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('password', 'Contraseña:'); ?>

    <?php echo Form::password('password', ['class' => 'form-control', 'minlength' => 5]); ?>

</div>

<!-- Role Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('role', 'Rol:'); ?>

    <?php echo Form::select('role', $roleItems, isset($user) ? $user->roles()->pluck('name') : [], ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Guardar', ['class' => 'btn btn-danger']); ?>

    <a href="<?php echo e(route('users.index')); ?>" class="btn btn-default">Cancelar</a>
</div>
<?php /**PATH C:\laragon\www\sistema-odontologia-mg\resources\views/users/fields.blade.php ENDPATH**/ ?>