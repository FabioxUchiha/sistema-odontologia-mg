<!-- Name Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('name', 'Name:'); ?>

    <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('email', 'Email:'); ?>

    <?php echo Form::email('email', null, ['class' => 'form-control']); ?>

</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('password', 'Password:'); ?>

    <?php echo Form::password('password', ['class' => 'form-control', 'minlength' => 5]); ?>

</div>

<!-- Role Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('role', 'Role:'); ?>

    <?php echo Form::select('role', $roleItems, isset($user) ? $user->roles()->pluck('name') : [], ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Guardar', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('users.index')); ?>" class="btn btn-default">Cancelar</a>
</div>
<?php /**PATH C:\xampp\htdocs\sistema-odontologia-mg\resources\views/users/fields.blade.php ENDPATH**/ ?>