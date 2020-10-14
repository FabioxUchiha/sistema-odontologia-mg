<!-- Name Field -->
<div class="form-group">
    <?php echo Form::label('name', 'Name:'); ?>

    <p><?php echo e($user->name); ?></p>
</div>

<!-- Email Field -->
<div class="form-group">
    <?php echo Form::label('email', 'Email:'); ?>

    <p><?php echo e($user->email); ?></p>
</div>

<!-- Role Field -->
<div class="form-group">
    <?php echo Form::label('role', 'Role:'); ?>

    <p><?php echo e(implode(" ", $user->getRoleNames()->toArray())); ?></p>
</div>

<!-- Creado el Field -->
<div class="form-group">
    <?php echo Form::label('created_at', 'Creado:'); ?>

    <p><?php echo e($user->created_at); ?></p>
</div>

<!-- Actualizado el Field -->
<div class="form-group">
    <?php echo Form::label('updated_at', 'Actualizado:'); ?>

    <p><?php echo e($user->updated_at); ?></p>
</div>

<?php /**PATH C:\xampp\htdocs\sistema-odontologia-mg\resources\views/users/show_fields.blade.php ENDPATH**/ ?>