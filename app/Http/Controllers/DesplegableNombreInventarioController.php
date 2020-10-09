<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDesplegableNombreInventarioRequest;
use App\Http\Requests\UpdateDesplegableNombreInventarioRequest;
use App\Repositories\DesplegableNombreInventarioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class DesplegableNombreInventarioController extends AppBaseController
{
    /** @var  DesplegableNombreInventarioRepository */
    private $desplegableNombreInventarioRepository;

    public function __construct(DesplegableNombreInventarioRepository $desplegableNombreInventarioRepo)
    {
        $this->desplegableNombreInventarioRepository = $desplegableNombreInventarioRepo;
    }

    /**
     * Display a listing of the DesplegableNombreInventario.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $desplegableNombreInventarios = $this->desplegableNombreInventarioRepository->all();

        return view('desplegable_nombre_inventarios.index')
            ->with('desplegableNombreInventarios', $desplegableNombreInventarios);
    }

    /**
     * Show the form for creating a new DesplegableNombreInventario.
     *
     * @return Response
     */
    public function create()
    {
        return view('desplegable_nombre_inventarios.create');
    }

    /**
     * Store a newly created DesplegableNombreInventario in storage.
     *
     * @param CreateDesplegableNombreInventarioRequest $request
     *
     * @return Response
     */
    public function store(CreateDesplegableNombreInventarioRequest $request)
    {
        $input = $request->all();

        $desplegableNombreInventario = $this->desplegableNombreInventarioRepository->create($input);

        Flash::success('Desplegable Nombre Inventario Guardado exitosamente.');

        return redirect(route('desplegableNombreInventarios.index'));
    }

    /**
     * Display the specified DesplegableNombreInventario.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $desplegableNombreInventario = $this->desplegableNombreInventarioRepository->find($id);

        if (empty($desplegableNombreInventario)) {
            Flash::error('Desplegable Nombre Inventario not found');

            return redirect(route('desplegableNombreInventarios.index'));
        }

        return view('desplegable_nombre_inventarios.show')->with('desplegableNombreInventario', $desplegableNombreInventario);
    }

    /**
     * Show the form for editing the specified DesplegableNombreInventario.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $desplegableNombreInventario = $this->desplegableNombreInventarioRepository->find($id);

        if (empty($desplegableNombreInventario)) {
            Flash::error('Desplegable Nombre Inventario not found');

            return redirect(route('desplegableNombreInventarios.index'));
        }

        return view('desplegable_nombre_inventarios.edit')->with('desplegableNombreInventario', $desplegableNombreInventario);
    }

    /**
     * Update the specified DesplegableNombreInventario in storage.
     *
     * @param int $id
     * @param UpdateDesplegableNombreInventarioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDesplegableNombreInventarioRequest $request)
    {
        $desplegableNombreInventario = $this->desplegableNombreInventarioRepository->find($id);

        if (empty($desplegableNombreInventario)) {
            Flash::error('Desplegable Nombre Inventario not found');

            return redirect(route('desplegableNombreInventarios.index'));
        }

        $desplegableNombreInventario = $this->desplegableNombreInventarioRepository->update($request->all(), $id);

        Flash::success('Desplegable Nombre Inventario actualizado con éxito.');

        return redirect(route('desplegableNombreInventarios.index'));
    }

    /**
     * Remove the specified DesplegableNombreInventario from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $desplegableNombreInventario = $this->desplegableNombreInventarioRepository->find($id);

        if (empty($desplegableNombreInventario)) {
            Flash::error('Desplegable Nombre Inventario not found');

            return redirect(route('desplegableNombreInventarios.index'));
        }

        $this->desplegableNombreInventarioRepository->delete($id);

        Flash::success('Desplegable Nombre Inventario borrado exitosamente.');

        return redirect(route('desplegableNombreInventarios.index'));
    }
}
