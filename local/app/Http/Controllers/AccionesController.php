<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateAccionesRequest;
use App\Http\Requests\UpdateAccionesRequest;
use App\Libraries\Repositories\AccionesRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class AccionesController extends AppBaseController
{

	/** @var  AccionesRepository */
	private $accionesRepository;

	function __construct(AccionesRepository $accionesRepo)
	{
		$this->accionesRepository = $accionesRepo;
	}

	/**
	 * Display a listing of the Acciones.
	 *
	 * @return Response
	 */
	public function index()
	{
		$acciones = $this->accionesRepository->paginate(10);

		return view('acciones.index')
			->with('acciones', $acciones);
	}

	/**
	 * Show the form for creating a new Acciones.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('acciones.create');
	}

	/**
	 * Store a newly created Acciones in storage.
	 *
	 * @param CreateAccionesRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateAccionesRequest $request)
	{
		$input = $request->all();

		$acciones = $this->accionesRepository->create($input);

		Flash::success('Acciones saved successfully.');

		return redirect(route('acciones.index'));
	}

	/**
	 * Display the specified Acciones.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$acciones = $this->accionesRepository->find($id);

		if(empty($acciones))
		{
			Flash::error('Acciones not found');

			return redirect(route('acciones.index'));
		}

		return view('acciones.show')->with('acciones', $acciones);
	}

	/**
	 * Show the form for editing the specified Acciones.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$acciones = $this->accionesRepository->find($id);

		if(empty($acciones))
		{
			Flash::error('Acciones not found');

			return redirect(route('acciones.index'));
		}

		return view('acciones.edit')->with('acciones', $acciones);
	}

	/**
	 * Update the specified Acciones in storage.
	 *
	 * @param  int              $id
	 * @param UpdateAccionesRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateAccionesRequest $request)
	{
		$acciones = $this->accionesRepository->find($id);

		if(empty($acciones))
		{
			Flash::error('Acciones not found');

			return redirect(route('acciones.index'));
		}

		$this->accionesRepository->updateRich($request->all(), $id);

		Flash::success('Acciones updated successfully.');

		return redirect(route('acciones.index'));
	}

	/**
	 * Remove the specified Acciones from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$acciones = $this->accionesRepository->find($id);

		if(empty($acciones))
		{
			Flash::error('Acciones not found');

			return redirect(route('acciones.index'));
		}

		$this->accionesRepository->delete($id);

		Flash::success('Acciones deleted successfully.');

		return redirect(route('acciones.index'));
	}
}
