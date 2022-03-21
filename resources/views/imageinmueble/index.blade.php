<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Imagenes</th>
          {{-- <th scope="col">Propietario</th>
          <th scope="col">Cedula</th>
          <th scope="col">N° Celular</th>
          <th scope="col">Departamento/inmueble</th>
          <th scope="col">Barrio</th>
          <th scope="col">Zona</th>
          <th scope="col">Tipo inmueble</th>
          <th scope="col">Gestion</th>
          <th scope="col">Valor</th> --}}
          <th class="text-right">Acciones</th>
        </tr>
      </thead>
      <tbody>
          @foreach($inmuebles as $inmueble)
        <tr>
          <td><img src="{{ $inmueble->folder }}" class="img-thumbnail" width="150" height="150"/></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>
{{-- <html>

    <head>
    
      <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
      <title> Js</title>
    
    
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    
    
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    
    
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" />
    
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
    
    
    </head>

    <body>

      <div class="container-fluid">
 
          <br />
        <h3 align="center"> Laravel 8 Dropzone Image Upload Example Tutorial </h3>
 
        <br />
          <div class="panel panel-default">

            <div class="panel-heading">
              <h3 class="panel-title">Select Image</h3>  
            </div>
            <div class="panel-body">
              <form id="dropzoneForm" class="dropzone" action="{{ route('dropzone.store') }}" accept-charset="UTF-8" enctype="multipart/form-data">
                @csrf
              </form>
              <div align="center">
                <button type="button" class="btn btn-info" id="submit-all">Upload</button>
              </div>
            </div>
          </div>
          <br />
    
          <div class="panel panel-default">
        <div class="panel-heading">
              <h3 class="panel-title">Uploaded Image</h3>
            </div>
            <div class="panel-body" id="uploaded_image">
            </div>
          </div>
        </div>
    </body>
    
    
    </html>
    
    
     
    
    
    <script type="text/javascript">
    
    
     
    
    
      Dropzone.options.dropzoneForm = {
    
    
        autoProcessQueue : false,
    
    
        acceptedFiles : ".png,.jpg,.gif,.bmp,.jpeg",
    
    
     
    
    
        init:function(){
    
    
          var submitButton = document.querySelector("#submit-all");
    
    
          myDropzone = this;
    
    
     
    
    
          submitButton.addEventListener('click', function(){
    
    
            myDropzone.processQueue();
    
    
          });
    
    
     
    
    
          this.on("complete", function(){
    
    
            if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0)
    
    
            {
    
    
              var _this = this;
    
    
              _this.removeAllFiles();
    
    
            }
    
    
            load_images();
    
    
          });
    
    
     
    
    
        }
    
    
     
    
    
      };
    
    
     
    
    
      load_images();
    
    
     
    
    
      function load_images()
    
    
      {
    
    
        $.ajax({
    
    
          url:"{{ route('imageinmueble.fetch_image') }}",
    
    
          success:function(data)
    
    
          {
    
    
            $('#uploaded_image').html(data);
    
    
          }
    
    
        })
    
    
      }
    
    
     
    
    
      $(document).on('click', '.remove_image', function(){
    
    
        var name = $(this).attr('id');
    
    
        $.ajax({
    
    
          url:"{{ route('imageinmueble.delete_image') }}",
    
    
          data:{name : name},
    
    
          success:function(data){
    
    
            load_images();
    
    
          }
    
    
        })
    
    
      });
    
    
     
    
    
    </script> --}}