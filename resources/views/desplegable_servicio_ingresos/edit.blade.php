@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Desplegable Servicio Ingreso
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($desplegableServicioIngreso, ['route' => ['desplegableServicioIngresos.update', $desplegableServicioIngreso->id], 'method' => 'patch']) !!}

                        @include('desplegable_servicio_ingresos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection