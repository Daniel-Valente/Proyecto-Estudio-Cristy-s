<?php

namespace App\Http\Controllers;

/*<a href="{{ action('GaleriaController@create') }}" class="btn btn-success btn-sm">Subir Foto</a>
{{ $galerias->links() }}*/
use App\Galeria;
use App\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galerias = Galeria::with('user')->paginate(15);
        return view('galerias.galeriaIndex', compact('galerias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('galerias.galeriaForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    public function upload(Request $request)
    {
        $request->validate([
            'mi_archivo' => 'required'
        ]);

        $request->merge(['user_id' => \Auth::id()]);

        $entrada=$request->all();

        if($archivo=$request->file('mi_archivo'))
        {
            $nombre = $archivo->getClientOriginalName();

            $archivo->move('images', $nombre);

            $entrada['nombre_original'] = $nombre;
        }

        Galeria::create($entrada);

        return redirect()->route('galeria.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function show(Galeria $galeria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function edit(Galeria $galeria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galeria $galeria)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galeria $galeria)
    {
        //
    }
}
