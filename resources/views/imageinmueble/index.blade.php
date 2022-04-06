
@extends('layouts.header.navbarinicio')
@section('content')
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title> Js</title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
    </head>
    <body>
      <div class="container-fluid" style="background: linear-gradient(180deg, rgba(255, 255, 255, 0.904)50%,rgba(255, 255, 255, 0.925)100%);">
          <br />
        <h3 align="center"> Carga las imagenes y verifica antes de guardar </h3>
        <br />
          <div class="panel panel-default" style="margin-top: 50px; background: rgba(255, 255, 255, 0.349);">
            <div class="panel-heading" style="background: rgb(255, 255, 255);">
              <b><h1 style="color: #0d6efd;">Agregar fotos</h1></b>
            </div>
            <div class="panel-body">
             
              <form id="dropzoneForm" class="dropzone text-dark" action="{{ route('dropzone.store') }}" accept-charset="UTF-8" enctype="multipart/form-data" style="background: #e8fcffaf; border:none; border-radius:20px;">
                @csrf
                <div class="dz-message" data-dz-message><span>Haz clic aqui y carga las fotos que deseas</span></div>
                <input type="text" class="hidden" name="folder" id="folder" value="{{ $inmuebles->folder }}">
              </form><br>
              <div align="center">
                <button type="button" class="w-25 btn" id="submit-all" style="background: transparent; border: 1px solid rgb(14, 226, 145); color: rgb(14, 226, 145);">CARGAR</button>
              </div><br>
              <div align="center">
                <button type="button" class="w-25 btn " id="submit-all" style="background: transparent; color: rgb(255, 135, 135); border: 1px solid rgb(255, 135, 135);"><a class=" " href="{{ route('inmueble.index') }}">CANCELAR</a></button>
              </div>
            </div>
          
          </div>
          <br />
    
          <div class="panel panel-default">
        <div class="panel-heading">
              <h3 class="panel-title">Imagenes cargadas con exito</h3>
            </div>
            <div class="panel-body" id="uploaded_image">
  
            </div>
          </div>
        </div>
    </body>
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
      var folder =document.getElementById('folder').value;
        $.ajax({
       data:{folder : folder},
          url:"{{ route('imageinmueble.fetch_image') }}",
          success:function(data)
          {
            $('#uploaded_image').html(data);
          }
        })
      }
    
    
     
    
    
      $(document).on('click', '.remove_image', function(){
        var folder = document.getElementById('folder').value;
        var name = $(this).attr('id');
        $.ajax({
          url:"{{ route('imageinmueble.delete_image') }}",
          data:{name : name, folder : folder},
          success:function(data){
            load_images();
          }
        })
      });
    </script>
@endsection

