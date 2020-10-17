<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateDesplegableMarcaInsumosRequest;
use App\Http\Requests\UpdateDesplegableMarcaInsumosRequest;
use App\Models\DesplegableMarcaInsumos;
use App\Repositories\DesplegableMarcaInsumosRepository;
use Flash;
use Illuminate\Http\Request;
use Response;

class DesplegableMarcaInsumosController extends AppBaseController
{
    /** @var  DesplegableMarcaInsumosRepository */
    private $desplegableMarcaInsumosRepository;

    public function __construct(DesplegableMarcaInsumosRepository $desplegableMarcaInsumosRepo)
    {
        $this->desplegableMarcaInsumosRepository = $desplegableMarcaInsumosRepo;
    }

    /**
     * Display a listing of the DesplegableMarcaInsumos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $nombre = $request->get('buscarpor');
        $desplegableMarcaInsumos = DesplegableMarcaInsumos::where('nombre','like',"%$nombre%")->paginate(10);

        return view('desplegable_marca_insumos.index')
            ->with('desplegableMarcaInsumos', $desplegableMarcaInsumos);
    }

    /**
     * Show the form for creating a new DesplegableMarcaInsumos.
     *
     * @return Response
     */
    public function create()
    {
        return view('desplegable_marca_insumos.create');
    }

    /**
     * Store a newly created DesplegableMarcaInsumos in storage.
     *
     * @param CreateDesplegableMarcaInsumosRequest $request
     *
     * @return Response
     */
    public function store(CreateDesplegableMarcaInsumosRequest $request)
    {
        $input = $request->all();

        $desplegableMarcaInsumos = $this->desplegableMarcaInsumosRepository->create($input);

        Flash::success('Desplegable Marca Insumos Guardado exitosamente.');

        return redirect(route('desplegableMarcaInsumos.index'));
    }

    /**
     * Display the specified DesplegableMarcaInsumos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $desplegableMarcaInsumos = $this->desplegableMarcaInsumosRepository->find($id);

        if (empty($desplegableMarcaInsumos)) {
            Flash::error('Desplegable Marca Insumos not found');

            return redirect(route('desplegableMarcaInsumos.index'));
        }

        return view('desplegable_marca_insumos.show')->with('desplegableMarcaInsumos', $desplegableMarcaInsumos);
    }

    /**
     * Show the form for editing the specified DesplegableMarcaInsumos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $desplegableMarcaInsumos = $this->desplegableMarcaInsumosRepository->find($id);

        if (empty($desplegableMarcaInsumos)) {
            Flash::error('Desplegable Marca Insumos not found');

            return redirect(route('desplegableMarcaInsumos.index'));
        }

        return view('desplegable_marca_insumos.edit')->with('desplegableMarcaInsumos', $desplegableMarcaInsumos);
    }

    /**
     * Update the specified DesplegableMarcaInsumos in storage.
     *
     * @param int $id
     * @param UpdateDesplegableMarcaInsumosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDesplegableMarcaInsumosRequest $request)
    {
        $desplegableMarcaInsumos = $this->desplegableMarcaInsumosRepository->find($id);

        if (empty($desplegableMarcaInsumos)) {
            Flash::error('Desplegable Marca Insumos not found');

            return redirect(route('desplegableMarcaInsumos.index'));
        }

        $desplegableMarcaInsumos = $this->desplegableMarcaInsumosRepository->update($request->all(), $id);

        Flash::success('Desplegable Marca Insumos Actualizado exitosamente.');

        return redirect(route('desplegableMarcaInsumos.index'));
    }

    /**
     * Remove the specified DesplegableMarcaInsumos from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $desplegableMarcaInsumos = $this->desplegableMarcaInsumosRepository->find($id);

        if (empty($desplegableMarcaInsumos)) {
            Flash::error('Desplegable Marca Insumos not found');

            return redirect(route('desplegableMarcaInsumos.index'));
        }

        $this->desplegableMarcaInsumosRepository->delete($id);

        Flash::success('Desplegable Marca Insumos Borrado exitosamente.');

        return redirect(route('desplegableMarcaInsumos.index'));
    }
}
