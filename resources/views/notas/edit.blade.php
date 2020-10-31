@extends('layouts.app')

@section('content')
@can('editar notas')
    <section class="content-header">
        <h1>
            Notas
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body" style="background-image: url();">
               <div class="row">
                   {!! Form::model($notas, ['route' => ['notas.update', $notas->id], 'method' => 'patch']) !!}

                        @include('notas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endcan
@endsection