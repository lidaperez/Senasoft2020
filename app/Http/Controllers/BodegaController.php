<?php

namespace App\Http\Controllers;
use App\Bodega;
use App\Http\Controllers\Controller;
use App\Producto;
use App\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
class BodegaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bodegas = Bodega::where('id_empresa', Auth::user()->id_empresa)
        ->orderBy('bodega', 'asc')
        ->paginate(10);

        return view('admin.bodega.gestionar', compact('bodegas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.bodega.registro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bodega = new Bodega();

        $bodega->id_empresa = $request->input('id_empresa');
        $bodega->bodega = $request->input('bodega');
        $bodega->ciudad = $request->input('ciudad');
        $bodega->direccion = $request->input('direccion');
        $bodega->save();

        Alert::success('Registrada', 'Bodega con éxito');
        return redirect(route('bodega.create'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function bodega_producto($id)
    {
        $productos = Stock::where('id_bodega', $id)
        ->where('id_empresa', Auth::user()->id_empresa)
        ->orderBy('producto', 'asc')
        ->paginate(10);

        return view('admin.producto.gestionar', compact('productos','id'));
    }

        /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function bodega_producto_registro(Request $request, $id)
    {

        $producto = new Producto();

        $producto->id_empresa = $request->input('id_empresa');
        $producto->categoria = $request->input('categoria');
        $producto->producto = $request->input('producto');
        $producto->cod_barras = $request->input('cod_barras');
        $producto->descripcion = $request->input('descripcion');
        $producto->precio_unidad = $request->input('precio_unidad');
        $producto->stock_min = $request->input('stock_min');
        $producto->save();

        $u_pro = Producto::last();

        $stock = new Stock();
        $stock->id_producto = $u_pro->id;
        $stock->id_bodega = $id;
        $stock->cantidad = $request->input('cantidad');
        $stock->save();

        Alert::success('Registrado', 'Producto con éxito');
        return redirect(route('producto.create'));

    }

        /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function bodega_producto_create($id)
    {
        return view('admin.producto.registro', compact('id'));

    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
