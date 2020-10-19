<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreatenotasRequest;
use App\Http\Requests\UpdatenotasRequest;
use App\Models\DesplegableServicioIngreso;
use App\Models\notas;
use App\Repositories\notasRepository;
use Flash;
use Illuminate\Http\Request;
use Response;

class notasController extends AppBaseController
{
    /** @var  notasRepository */
    private $notasRepository;

    public function __construct(notasRepository $notasRepo)
    {
        $this->notasRepository = $notasRepo;
    }

    /**
     * Display a listing of the notas.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $documento = $request->get('buscarpor');
        $nombre = $request->get('buscarpornombre');
        $notas = notas::documento($documento)->nombre($nombre)->paginate(10);

        return view('notas.index')
            ->with('notas', $notas);
    }

    /**
     * Show the form for creating a new notas.
     *
     * @return Response
     */
    public function create()
    {
        $desplegable_servicio_ingresos = DesplegableServicioIngreso::all();
        return view('notas.create', [
            'desplegable_servicio_ingresos' => $desplegable_servicio_ingresos,
        ]);
    }

    /**
     * Store a newly created notas in storage.
     *
     * @param CreatenotasRequest $request
     *
     * @return Response
     */
    public function store(CreatenotasRequest $request)
    {
        $input = $request->all();

        $notas = $this->notasRepository->create($input);

        Flash::success('Nota guardada exitosamente.');

        return redirect(route('notas.index'));
    }

    /**
     * Display the specified notas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $notas = $this->notasRepository->find($id);

        if (empty($notas)) {
            Flash::error('Notas not found');

            return redirect(route('notas.index'));
        }

        return view('notas.show')->with('notas', $notas);
    }

    /**
     * Show the form for editing the specified notas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $notas = $this->notasRepository->find($id);

        if (empty($notas)) {
            Flash::error('Notas not found');

            return redirect(route('notas.index'));
        }
        $desplegable_servicio_ingresos = DesplegableServicioIngreso::all();
        return view('notas.edit', [
            'notas' => $notas,
            'desplegable_servicio_ingresos' => $desplegable_servicio_ingresos,
        ]);
    }

    /**
     * Update the specified notas in storage.
     *
     * @param int $id
     * @param UpdatenotasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatenotasRequest $request)
    {
        $notas = $this->notasRepository->find($id);

        if (empty($notas)) {
            Flash::error('Notas not found');

            return redirect(route('notas.index'));
        }

        $notas = $this->notasRepository->update($request->all(), $id);

        Flash::success('Nota Actualizada exitosamente.');

        return redirect(route('notas.index'));
    }

    /**
     * Remove the specified notas from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $notas = $this->notasRepository->find($id);

        if (empty($notas)) {
            Flash::error('Nota no encontrada');

            return redirect(route('notas.index'));
        }

        $this->notasRepository->delete($id);

        Flash::success('Nota eliminada con éxito.');

        return redirect(route('notas.index'));
    }
}
