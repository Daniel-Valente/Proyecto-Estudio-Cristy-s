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
        $galerias = Galeria::with('user', 'categoria')->paginate(15);
        return view('galerias.galeriaIndex', compact('galerias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all()->pluck('nombre_Categoria', 'id');
        return view('galerias.galeriaForm', compact('categorias'));
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

        $request->merge(['nombre_hash' => $request->file('mi_archivo')->store('archivos_cargados')]);
        $request->merge(['mime' => $request->file('mi_archivo')->getClientMimeType()]);
        $request->merge(['tamaño' => $request->file('mi_archivo')->getMaxFilesize()]);

        $entrada=$request->all();

        if($archivo=$request->file('mi_archivo'))
        {
            $nombre = $archivo->getClientOriginalName();

            $archivo->move('images', $nombre);

            $entrada['nombre_original'] = $nombre;
        }

        Galeria::create([
            'user_id' => $entrada['user_id'],
            'categoria_id' => $entrada['categoria_id'],
            'nombre_original' => $entrada['nombre_original'],
            'nombre_hash' => $entrada['nombre_hash'],
            'mime' => $entrada['mime'],
            'tamaño' => $entrada['tamaño'],
        ]);

        return redirect()->route('galeria.index');
    }

    public function download(Galeria $galeria)
    {
        //Obtiene ruta del archivo
        $rutaArchivo = storage_path('app/' . $galeria->nombre_hash);

        //La respuesta contiene el archivo con el tipo de documento
        return response()->download($rutaArchivo, $galeria->nombre_original, ['Content-Type' => $galeria->mime]);
    }

    public function delete(Galeria $galeria)
    {
        //Verifica la existencia del archivo
        if (\Storage::exists($galeria->nombre_hash)) {
            \Storage::delete($galeria->nombre_hash); //Elimina archivo
            $galeria->delete(); //Elimina registro en tabla
        }

        return redirect()->back();
    }

}
