<?php




namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\inmuebles;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
class InmueblesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inmuebles = inmuebles::all();
        return view('inmueble.index')->with('inmuebles',$inmuebles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inmueble.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // $image = $request->file('image');
    

        // $folder = Str::random(15);
        
        // $imageName = time().'.'.$image->extension();

        // $image->move(public_path('imagenes-inmueble/' . $folder),$imageName);

        // return response()->json(['success'=>$imageName]);
        // // $folderx ="imagenes-inmueble/";
        // $path = $image;


        // $ruta= $path;
        $folder = Str::random(15);
        $folderx ="imagenes-inmueble/";
        $path = $folderx . $folder; 

        $ruta= public_path($path);
        if(!File::isDirectory($ruta))
        {
        File::makeDirectory($ruta, 0777, true, true);
        }
        $request->validate([
            
            'departamento' => 'required',
            'municipio' => 'required',
            'barrio' => 'required',
            'zona' => 'required',
            'direccion' => 'required',
            'estrato' => 'required',
            'tipoinmueble' => 'required',
            'gestion' => 'required',
            'alcobas' => 'required',
            'banos' => 'required',
            'area' => 'required',
            'valor' => 'required',
            'descripcion' => 'required',
            'nombrepro' => 'required',
            'apellidopro' => 'required',
            'cedulapro' => 'required',
            'direccionpro' => 'required',
            'departamentopro' => 'required',
            'municipiopro' => 'required',
            'celularpro' => 'required',
            'correopro' => 'required',
            // 'imagenes.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $request->request->add(['folder' => $folder]); //add request
        
        inmuebles::create($request->all());
        
     
        return redirect()->route('inmueble.index')
                        ->with('success','Post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inmuebles=inmuebles::findOrFail($id);
        return view('inmueble.show', compact('inmuebles'));

        // $inmuebles = inmuebles::findOrFail($id);
        //  return view('inmuebles.show')->with('inmuebles',$inmuebles);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inmuebles=inmuebles::findOrFail($id);
        return view('imageinmueble.index')->with('inmuebles',$inmuebles);
    }
    public function image($id)
    {
        $inmuebles=inmuebles::findOrFail($id);
        return view('imageinmueble.edit')->with('inmuebles',$inmuebles);
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
        $inmuebles = inmuebles::Find($id);

        $inmuebles->departamento = $request->get('departamento');
        $inmuebles->municipio = $request->get('municipio');
        $inmuebles->barrio = $request->get('barrio');
        $inmuebles->zona = $request->get('zona');
        $inmuebles->direccion = $request->get('direccion');
        $inmuebles->tipoinmueble = $request->get('tipoinmueble');
        $inmuebles->gestion = $request->get('gestion');
        $inmuebles->alcobas = $request->get('alcobas');
        $inmuebles->banos = $request->get('banos');
        $inmuebles->area = $request->get('area');
        $inmuebles->valor = $request->get('valor');
        $inmuebles->descripcion = $request->get('descripcion');

        $inmuebles->save();
        // $inmuebles->validate([
        //     'departamento',
        //     'municipio',
        //     'barrio',
        //     'zona',
        //     'direccion',
        //     'tipoinmueble',
        //     'gestion',
        //     'alcobas',
        //     'banos',
        //     'area',
        //     'valor',
        //     'descripcion',
        // ]);
        return redirect()->route('inmueble.index')->with('success','Post created successfully.');
    }
    // => 'required'
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inmueble = inmuebles::Find($id);
        $inmueble->delete();
        return redirect()->route('inmueble.index');
   
    }
}