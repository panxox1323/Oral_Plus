<?php namespace Oral_Plus\Http\Controllers\Admin;

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


		return view('admin.especialista.index', compact('especialistas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.especialista.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateEspecialistaRequest $request)
	{

		$especialista = new Especialista();
		$especialista->save();

		return redirect()->route('admin.especialista.index');

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