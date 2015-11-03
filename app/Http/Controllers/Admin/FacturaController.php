<?php


namespace Oral_Plus\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Oral_Plus\detalle_Compra;
use Oral_Plus\Factura;
use Oral_Plus\Factura_compra;
use Oral_Plus\Http\Requests;
use Oral_Plus\Http\Controllers\Controller;
use Oral_Plus\Proveedor;
use Oral_Plus\User;

class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {

        $facturas = Factura::name($request->get('name'))->nombre($request->get('proveedor'))->OrderBy('id_factura', 'Desc')->paginate(8);


        return view('admin.factura.index')->with('facturas', $facturas);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $data =   DB::table('proveedors')->orderBy('nombre', 'asc')->lists('nombre','id');
        $insumo = DB::table('insumos')->orderBy('nombre', 'asc')->lists('nombre', 'id');

        return view('admin.factura.create', compact('data', 'insumo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $factura = new Factura();
        $fetalle = new detalle_Compra();
        dd($factura, $fetalle);
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
        return "123";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
