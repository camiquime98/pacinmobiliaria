<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Models\inmuebles;
class ImageController extends Controller


{


    public function index()
    {
        $inmuebles = inmuebles::all();
        return view('imageinmueble.index')->with('inmuebles',$inmuebles);
    }
    //  @return \Illuminate\Http\Response
  

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function upload_image(Request $request)
    {
        $image = $request->file('file');

        $folder = $request->input('folder');

        $path = "imagenes-inmueble";

        
        $pathimage = $path . $folder;

        $imageName = time().'.'.$image->extension();

        $image->move(public_path('imagenes-inmueble/' . $folder),$imageName);

        return response()->json(['success'=>$imageName]);
       
    }
    function fetch_image(Request $request)
    {
        $folder = $request->get('folder');
    $images = \File::allFiles(public_path('imagenes-inmueble/' . $folder));
    $output = '<div class="container"><div class="row">';
    
    $folder ='imagenes-inmueble/' . $folder . '/';
    foreach($images as $image)
    {
    $output .= '<div class="col-md-3">
                <img src="'.asset($folder . $image->getFilename()).'" class="img-thumbnail" style="max-width: 350px!important; max-height: 200px!important; width: 100%; height: 100%;"/>
                <button type="button" class="btn btn-link remove_image" id="'.$image->getFilename().'">Eliminar foto</button>
            </div>';
     }
     $output .= '</div></div>';
     echo $output;
    }git
    function delete_image(Request $request)
    {
        $folder = $request->get('folder');
        $folder ='imagenes-inmueble/' . $folder . '/';
     if($request->get('name'))
     {
        
      \File::delete(public_path($folder . $request->get('name')));
     }
    }



    function fetch_image_show(Request $request)
    {
    $folder = $request->get('folder');
    $images = \File::allFiles(public_path('imagenes-inmueble/' . $folder));
    $output = '<li>';
    
    $folder ='imagenes-inmueble/' . $folder . '/';
    foreach($images as $image)
    {
    $output .= '
                <img src="'.asset($folder . $image->getFilename()).'" class="" id="wows1_1"/>';
     }
     $output .= '</li>';
     echo $output;
    
    }

    // <img  class="img-thumbnail" style="max-width: 350px!important; max-height: 200px!important; width: 100%; height: 100%;"/>


}