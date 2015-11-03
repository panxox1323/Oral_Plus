<?php namespace Oral_Plus\Http\Controllers\Secretaria;

use Illuminate\Support\Facades\Session;
use Oral_Plus\Especialidad;
use Oral_Plus\Especialista;
use Oral_Plus\Http\Requests;
use Oral_Plus\Http\Controllers\Controller;
use Oral_Plus\Http\Requests\CreateEspecialistaRequest;

use Illuminate\Http\Request;

class EspecialistaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$especialistas = Especialista::name($request->get('name'))->type($request->get('type'))->orderBy('id', 'DESC')->paginate(10);


		return view('secretaria.especialista.index', compact('especialistas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('secretaria.especialista.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateEspecialistaRequest $request)
	{
		$especialista = new Especialista($request->all());
		$especialista->save();

		$message = $especialista->nombres.' '.$especialista->apellidos.' fue creado correctamente';
		Session::flash('message', $message);
		return \Redirect::route('secretaria.especialista.index');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$especialista = Especialista::findOrFail($id);
		return view('secretaria.especialista.edit', compact('especialista'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{

	}

}
