@include('layouts.header.header')
@extends('layouts.header.navbar')
@section('content')
<input type="text" class="hidden" name="folder" id="folder" value="{{ $inmuebles->folder }}">
<div class="container">

  <div class="main-content">
    <div class="row p-3">
      <div class="col-md-12 col-sm-12 p-3">
          <div class="card">
            <div class="card-header card-header-primary">
              <div class="row">
                <div class="col-md-6">
                  <div class="card-title"><h2 style="color: coral; text-transform: uppercase;">{{ $inmuebles->gestion }} </h2>
                    <h5 style="color: coral; text-transform: uppercase;">{{ $inmuebles->municipio }} - {{ $inmuebles->departamento }}</h5>
                      <p class="card-category">Vista detallada del inmueble</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="text-end">
                    <b><h2 style="color: coral;">${{ $inmuebles->valor }}</h2></b>
                  </div>
                </div>
              </div>
              <hr>
            </div>
            <div class="card-body">
              <link rel="stylesheet" type="text/css" href="assets/slider/css/style.css"/>
              <script type="text/javascript" src="assets/slider/js/jquery.js"></script>
              <div id="wowslider-container1">
                <div class="ws_images"><ul>
                  <div class="" id="uploaded_image">
                    
                    
  
                  </div>
    {
