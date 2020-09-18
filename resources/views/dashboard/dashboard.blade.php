@extends('layouts.app')
@section('content')
<style>
#suma{display:none;}
</style>
<div id="suma">
@foreach($ingresos->all() as $ingreso)
	{{ $total += $ingreso->precio }}
@endforeach
</div>
<br>
<div class="container">
	<button type="button" class="btn btn-primary ">
        Ingresos del mes <span class="badge badge-light">{{ $total }}</span>
    </button>
</div>
@endsection
