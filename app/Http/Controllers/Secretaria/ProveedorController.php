<?php namespace Oral_Plus\Http\Controllers\Secretaria;

use Illuminate\Support\Facades\Session;
use Oral_Plus\Http\Requests;
use Oral_Plus\Http\Controllers\Controller;
use Oral_Plus\Http\Requests\CreateProveedorRequest;
use Illuminate\Http\Request;
use Oral_Plus\Proveedor;
use Oral_Plus\Http\Requests\CreateProductosRequest;

class ProveedorController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$proveedores = Proveedor::nombre($request->get('nombre'))->giro($request->get('giro'))->OrderBy('id', 'DESC')->paginate();

        return view('secretaria.proveedores.index', compact('proveedores'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('secretaria.proveedores.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateProveedorRequest $request)
	{
        $proveedor = Proveedor::create($request->all());

        return redirect()->route('secretaria.proveedor.index');
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
        $proveedor = Proveedor::findOrFail($id);
        return view('secretaria.proveedores.edit', compact('proveedor'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(CreateProveedorRequest $request, $id)
	{
        $proveedor = Proveedor::findOrFail($id);
        $proveedor->fill($request->all());
        $proveedor->save();
		$message = $proveedor->nombre.' fue modificado en la Base de Datos';
		Session::flash('message', $message);

        return redirect()->route('secretaria.proveedor.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $proveedor = Proveedor::findOrFail($id);
        Proveedor::destroy($id);
        $message = $proveedor->nombre.' fue eliminado de la Base de Datos';
        Session::flash('message', $message);
        return redirect()->route('admin.proveedores.index');
	}

}
