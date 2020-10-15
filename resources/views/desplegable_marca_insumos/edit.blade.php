@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Desplegable Marca Insumos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($desplegableMarcaInsumos, ['route' => ['desplegableMarcaInsumos.update', $desplegableMarcaInsumos->id], 'method' => 'patch']) !!}

                        @include('desplegable_marca_insumos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection