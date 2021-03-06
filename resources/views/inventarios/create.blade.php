@extends('layouts.app')

@section('content')
@can('crear inventarios')
    <section class="content-header">
        <h1>
            Inventario
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body" style="background-image: url();">
                <div class="row">
                    {!! Form::open(['route' => 'inventarios.store']) !!}

                        @include('inventarios.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endcan
@endsection
