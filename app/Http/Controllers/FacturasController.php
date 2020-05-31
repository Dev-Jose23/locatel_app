<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Factura;
use Carbon\Carbon;

use App\proveedor;
use Illuminate\Http\Request;

class FacturasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 5;

        if (!empty($keyword)) {
            $facturas = Factura::where('num_factura', 'LIKE', "%$keyword%")
                ->orWhere('proveedor_id', 'LIKE', "%$keyword%")
                ->orWhere('fecha', 'LIKE', "%$keyword%")

                ->latest()->paginate($perPage);
        } else {
            $facturas = Factura::latest()->paginate($perPage);
        }

        // $fecha = Factura::select('created_at');

        return view('facturas.index', compact('facturas'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {   

        $proveedors = proveedor::all();
        return view('facturas.create', compact('proveedors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

        //Validaciones

        request()->validate([

            'num_factura' => 'required|unique:facturas',
            'proveedor_id' => 'required',
            'fecha' => 'required',

            ]);

        
        $requestData = $request->all();
                if ($request->hasFile('foto')) {
            $requestData['foto'] = $request->file('foto')
                ->store('uploads', 'public');
        }

        Factura::create($requestData);

        return redirect('facturas')->with('info', 'factura guardada con éxito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $factura = Factura::findOrFail($id);

        return view('facturas.show', compact('factura'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $factura = Factura::findOrFail($id);

        return view('facturas.edit', compact('factura'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {

        request()->validate([

            'num_factura' => 'required',
            'fecha' => 'required',
            'status' => 'required'

            ]);
        
        $requestData = $request->all();
                if ($request->hasFile('foto')) {
            $requestData['foto'] = $request->file('foto')
                ->store('uploads', 'public');
        }

        $factura = Factura::findOrFail($id);
        $factura->update($requestData);

        return redirect('facturas')->with('info', 'factura actualizada con éxito!');
    }

     public function pay($id)
    {

        
        $factura = Factura::findOrFail($id);

        if ($factura->status ==1) {
            return redirect('facturas')->with('info', 'factura ya ha sido pagada!');
        }else

        return view('facturas.pay', compact('factura'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Factura::destroy($id);

        return redirect('facturas')->with('info', 'factura eliminada exitosamente!');
    }
}
