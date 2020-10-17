<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateDesplegableServicioIngresoRequest;
use App\Http\Requests\UpdateDesplegableServicioIngresoRequest;
use App\Models\DesplegableServicioIngreso;
use App\Repositories\DesplegableServicioIngresoRepository;
use Flash;
use Illuminate\Http\Request;
use Response;

class DesplegableServicioIngresoController extends AppBaseController
{
    /** @var  DesplegableServicioIngresoRepository */
    private $desplegableServicioIngresoRepository;

    public function __construct(DesplegableServicioIngresoRepository $desplegableServicioIngresoRepo)
    {
        $this->desplegableServicioIngresoRepository = $desplegableServicioIngresoRepo;
    }

    /**
     * Display a listing of the DesplegableServicioIngreso.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $nombre = $request->get('buscarpor');
        $desplegableServicioIngresos = DesplegableServicioIngreso::where('nombre','like',"%$nombre%")->paginate(10);

        return view('desplegable_servicio_ingresos.index')
            ->with('desplegableServicioIngresos', $desplegableServicioIngresos);
    }

    /**
     * Show the form for creating a new DesplegableServicioIngreso.
     *
     * @return Response
     */
    public function create()
    {
        return view('desplegable_servicio_ingresos.create');
    }

    /**
     * Store a newly created DesplegableServicioIngreso in storage.
     *
     * @param CreateDesplegableServicioIngresoRequest $request
     *
     * @return Response
     */
    public function store(CreateDesplegableServicioIngresoRequest $request)
    {
        $input = $request->all();

        $desplegableServicioIngreso = $this->desplegableServicioIngresoRepository->create($input);

        Flash::success('Desplegable Servicio Ingreso Guardado exitosamente.');

        return redirect(route('desplegableServicioIngresos.index'));
    }

    /**
     * Display the specified DesplegableServicioIngreso.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $desplegableServicioIngreso = $this->desplegableServicioIngresoRepository->find($id);

        if (empty($desplegableServicioIngreso)) {
            Flash::error('Desplegable Servicio Ingreso not found');

            return redirect(route('desplegableServicioIngresos.index'));
        }

        return view('desplegable_servicio_ingresos.show')->with('desplegableServicioIngreso', $desplegableServicioIngreso);
    }

    /**
     * Show the form for editing the specified DesplegableServicioIngreso.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $desplegableServicioIngreso = $this->desplegableServicioIngresoRepository->find($id);

        if (empty($desplegableServicioIngreso)) {
            Flash::error('Desplegable Servicio Ingreso not found');

            return redirect(route('desplegableServicioIngresos.index'));
        }

        return view('desplegable_servicio_ingresos.edit')->with('desplegableServicioIngreso', $desplegableServicioIngreso);
    }

    /**
     * Update the specified DesplegableServicioIngreso in storage.
     *
     * @param int $id
     * @param UpdateDesplegableServicioIngresoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDesplegableServicioIngresoRequest $request)
    {
        $desplegableServicioIngreso = $this->desplegableServicioIngresoRepository->find($id);

        if (empty($desplegableServicioIngreso)) {
            Flash::error('Desplegable Servicio Ingreso not found');

            return redirect(route('desplegableServicioIngresos.index'));
        }

        $desplegableServicioIngreso = $this->desplegableServicioIngresoRepository->update($request->all(), $id);

        Flash::success('Desplegable Servicio Ingreso actualizado con éxito.');

        return redirect(route('desplegableServicioIngresos.index'));
    }

    /**
     * Remove the specified DesplegableServicioIngreso from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $desplegableServicioIngreso = $this->desplegableServicioIngresoRepository->find($id);

        if (empty($desplegableServicioIngreso)) {
            Flash::error('Desplegable Servicio Ingreso not found');

            return redirect(route('desplegableServicioIngresos.index'));
        }

        $this->desplegableServicioIngresoRepository->delete($id);

        Flash::success('Desplegable Servicio Ingreso borrado exitosamente.');

        return redirect(route('desplegableServicioIngresos.index'));
    }
}
