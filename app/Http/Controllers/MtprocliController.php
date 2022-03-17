<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mtprocli;
use App\Models\Rutas;
use App\Models\RelProspectoHanDuq;

class MtprocliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

       
       $cliente = Mtprocli::Search($request->nombre)->where('HABILITADO', 'S')->orderby('FECHAING','DESC')->paginate(30);
       $rutas = Rutas::pluck('NOMBRE','CODRUTA');
       
       
       
        return view('clientes.index', compact('cliente','rutas'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          //valida la información en la BD, si existe el NIT para que no lo registre nuevamente
        $validated = $request->validate([
        'NIT' => ['required', 'string', 'unique:MTPROCLI'],
        
        ]);

        $clientes = Mtprocli::create($request->all());

        //Modelos para guardar en la tabla intermedia de Handy

        if ($clientes->DETALLE!=0) {
            
                $tm = new RelProspectoHanDuq;
                $tm->NIT=$clientes->NIT;
                $tm->Handy=$clientes->DETALLE;
                $tm->save();
        }
       

        $request->session()->flash('product.id', $clientes->id);

        return redirect()->route('clientes.index')->with('status', 'Se guardo satisfatoriamente!');
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
