<!-- Name Field -->
<div class="form-group">
    <?php echo Form::label('name', 'Name:'); ?>

    <p><?php echo e($role->name); ?></p>
</div>

<!-- Permissions Field -->
<div class="form-group">
    <?php echo Form::label('permissions', 'Permissions:'); ?>

    <p><?php echo e(implode(', ', $role->permissions->pluck('name')->toArray())); ?></p>
</div>

<!-- Creado el Field -->
<div class="form-group">
    <?php echo Form::label('created_at', 'Creado:'); ?>

    <p><?php echo e($role->created_at); ?></p>
</div>

<!-- Actualizado el Field -->
<div class="form-group">
    <?php echo Form::label('updated_at', 'Actualizado:'); ?>

    <p><?php echo e($role->updated_at); ?></p>
</div>

<?php /**PATH C:\laragon\www\sistema-odontologia-mg\resources\views/roles/show_fields.blade.php ENDPATH**/ ?>