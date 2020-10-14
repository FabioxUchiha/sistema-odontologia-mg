<!-- Name Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('name', 'Nombre:'); ?>

    <input class="form-control"
    type="text-transform:uppercase;"
    onkeyup="javascript:this.value=this.value.toUpperCase();"
    placeholder="Nombre..." type="text" name="name" required
    value="<?php echo e($role->name ?? ''); ?>">
</div>

<!-- Permissions Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('permissions', 'Permisos:'); ?>

    <?php echo Form::select('permissions', $permissionItems, null, ['multiple' => 'multiple', 'class' => 'form-control',
    'name' => 'permissions[]']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Guardar', ['class' => 'btn btn-danger']); ?>

    <a href="<?php echo e(route('roles.index')); ?>" class="btn btn-default">Cancelar</a>
</div>
<?php /**PATH C:\laragon\www\sistema-odontologia-mg\resources\views/roles/fields.blade.php ENDPATH**/ ?>