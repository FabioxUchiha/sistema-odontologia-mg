<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateIngresosRequest;
use App\Http\Requests\UpdateIngresosRequest;
use App\Models\DesplegableServicioIngreso;
use App\Models\Ingresos;
use App\Repositories\IngresosRepository;
use Carbon\Carbon;
use Flash;
use Illuminate\Http\Request;
use Response;

class IngresosController extends AppBaseController
{
    /** @var  IngresosRepository */
    private $ingresosRepository;

    public function __construct(IngresosRepository $ingresosRepo)
    {
        $this->ingresosRepository = $ingresosRepo;
    }

    /**
     * Display a listing of the Ingresos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $fecha = $request->get('buscarporfecha');
        $servicio = $request->get('buscarporservicio');
        $tipo = $request->get('buscarportipo');
        $ingresos = Ingresos::servicio($servicio)->tipo($tipo)->fecha($fecha)->paginate(10);
        $ingresosDia = Ingresos::whereDate('fecha', '=', Carbon::now()->format('Y-m-d'))->get();
        $total = 0;
        return view('ingresos.index', [
            'ingresos' => $ingresos,
            'ingresosDia' => $ingresosDia,
            'total' => $total,
        ]);

    }

    /**
     * Show the form for creating a new Ingresos.
     *
     * @return Response
     */
    public function create()
    {
        $desplegable_servicio_ingresos = DesplegableServicioIngreso::all();
        return view('ingresos.create', [
            'desplegable_servicio_ingresos' => $desplegable_servicio_ingresos,
        ]);
    }

    /**
     * Store a newly created Ingresos in storage.
     *
     * @param CreateIngresosRequest $request
     *
     * @return Response
     */
    public function store(CreateIngresosRequest $request)
    {
        $input = $request->all();

        $ingresos = $this->ingresosRepository->create($input);

        Flash::success('Guardado exitosamente.');

        return redirect(route('ingresos.index'));
    }

    /**
     * Display the specified Ingresos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ingresos = $this->ingresosRepository->find($id);

        if (empty($ingresos)) {
            Flash::error('Ingresos no encontrados');

            return redirect(route('ingresos.index'));
        }

        return view('ingresos.show')->with('ingresos', $ingresos);
    }

    /**
     * Show the form for editing the specified Ingresos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ingresos = $this->ingresosRepository->find($id);

        if (empty($ingresos)) {
            Flash::error('Ingresos no encontrados');

            return redirect(route('ingresos.index'));
        }
        $desplegable_servicio_ingresos = DesplegableServicioIngreso::all();
        return view('ingresos.edit', [
            'desplegable_servicio_ingresos' => $desplegable_servicio_ingresos,
            'ingresos' => $ingresos,
        ]);
    }

    /**
     * Update the specified Ingresos in storage.
     *
     * @param int $id
     * @param UpdateIngresosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateIngresosRequest $request)
    {
        $ingresos = $this->ingresosRepository->find($id);

        if (empty($ingresos)) {
            Flash::error('Ingresos no encontrados');

            return redirect(route('ingresos.index'));
        }

        $ingresos = $this->ingresosRepository->update($request->all(), $id);

        Flash::success('Ingresos actualizado con éxito.');

        return redirect(route('ingresos.index'));
    }

    /**
     * Remove the specified Ingresos from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ingresos = $this->ingresosRepository->find($id);

        if (empty($ingresos)) {
            Flash::error('Ingresos no encontrados');

            return redirect(route('ingresos.index'));
        }

        $this->ingresosRepository->delete($id);

        Flash::success('Ingresos eliminados con éxito.');

        return redirect(route('ingresos.index'));
    }
}
