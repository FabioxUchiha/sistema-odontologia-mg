<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDesplegableMarcaInstrumentalRequest;
use App\Http\Requests\UpdateDesplegableMarcaInstrumentalRequest;
use App\Repositories\DesplegableMarcaInstrumentalRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class DesplegableMarcaInstrumentalController extends AppBaseController
{
    /** @var  DesplegableMarcaInstrumentalRepository */
    private $desplegableMarcaInstrumentalRepository;

    public function __construct(DesplegableMarcaInstrumentalRepository $desplegableMarcaInstrumentalRepo)
    {
        $this->desplegableMarcaInstrumentalRepository = $desplegableMarcaInstrumentalRepo;
    }

    /**
     * Display a listing of the DesplegableMarcaInstrumental.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $desplegableMarcaInstrumentals = $this->desplegableMarcaInstrumentalRepository->paginate(10);

        return view('desplegable_marca_instrumentals.index')
            ->with('desplegableMarcaInstrumentals', $desplegableMarcaInstrumentals);
    }

    /**
     * Show the form for creating a new DesplegableMarcaInstrumental.
     *
     * @return Response
     */
    public function create()
    {
        return view('desplegable_marca_instrumentals.create');
    }

    /**
     * Store a newly created DesplegableMarcaInstrumental in storage.
     *
     * @param CreateDesplegableMarcaInstrumentalRequest $request
     *
     * @return Response
     */
    public function store(CreateDesplegableMarcaInstrumentalRequest $request)
    {
        $input = $request->all();

        $desplegableMarcaInstrumental = $this->desplegableMarcaInstrumentalRepository->create($input);

        Flash::success('Desplegable Marca Instrumental Guardado exitosamente.');

        return redirect(route('desplegableMarcaInstrumentals.index'));
    }

    /**
     * Display the specified DesplegableMarcaInstrumental.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $desplegableMarcaInstrumental = $this->desplegableMarcaInstrumentalRepository->find($id);

        if (empty($desplegableMarcaInstrumental)) {
            Flash::error('Desplegable Marca Instrumental not found');

            return redirect(route('desplegableMarcaInstrumentals.index'));
        }

        return view('desplegable_marca_instrumentals.show')->with('desplegableMarcaInstrumental', $desplegableMarcaInstrumental);
    }

    /**
     * Show the form for editing the specified DesplegableMarcaInstrumental.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $desplegableMarcaInstrumental = $this->desplegableMarcaInstrumentalRepository->find($id);

        if (empty($desplegableMarcaInstrumental)) {
            Flash::error('Desplegable Marca Instrumental not found');

            return redirect(route('desplegableMarcaInstrumentals.index'));
        }

        return view('desplegable_marca_instrumentals.edit')->with('desplegableMarcaInstrumental', $desplegableMarcaInstrumental);
    }

    /**
     * Update the specified DesplegableMarcaInstrumental in storage.
     *
     * @param int $id
     * @param UpdateDesplegableMarcaInstrumentalRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDesplegableMarcaInstrumentalRequest $request)
    {
        $desplegableMarcaInstrumental = $this->desplegableMarcaInstrumentalRepository->find($id);

        if (empty($desplegableMarcaInstrumental)) {
            Flash::error('Desplegable Marca Instrumental not found');

            return redirect(route('desplegableMarcaInstrumentals.index'));
        }

        $desplegableMarcaInstrumental = $this->desplegableMarcaInstrumentalRepository->update($request->all(), $id);

        Flash::success('Desplegable Marca Instrumental actualizado con éxito.');

        return redirect(route('desplegableMarcaInstrumentals.index'));
    }

    /**
     * Remove the specified DesplegableMarcaInstrumental from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $desplegableMarcaInstrumental = $this->desplegableMarcaInstrumentalRepository->find($id);

        if (empty($desplegableMarcaInstrumental)) {
            Flash::error('Desplegable Marca Instrumental not found');

            return redirect(route('desplegableMarcaInstrumentals.index'));
        }

        $this->desplegableMarcaInstrumentalRepository->delete($id);

        Flash::success('Desplegable Marca Instrumental borrado exitosamente.');

        return redirect(route('desplegableMarcaInstrumentals.index'));
    }
}
