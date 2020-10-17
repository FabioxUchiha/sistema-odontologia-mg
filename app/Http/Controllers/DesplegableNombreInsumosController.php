<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateDesplegableNombreInsumosRequest;
use App\Http\Requests\UpdateDesplegableNombreInsumosRequest;
use App\Models\DesplegableNombreInsumos;
use App\Repositories\DesplegableNombreInsumosRepository;
use Flash;
use Illuminate\Http\Request;
use Response;

class DesplegableNombreInsumosController extends AppBaseController
{
    /** @var  DesplegableNombreInsumosRepository */
    private $desplegableNombreInsumosRepository;

    public function __construct(DesplegableNombreInsumosRepository $desplegableNombreInsumosRepo)
    {
        $this->desplegableNombreInsumosRepository = $desplegableNombreInsumosRepo;
    }

    /**
     * Display a listing of the DesplegableNombreInsumos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $nombre = $request->get('buscarpor');
        $desplegableNombreInsumos = DesplegableNombreInsumos::where('nombre','like',"%$nombre%")->paginate(10);

        return view('desplegable_nombre_insumos.index')
            ->with('desplegableNombreInsumos', $desplegableNombreInsumos);
    }

    /**
     * Show the form for creating a new DesplegableNombreInsumos.
     *
     * @return Response
     */
    public function create()
    {
        return view('desplegable_nombre_insumos.create');
    }

    /**
     * Store a newly created DesplegableNombreInsumos in storage.
     *
     * @param CreateDesplegableNombreInsumosRequest $request
     *
     * @return Response
     */
    public function store(CreateDesplegableNombreInsumosRequest $request)
    {
        $input = $request->all();

        $desplegableNombreInsumos = $this->desplegableNombreInsumosRepository->create($input);

        Flash::success('Desplegable Nombre Insumos Guardado exitosamente.');

        return redirect(route('desplegableNombreInsumos.index'));
    }

    /**
     * Display the specified DesplegableNombreInsumos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $desplegableNombreInsumos = $this->desplegableNombreInsumosRepository->find($id);

        if (empty($desplegableNombreInsumos)) {
            Flash::error('Desplegable Nombre Insumos not found');

            return redirect(route('desplegableNombreInsumos.index'));
        }

        return view('desplegable_nombre_insumos.show')->with('desplegableNombreInsumos', $desplegableNombreInsumos);
    }

    /**
     * Show the form for editing the specified DesplegableNombreInsumos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $desplegableNombreInsumos = $this->desplegableNombreInsumosRepository->find($id);

        if (empty($desplegableNombreInsumos)) {
            Flash::error('Desplegable Nombre Insumos not found');

            return redirect(route('desplegableNombreInsumos.index'));
        }

        return view('desplegable_nombre_insumos.edit')->with('desplegableNombreInsumos', $desplegableNombreInsumos);
    }

    /**
     * Update the specified DesplegableNombreInsumos in storage.
     *
     * @param int $id
     * @param UpdateDesplegableNombreInsumosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDesplegableNombreInsumosRequest $request)
    {
        $desplegableNombreInsumos = $this->desplegableNombreInsumosRepository->find($id);

        if (empty($desplegableNombreInsumos)) {
            Flash::error('Desplegable Nombre Insumos not found');

            return redirect(route('desplegableNombreInsumos.index'));
        }

        $desplegableNombreInsumos = $this->desplegableNombreInsumosRepository->update($request->all(), $id);

        Flash::success('Desplegable Nombre Insumos Actualizado exitosamente.');

        return redirect(route('desplegableNombreInsumos.index'));
    }

    /**
     * Remove the specified DesplegableNombreInsumos from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $desplegableNombreInsumos = $this->desplegableNombreInsumosRepository->find($id);

        if (empty($desplegableNombreInsumos)) {
            Flash::error('Desplegable Nombre Insumos not found');

            return redirect(route('desplegableNombreInsumos.index'));
        }

        $this->desplegableNombreInsumosRepository->delete($id);

        Flash::success('Desplegable Nombre Insumos Borrado exitosamente.');

        return redirect(route('desplegableNombreInsumos.index'));
    }
}
