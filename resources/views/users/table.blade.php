<div class="table-responsive">
    <table class="table" id="users-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Rol</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ implode(" ", $user->getRoleNames()->toArray()) }}</td>
                    <td>
                        {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            @can('ver usuarios')
                                <a href="{{ route('users.show', [$user->id]) }}" class='btn btn-default btn-xs'><i
                                class="glyphicon glyphicon-eye-open"></i></a>
                            @endcan
                            @can('editar usuarios')
                                <a href="{{ route('users.edit', [$user->id]) }}" class='btn btn-default btn-xs'><i
                                        class="glyphicon glyphicon-edit"></i></a>
                            @endcan
                            @can('borrar usuarios')
                                {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class'
                                => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Está seguro de eliminar el registro?')"]) !!}

                            @endcan
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
