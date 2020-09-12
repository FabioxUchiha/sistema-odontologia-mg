@extends('layouts.app')

@section('content')
@can('crear_roles')
    <section class="content-header">
        <h1>
            Role
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/background1.jpg);">
                <div class="row">
                    {!! Form::open(['route' => 'roles.store']) !!}

                        @include('roles.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endcan
@endsection
