<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Models\inmuebles;
class ImageController extends Controller


{
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
    $output = '<div class="row">';
    
    $folder ='imagenes-inmueble/' . $folder . '/';
    foreach($images as $image)
    {
    $output .= '<div class="col-md-2">
                <img src="'.asset($folder . $image->getFilename()).'" class="img-thumbnail" width="150" height="150"/>
                <button type="button" class="btn btn-link remove_image" id="'.$image->getFilename().'">Remove</button>
            </div>';
     }
     $output .= '</div>';
     echo $output;
    }
    function delete_image(Request $request)
    {
        $folder = $request->get('folder');
        $folder ='imagenes-inmueble/' . $folder . '/';
     if($request->get('name'))
     {
        
      \File::delete(public_path($folder . $request->get('name')));
     }
    }
}