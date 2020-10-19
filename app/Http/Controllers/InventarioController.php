<?php

namespace App\Http\Controllers;

use App\Exports\InventariosExport;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateInventarioRequest;
use App\Http\Requests\UpdateInventarioRequest;
use App\Models\DesplegableCategoriaInstrumental;
use App\Models\DesplegableMarcaInstrumental;
use App\Models\DesplegableNombreInventario;
use App\Models\Inventario;
use App\Repositories\InventarioRepository;
use Flash;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Response;

class InventarioController extends AppBaseController
{
    /** @var  InventarioRepository */
    private $inventarioRepository;

    public function __construct(InventarioRepository $inventarioRepo)
    {
        $this->inventarioRepository = $inventarioRepo;
    }

    /**
     * Display a listing of the Inventario.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $nombre = $request->get('buscarpornombre');
        $categoria = $request->get('buscarporcategoria');
        $marca = $request->get('buscarpormarca');
        $inventarios = Inventario::nombre($nombre)->categoria($categoria)->marca($marca)->paginate(10);

        return view('inventarios.index', [
            'inventarios' => $inventarios
        ]);

    }

    /**
     * Show the form for creating a new Inventario.
     *
     * @return Response
     */
    public function create()
    {
        $desplegable_nombre_inventario = DesplegableNombreInventario::all();
        $desplegable_categoria_instrumental = DesplegableCategoriaInstrumental::all();
        $desplegable_marca_instrumental = DesplegableMarcaInstrumental::all();

        return view('inventarios.create', [
            'desplegable_nombre_inventario' => $desplegable_nombre_inventario,
            'desplegable_categoria_instrumental' => $desplegable_categoria_instrumental,
            'desplegable_marca_instrumental' => $desplegable_marca_instrumental
        ]);
    }

    /**
     * Store a newly created Inventario in storage.
     *
     * @param CreateInventarioRequest $request
     *
     * @return Response
     */
    public function store(CreateInventarioRequest $request)
    {
        $input = $request->all();

        $inventario = $this->inventarioRepository->create($input);

        Flash::success('Inventario Guardado exitosamente.');

        return redirect(route('inventarios.index'));
    }

    /**
     * Display the specified Inventario.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $inventario = $this->inventarioRepository->find($id);

        if (empty($inventario)) {
            Flash::error('Inventario not found');

            return redirect(route('inventarios.index'));
        }

        return view('inventarios.show')->with('inventario', $inventario);
    }

    /**
     * Show the form for editing the specified Inventario.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $inventario = $this->inventarioRepository->find($id);
        $desplegable_nombre_inventario = DesplegableNombreInventario::all();
        $desplegable_categoria_instrumental = DesplegableCategoriaInstrumental::all();
        $desplegable_marca_instrumental = DesplegableMarcaInstrumental::all();

        if (empty($inventario)) {
            Flash::error('Inventario not found');

            return redirect(route('inventarios.index'));
        }

        return view('inventarios.edit', [
            'inventario' => $inventario,
            'desplegable_nombre_inventario' => $desplegable_nombre_inventario,
            'desplegable_categoria_instrumental' => $desplegable_categoria_instrumental,
            'desplegable_marca_instrumental' => $desplegable_marca_instrumental
        ]);
    }

    /**
     * Update the specified Inventario in storage.
     *
     * @param int $id
     * @param UpdateInventarioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInventarioRequest $request)
    {
        $inventario = $this->inventarioRepository->find($id);

        if (empty($inventario)) {
            Flash::error('Inventario not found');

            return redirect(route('inventarios.index'));
        }

        $inventario = $this->inventarioRepository->update($request->all(), $id);

        Flash::success('Inventario actualizado con éxito.');

        return redirect(route('inventarios.index'));
    }

    /**
     * Remove the specified Inventario from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $inventario = $this->inventarioRepository->find($id);

        if (empty($inventario)) {
            Flash::error('Inventario not found');

            return redirect(route('inventarios.index'));
        }

        $this->inventarioRepository->delete($id);

        Flash::success('Inventario borrado exitosamente.');

        return redirect(route('inventarios.index'));
    }
}
