<?php

use App\Exports\IngresosExport;
use App\Exports\InsumosExport;
use App\Exports\InventariosExport;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('home', 'HomeController@index')->middleware('verified');

Route::group(['middleware' => ['permission:ver notas|editar notas|borrar notas|crear notas']], function () {
    Route::resource('notas', 'notasController');
});

Route::group(['middleware' => ['permission:ver usuarios|editar usuarios|borrar usuarios|crear usuarios']], function () {
    Route::resource('users', 'UserController');
});

Route::group(['middleware' => ['permission:ver roles|editar roles|borrar roles|crear roles']], function () {
    Route::resource('roles', 'RoleController');
});

Route::group(['middleware' => ['permission:ver inventarios|editar inventarios|borrar inventarios|crear inventarios']], function () {
    Route::resource('inventarios', 'InventarioController');
});

Route::get('/exportInventarios', function(InventariosExport $inventariosExport){
	return $inventariosExport->download('inventarios.xlsx');
})->name('inventarios.export');

Route::get('/exportIngresos', function(IngresosExport $ingresosExport){
	return $ingresosExport->download('ingresos y egresos.xlsx');
})->name('ingresos.export');

Route::get('/exportInsumos', function(InsumosExport $insumosExport){
	return $insumosExport->download('insumos.xlsx');
})->name('insumos.export');

Route::group(['middleware' => ['permission:ver ingresos|editar ingresos|borrar ingresos|crear ingresos']], function () {
    Route::resource('ingresos', 'IngresosController');
});

Route::group(['middleware' => ['permission:ver insumos|editar insumos|borrar insumos|crear insumos']], function () {
    Route::resource('insumos', 'insumosController');
});

Route::group(['middleware' => ['permission:ver desplegables|editar desplegables|borrar desplegables|crear desplegables']], function () {
    Route::resource('desplegableNombreInventarios', 'DesplegableNombreInventarioController');
    Route::resource('desplegableServicioIngresos', 'DesplegableServicioIngresoController');
    Route::resource('desplegableCategoriaInstrumentals', 'DesplegableCategoriaInstrumentalController');
    Route::resource('desplegableMarcaInstrumentals', 'DesplegableMarcaInstrumentalController');
    Route::resource('desplegableNombreInsumos', 'DesplegableNombreInsumosController');
    Route::resource('desplegableMarcaInsumos', 'DesplegableMarcaInsumosController');
    Route::resource('desplegablePresentacionInsumos', 'DesplegablePresentacionInsumosController');
});

Route::get('dashboard', 'DashboardController@index')->name('dashboard.index');



