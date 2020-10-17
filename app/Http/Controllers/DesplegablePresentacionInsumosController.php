<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateDesplegablePresentacionInsumosRequest;
use App\Http\Requests\UpdateDesplegablePresentacionInsumosRequest;
use App\Models\DesplegablePresentacionInsumos;
use App\Repositories\DesplegablePresentacionInsumosRepository;
use Flash;
use Illuminate\Http\Request;
use Response;

class DesplegablePresentacionInsumosController extends AppBaseController
{
    /** @var  DesplegablePresentacionInsumosRepository */
    private $desplegablePresentacionInsumosRepository;

    public function __construct(DesplegablePresentacionInsumosRepository $desplegablePresentacionInsumosRepo)
    {
        $this->desplegablePresentacionInsumosRepository = $desplegablePresentacionInsumosRepo;
    }

    /**
     * Display a listing of the DesplegablePresentacionInsumos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $nombre = $request->get('buscarpor');
        $desplegablePresentacionInsumos = DesplegablePresentacionInsumos::where('nombre','like',"%$nombre%")->paginate(10);

        return view('desplegable_presentacion_insumos.index')
            ->with('desplegablePresentacionInsumos', $desplegablePresentacionInsumos);
    }

    /**
     * Show the form for creating a new DesplegablePresentacionInsumos.
     *
     * @return Response
     */
    public function create()
    {
        return view('desplegable_presentacion_insumos.create');
    }

    /**
     * Store a newly created DesplegablePresentacionInsumos in storage.
     *
     * @param CreateDesplegablePresentacionInsumosRequest $request
     *
     * @return Response
     */
    public function store(CreateDesplegablePresentacionInsumosRequest $request)
    {
        $input = $request->all();

        $desplegablePresentacionInsumos = $this->desplegablePresentacionInsumosRepository->create($input);

        Flash::success('Desplegable Presentacion Insumos Guardado exitosamente.');

        return redirect(route('desplegablePresentacionInsumos.index'));
    }

    /**
     * Display the specified DesplegablePresentacionInsumos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $desplegablePresentacionInsumos = $this->desplegablePresentacionInsumosRepository->find($id);

        if (empty($desplegablePresentacionInsumos)) {
            Flash::error('Desplegable Presentacion Insumos not found');

            return redirect(route('desplegablePresentacionInsumos.index'));
        }

        return view('desplegable_presentacion_insumos.show')->with('desplegablePresentacionInsumos', $desplegablePresentacionInsumos);
    }

    /**
     * Show the form for editing the specified DesplegablePresentacionInsumos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $desplegablePresentacionInsumos = $this->desplegablePresentacionInsumosRepository->find($id);

        if (empty($desplegablePresentacionInsumos)) {
            Flash::error('Desplegable Presentacion Insumos not found');

            return redirect(route('desplegablePresentacionInsumos.index'));
        }

        return view('desplegable_presentacion_insumos.edit')->with('desplegablePresentacionInsumos', $desplegablePresentacionInsumos);
    }

    /**
     * Update the specified DesplegablePresentacionInsumos in storage.
     *
     * @param int $id
     * @param UpdateDesplegablePresentacionInsumosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDesplegablePresentacionInsumosRequest $request)
    {
        $desplegablePresentacionInsumos = $this->desplegablePresentacionInsumosRepository->find($id);

        if (empty($desplegablePresentacionInsumos)) {
            Flash::error('Desplegable Presentacion Insumos not found');

            return redirect(route('desplegablePresentacionInsumos.index'));
        }

        $desplegablePresentacionInsumos = $this->desplegablePresentacionInsumosRepository->update($request->all(), $id);

        Flash::success('Desplegable Presentacion Insumos Actualizado exitosamente.');

        return redirect(route('desplegablePresentacionInsumos.index'));
    }

    /**
     * Remove the specified DesplegablePresentacionInsumos from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $desplegablePresentacionInsumos = $this->desplegablePresentacionInsumosRepository->find($id);

        if (empty($desplegablePresentacionInsumos)) {
            Flash::error('Desplegable Presentacion Insumos not found');

            return redirect(route('desplegablePresentacionInsumos.index'));
        }

        $this->desplegablePresentacionInsumosRepository->delete($id);

        Flash::success('Desplegable Presentacion Insumos Borrado exitosamente.');

        return redirect(route('desplegablePresentacionInsumos.index'));
    }
}
