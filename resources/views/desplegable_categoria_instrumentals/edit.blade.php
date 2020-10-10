@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Desplegable Categoria Instrumental
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($desplegableCategoriaInstrumental, ['route' => ['desplegableCategoriaInstrumentals.update', $desplegableCategoriaInstrumental->id], 'method' => 'patch']) !!}

                        @include('desplegable_categoria_instrumentals.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection