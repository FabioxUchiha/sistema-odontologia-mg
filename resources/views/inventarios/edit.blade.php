@extends('layouts.app')

@section('content')
@can('editar_inventarios')
    <section class="content-header">
        <h1>
            Inventario
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/background1.jpg);">
               <div class="row">
                   {!! Form::model($inventario, ['route' => ['inventarios.update', $inventario->id], 'method' => 'patch']) !!}

                        @include('inventarios.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endcan
@endsection