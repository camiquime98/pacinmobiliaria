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
        $lote = $request->get('terreno');
        $bodega = $request->get('bodega');
        $finca = $request->get('finca');
        $apartaestudio = $request->get('apartaestudio');
        $casalote = $request->get('casalote'); 

        $inmuebles = '';
        $casas = 'x';
        $apartamentos = 'x';
        $casacampestres = 'x';
        $lotes = 'x';
        $bodegas = 'x';
        $fincas = 'x';
        $apartaestudios = 'x';
        $casalotes = 'x';
        $any =2;
        $contador = 2;
        $filtro = 0;
       
        

         
        $output ="";


    if ($casa == 1) {
        $casas = "Casa";
        $filtro = 1;
        
    }

    if ($apartamento == 1) {
        $apartamentos = "Apartamento";
        $filtro = 1;
        
    }

    if ($casacampestre == 1) {
        $casacampestres = "Casacampreste";
        $filtro = 1;
        
    }

    if ($lote == 1) {
        $lotes = "Terreno";
        $filtro = 1;
        
    }

    if ($bodega == 1) {
        $bodegas = "Bodega";
        $filtro = 1;
        
    }

    if ($finca == 1) {
        $fincas = "finca";
        $filtro = 1;
        
    }

    if ($apartaestudio == 1) {
        $apartaestudios = "apartaestudio";
        $filtro = 1;
        
    }

    if ($casalote == 1) {
        $casalotes = "casalote";
        $filtro = 1;
        
    }

    if ($filtro == 1) {
        $inmuebles = DB::table('inmuebles')
        ->where('tipoinmueble', $casas)
        ->orWhere('tipoinmueble', $apartamentos)
        ->orWhere('tipoinmueble', $casacampestres)
        ->orWhere('tipoinmueble', $lotes)
        ->orWhere('tipoinmueble', $bodegas)
        ->orWhere('tipoinmueble', $fincas)
        ->orWhere('tipoinmueble', $casalotes)
        ->get();
    }
    if ($filtro == 0) {
        $inmuebles = DB::table('inmuebles')
        ->where('municipio', 'like', '%'.$busqueda.'%')
        ->get();
    }
   


        if(isset($busqueda)){
        $output ="No se han encontrado resultados para esa ubicación";
    // if ($any==1) {
    //      }
    //     else{

    // //         $inmuebles=DB::table('inmuebles')
    // //     ->where('municipio', 'LIKE','%'.$busqueda.'%')
    // // ->get();  


    // // $contador=DB::table('inmuebles')
   
    // //         ->where('municipio', 'LIKE','%'.$busqueda.'%')
    // //     ->count(); 

    //     }
        
    
    if($contador<1){
        $output ="No se han encontrado resultados para esa ubicación"; 
    }

    else
    {
     

        $output ="";
        foreach ($inmuebles as $key => $inmueble) {

            $municipio = $inmueble->municipio;
            if(stristr($municipio, $busqueda))
            {
            $id = "'".$inmueble->id."'";

             $output.='
            <div class="col-md-3 col-sm-12" style="margin-bottom: 3%;">
                    <div class="product-men">
                      <div class="men-pro-item simpleCart_shelfItem" style="border-radius: 10px;">
                         
                        <div class="men-thumb-item">
                            <a onclick="miFunc('.$id.')"><img src="imagenes-inmueble/'.$inmueble->folder.'/'.$inmueble->imagenuna.'" alt="" class="pro-image-front" style="border-top-left-radius: 10px; border-top-right-radius: 10px;"></a>
                            <a onclick="miFunc('.$id.')"><img src="imagenes-inmueble/'.$inmueble->folder.'/'.$inmueble->imagendos.'" alt="" class="pro-image-back" style="border-top-left-radius: 10px; border-top-right-radius: 10px;"></a>
                                  <div class="men-cart-pro">
                                      <div class="inner-men-cart-pro">
                                          <a onclick="miFunc('.$id.')" class="link-product-add-cart">'.$inmueble->municipio.' - '.$inmueble->departamento.' 
										</a>
                                      </div>
                                  </div>
                                  <a onclick="miFunc('.$id.')" class=""><span class="product-new-top">'.$inmueble->gestion.'</span></a>
                                  
                          </div>
                          <div class="item-info-product" style="margin-top: 10px;">
							<a onclick="miFunc('.$id.')"> 
							<div class="row" style=""> 
								  <div class="col-md-4 m-0 p-0">
									  <h5 style="font-weight: 300; font-size: 0.7em;">Habitaciones</h5>
									  <p style="font-weight: 300; font-size: 0.7em;">'.$inmueble->alcobas.'</p></div>
								  <div class="col-md-4 m-0 p-0">
									  <h5 style="font-weight: 300; font-size: 0.7em;">Baños</h5>
									  <p style="font-weight: 300; font-size: 0.7em;">'.$inmueble->banos.'</p></div>
								  <div class="col-md-4 m-0 p-0">
									  <h5 style="font-weight: 300; font-size: 0.7em;">Area</h5>
									<p style="font-weight: 300; font-size: 0.7em;">'.$inmueble->area.'</p></div>
							  </div>
							</a><hr>
								<center><h5>ZONA - '.$inmueble->zona.'</h5></center>
                              <h4><p class="p-1" style="text-align: justify"></p></h4>
                              <div class="info-product-price text-center">
                                
                                  <span class="item_price">$'.$inmueble->valor .'</span>
                                
                                  
                              </div>
                              <center><a onclick="miFunc('.$id.')" class="item_add single-item hvr-outline-out button2">'.$inmueble->tipoinmueble .'</a></center>								
                          </div>
                      </div>
					 
                  </div>
                  </div>
                  


            ';
            }
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