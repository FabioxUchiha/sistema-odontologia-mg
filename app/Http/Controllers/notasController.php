<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatenotasRequest;
use App\Http\Requests\UpdatenotasRequest;
use App\Repositories\notasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
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
        $notas = $this->notasRepository->all();

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
        return view('notas.create');
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

        Flash::success('Notas saved successfully.');

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

        return view('notas.edit')->with('notas', $notas);
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

        Flash::success('Notas updated successfully.');

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
            Flash::error('Notas not found');

            return redirect(route('notas.index'));
        }

        $this->notasRepository->delete($id);

        Flash::success('Notas deleted successfully.');

        return redirect(route('notas.index'));
    }
}
