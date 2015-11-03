<?php namespace Oral_Plus\Http\Controllers\Secretaria;

use Illuminate\Support\Facades\Session;
use Oral_Plus\Http\Requests;
use Oral_Plus\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Oral_Plus\Insumo;
use Oral_Plus\insumos;
use Oral_Plus\Iva;
use Oral_Plus\Proveedor;
use Oral_Plus\Http\Requests\CreateInsumoRequest;
use Oral_Plus\Http\Requests\EditInsumoRequest;


class insumosController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
        $insumo = Insumo::nombre($request->get('nombre'))->orderBy('id', 'DESC')->paginate();

        return view('secretaria.insumos.index', compact('insumo'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('secretaria.insumos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateInsumoRequest $request)
	{
		$insumo = new Insumo($request->all());
        $insumo->save();
		$message = $insumo->nombre.' fue creado correctamente';
		Session::flash('message', $message);
        return redirect()->route('secretaria.insumos.index');
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
		$insumo = Insumo::findOrFail($id);
        return view('secretaria.insumos.edit', compact('insumo'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditInsumoRequest $request, $id)
	{
        $insumo = Insumo::findOrFail($id);
        $insumo->fill($request->all());
        $insumo->save();

        return redirect()->route('admin.insumos.index');
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $insumo = Insumo::findOrfail($id);
        Insumo::destroy($id);

        $message = $insumo->nombre.' fue borrado de la Base de Datos';

        Session::flash('message', $message);

        return redirect()->route('admin.insumos.index');
	}

}
