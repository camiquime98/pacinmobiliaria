@extends('layouts.header.navbarinicio')
@section('content')
<style>
  .fondo-index-inmueble
  {
    background: linear-gradient(90deg, rgba(255, 255, 255, 0.897)100%, rgba(255, 255, 255, 0.897)10%), url('/assets/images/inmuebles-admin.jpg');
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover;
    height: 100vh;
  }
</style>
<div class="fondo-index-inmueble">
    <livewire:inmueble>
</div>

  @endsection