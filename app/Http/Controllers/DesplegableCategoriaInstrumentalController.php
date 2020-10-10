<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDesplegableCategoriaInstrumentalRequest;
use App\Http\Requests\UpdateDesplegableCategoriaInstrumentalRequest;
use App\Repositories\DesplegableCategoriaInstrumentalRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class DesplegableCategoriaInstrumentalController extends AppBaseController
{
    /** @var  DesplegableCategoriaInstrumentalRepository */
    private $desplegableCategoriaInstrumentalRepository;

    public function __construct(DesplegableCategoriaInstrumentalRepository $desplegableCategoriaInstrumentalRepo)
    {
        $this->desplegableCategoriaInstrumentalRepository = $desplegableCategoriaInstrumentalRepo;
    }

    /**
     * Display a listing of the DesplegableCategoriaInstrumental.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $desplegableCategoriaInstrumentals = $this->desplegableCategoriaInstrumentalRepository->paginate(10);

        return view('desplegable_categoria_instrumentals.index')
            ->with('desplegableCategoriaInstrumentals', $desplegableCategoriaInstrumentals);
    }

    /**
     * Show the form for creating a new DesplegableCategoriaInstrumental.
     *
     * @return Response
     */
    public function create()
    {
        return view('desplegable_categoria_instrumentals.create');
    }

    /**
     * Store a newly created DesplegableCategoriaInstrumental in storage.
     *
     * @param CreateDesplegableCategoriaInstrumentalRequest $request
     *
     * @return Response
     */
    public function store(CreateDesplegableCategoriaInstrumentalRequest $request)
    {
        $input = $request->all();

        $desplegableCategoriaInstrumental = $this->desplegableCategoriaInstrumentalRepository->create($input);

        Flash::success('Desplegable Categoria Instrumental Guardado exitosamente.');

        return redirect(route('desplegableCategoriaInstrumentals.index'));
    }

    /**
     * Display the specified DesplegableCategoriaInstrumental.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $desplegableCategoriaInstrumental = $this->desplegableCategoriaInstrumentalRepository->find($id);

        if (empty($desplegableCategoriaInstrumental)) {
            Flash::error('Desplegable Categoria Instrumental not found');

            return redirect(route('desplegableCategoriaInstrumentals.index'));
        }

        return view('desplegable_categoria_instrumentals.show')->with('desplegableCategoriaInstrumental', $desplegableCategoriaInstrumental);
    }

    /**
     * Show the form for editing the specified DesplegableCategoriaInstrumental.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $desplegableCategoriaInstrumental = $this->desplegableCategoriaInstrumentalRepository->find($id);

        if (empty($desplegableCategoriaInstrumental)) {
            Flash::error('Desplegable Categoria Instrumental not found');

            return redirect(route('desplegableCategoriaInstrumentals.index'));
        }

        return view('desplegable_categoria_instrumentals.edit')->with('desplegableCategoriaInstrumental', $desplegableCategoriaInstrumental);
    }

    /**
     * Update the specified DesplegableCategoriaInstrumental in storage.
     *
     * @param int $id
     * @param UpdateDesplegableCategoriaInstrumentalRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDesplegableCategoriaInstrumentalRequest $request)
    {
        $desplegableCategoriaInstrumental = $this->desplegableCategoriaInstrumentalRepository->find($id);

        if (empty($desplegableCategoriaInstrumental)) {
            Flash::error('Desplegable Categoria Instrumental not found');

            return redirect(route('desplegableCategoriaInstrumentals.index'));
        }

        $desplegableCategoriaInstrumental = $this->desplegableCategoriaInstrumentalRepository->update($request->all(), $id);

        Flash::success('Desplegable Categoria Instrumental actualizado con éxito.');

        return redirect(route('desplegableCategoriaInstrumentals.index'));
    }

    /**
     * Remove the specified DesplegableCategoriaInstrumental from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $desplegableCategoriaInstrumental = $this->desplegableCategoriaInstrumentalRepository->find($id);

        if (empty($desplegableCategoriaInstrumental)) {
            Flash::error('Desplegable Categoria Instrumental not found');

            return redirect(route('desplegableCategoriaInstrumentals.index'));
        }

        $this->desplegableCategoriaInstrumentalRepository->delete($id);

        Flash::success('Desplegable Categoria Instrumental borrado exitosamente.');

        return redirect(route('desplegableCategoriaInstrumentals.index'));
    }
}
