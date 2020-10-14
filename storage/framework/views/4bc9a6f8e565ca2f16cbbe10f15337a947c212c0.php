<!-- Name Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('name', 'Name:'); ?>

    <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

</div>

<!-- Permissions Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('permissions', 'Permissions:'); ?>

    <?php echo Form::select('permissions', $permissionItems, null, ['multiple' => 'multiple', 'class' => 'form-control',
    'name' => 'permissions[]']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Guardar', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('roles.index')); ?>" class="btn btn-default">Cancelar</a>
</div>
<?php /**PATH C:\xampp\htdocs\sistema-odontologia-mg\resources\views/roles/fields.blade.php ENDPATH**/ ?>