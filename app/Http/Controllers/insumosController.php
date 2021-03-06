<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateinsumosRequest;
use App\Http\Requests\UpdateinsumosRequest;
use App\Models\DesplegableMarcaInsumos;
use App\Models\DesplegableNombreInsumos;
use App\Models\DesplegablePresentacionInsumos;
use App\Models\insumos;
use App\Repositories\insumosRepository;
use Flash;
use Illuminate\Http\Request;
use Response;

class insumosController extends AppBaseController
{
    /** @var  insumosRepository */
    private $insumosRepository;

    public function __construct(insumosRepository $insumosRepo)
    {
        $this->insumosRepository = $insumosRepo;
    }

    /**
     * Display a listing of the insumos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $nombre = $request->get('buscarpor');
        $fecha = $request->get('buscarporfecha');
        $marca = $request->get('buscarpormarca');
        $ins = Insumos::all();
        $insumos = insumos::nombre($nombre)->marca($marca)->fecha($fecha)->paginate(10);
        if (count($insumos) < 1 && count($ins) > 0 ) {
            Flash::warning('No se ha encontado resultados de la busqueda');
        }
        return view('insumos.index')
            ->with('insumos', $insumos);
    }

    /**
     * Show the form for creating a new insumos.
     *
     * @return Response
     */
    public function create()
    {
        $desplegableNombreInsumos = DesplegableNombreInsumos::all();
        $desplegableMarcaInsumos = DesplegableMarcaInsumos::all();
        $desplegablePresentacionInsumos = DesplegablePresentacionInsumos::all();
        return view('insumos.create', [
            'desplegableNombreInsumos' => $desplegableNombreInsumos,
            'desplegableMarcaInsumos' => $desplegableMarcaInsumos,
            'desplegablePresentacionInsumos' => $desplegablePresentacionInsumos,
        ]);
    }

    /**
     * Store a newly created insumos in storage.
     *
     * @param CreateinsumosRequest $request
     *
     * @return Response
     */
    public function store(CreateinsumosRequest $request)
    {
        $input = $request->all();

        $insumos = $this->insumosRepository->create($input);

        Flash::success('Insumos Guardado exitosamente.');

        return redirect(route('insumos.index'));
    }

    /**
     * Display the specified insumos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $insumos = $this->insumosRepository->find($id);

        if (empty($insumos)) {
            Flash::error('Insumos not found');

            return redirect(route('insumos.index'));
        }

        return view('insumos.show')->with('insumos', $insumos);
    }

    /**
     * Show the form for editing the specified insumos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $insumos = $this->insumosRepository->find($id);

        if (empty($insumos)) {
            Flash::error('Insumos not found');

            return redirect(route('insumos.index'));
        }
        $desplegableNombreInsumos = DesplegableNombreInsumos::all();
        $desplegableMarcaInsumos = DesplegableMarcaInsumos::all();
        $desplegablePresentacionInsumos = DesplegablePresentacionInsumos::all();
        return view('insumos.edit', [
            'insumos' => $insumos,
            'desplegableNombreInsumos' => $desplegableNombreInsumos,
            'desplegableMarcaInsumos' => $desplegableMarcaInsumos,
            'desplegablePresentacionInsumos' => $desplegablePresentacionInsumos,
        ]);
    }

    /**
     * Update the specified insumos in storage.
     *
     * @param int $id
     * @param UpdateinsumosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateinsumosRequest $request)
    {
        $insumos = $this->insumosRepository->find($id);

        if (empty($insumos)) {
            Flash::error('Insumos not found');

            return redirect(route('insumos.index'));
        }

        $insumos = $this->insumosRepository->update($request->all(), $id);

        Flash::success('Insumos actualizado con éxito.');

        return redirect(route('insumos.index'));
    }

    /**
     * Remove the specified insumos from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $insumos = $this->insumosRepository->find($id);

        if (empty($insumos)) {
            Flash::error('Insumos not found');

            return redirect(route('insumos.index'));
        }

        $this->insumosRepository->delete($id);

        Flash::success('Insumos borrado exitosamente.');

        return redirect(route('insumos.index'));
    }
}
