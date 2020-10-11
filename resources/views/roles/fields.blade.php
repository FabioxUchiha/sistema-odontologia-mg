<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nombre:') !!}
    <input class="form-control"
    type="text-transform:uppercase;"
    onkeyup="javascript:this.value=this.value.toUpperCase();"
    placeholder="Nombre..." type="text" name="name" required
    value="{{ $role->name ?? '' }}">
</div>

<!-- Permissions Field -->
<div class="form-group col-sm-6">
    {!! Form::label('permissions', 'Permisos:') !!}
    {!! Form::select('permissions', $permissionItems, null, ['multiple' => 'multiple', 'class' => 'form-control',
    'name' => 'permissions[]']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-info']) !!}
    <a href="{{ route('roles.index') }}" class="btn btn-default">Cancelar</a>
</div>
