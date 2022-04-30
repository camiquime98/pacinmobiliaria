<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\inmuebles;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use DB;
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
    public function buscar_inmueble(Request $request)
    {



        $busqueda = $request->get('busqueda');
        $casa = $request->get('casa');
        $apartamento = $request->get('apartamento');
        $casacampestre = $request->get('casacampestre');
        $terreno = $request->get('terreno');
        $bodega = $request->get('bodega');
        $apartaestudio = $request->get('apartaestudio');
        $casalote = $request->get('casalote'); 

        $casas = 'x';
        $apartamentos = 'x';
        $casacampestres = 'x';
        $terrenos = 'x';
        $bodegas = 'x';
        $apartaestudios = 'x';
        $casalotes = 'x';
        $any =2;
        if ($casa==1) {
           $casas='Casa';
           $any =1;
        }
        if ($apartamento==1) {
            $apartamentos='Apartamento';
            $any =1;
         }
         if ($casacampestre==1) {
            $casacampestres="Casacampestre";
            $any =1;
         }
         if ($terreno==1) {
            $terrenos="Terreno";
            $any =1;
         }
         if ($bodega==1) {
            $bodegas="Bodega";
            $any =1;
         }
         if ($apartaestudio==1) {
            $apartaestudios="Apartamento";
         }
         if ( $casalote==1) {
            $casalotes="Casalote";
            $any =1;
         }
        $output ="";
    if(isset($busqueda)){
        $output ="No se han encontrado resultados para esa ubicación";
    if ($any==1) {
        $inmuebles=DB::table('inmuebles')
->orwhere('tipoinmueble',  $casas)
        ->orwhere( 'tipoinmueble',  $apartamentos)
        ->orwhere('tipoinmueble',  $casacampestres)
        ->orwhere( 'tipoinmueble',  $terrenos)
        ->orwhere( 'tipoinmueble',  $bodegas)
        ->orwhere( 'tipoinmueble',  $apartaestudios)
        ->orwhere('tipoinmueble', $casalotes)
        ->where('municipio', 'LIKE','%'.$busqueda.'%')
    ->get();  


    $contador=DB::table('inmuebles')
    ->orwhere('tipoinmueble',  $casas)
            ->orwhere( 'tipoinmueble',  $apartamentos)
            ->orwhere('tipoinmueble',  $casacampestres)
            ->orwhere( 'tipoinmueble',  $terrenos)
            ->orwhere( 'tipoinmueble',  $bodegas)
            ->orwhere( 'tipoinmueble',  $apartaestudios)
            ->orwhere('tipoinmueble', $casalotes)
            ->where('municipio', 'LIKE','%'.$busqueda.'%')
        ->count();  }
        else{

            $inmuebles=DB::table('inmuebles')
        ->where('municipio', 'LIKE','%'.$busqueda.'%')
    ->get();  


    $contador=DB::table('inmuebles')
   
            ->where('municipio', 'LIKE','%'.$busqueda.'%')
        ->count(); 

        }
        
    
    if($contador<1){
        $output ="No se han encontrado resultados para esa ubicación"; 
    }
   
    else
    {
     
        $output ="";
        foreach ($inmuebles as $key => $inmueble) {
            $output.='<div class="col-md-3 col-sm-12">
            <div class="product-men">
                    
              <div class="men-pro-item simpleCart_shelfItem">
    
                <div class="men-thumb-item">
                      <img src="assets/images/a8.png" alt="" class="pro-image-front">
                      <img src="assets/images/a8.png" alt="" class="pro-image-back">
                          <div class="men-cart-pro">
                              <div class="inner-men-cart-pro">
                                  <a href="show/'.$inmuebles->id .'" class="link-product-add-cart">'.$inmueble->zona .'</a>
                              </div>
                          </div>
                          <span class="product-new-top">1+1 Offer</span>
    
                  </div>
                  <div class="item-info-product ">
                      <h4><a href="show/'.$inmuebles->id .'">'.$inmueble->municipio .'</a></h4>
                      <div class="info-product-price">
    
                          <span class="item_price">$'.$inmueble->valor .'</span>
                          <del>$520.000</del>
    
                      </div>
                      <a href="show/'.$inmuebles->id .'" class="item_add single-item hvr-outline-out button2"> Ver mas </a>									
                  </div>
              </div>
              
          </div>
          </div>';
            }
    }
    }

    else
    {
        $output ="No se han encontrado resultados para esa ubicación";
    }
     echo $output;
        // $inmuebles = inmuebles::all();
        // return view('inmueble.index')->with('inmuebles',$inmuebles);
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
        return view('inmueble.edit')->with('inmuebles',$inmuebles);
    }
    public function image($id)
    {
        $inmuebles=inmuebles::findOrFail($id);
   
        return view('imageinmueble.index')->with('inmuebles',$inmuebles);
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
     * 
     *    * @param  \Illuminate\Http\Request  $request
     */
    public function destroy($id)
    {
        $inmueble = inmuebles::Find($id);
        $inmueble->delete();
        return redirect()->route('inmueble.index');
   
    }
}