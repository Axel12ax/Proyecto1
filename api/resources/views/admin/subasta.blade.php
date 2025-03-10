@extends('admin.layouts.main')

@section('contenido')
<div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Subasta</h3></div>
              <div class="col-sm-6">
              
              </div>
            </div>
            <!--end::Row-->
          </div>
           <!--end::Container-->
        </div>
        
        <div class="app-content">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Precio Base</th>
      <th scope="col">Precio Minimo</th>
      <th scope="col">Fecah de inicio</th>
      <th scope="col">Fecah de final</th>
    <th scope="col">Estado</th>
      <th scope="col">Usuario</th>
      <th scope="col">vehiculo</th>
      </th>

    </tr>
  </thead>
  <tbody>
    @foreach($subastas as $sub)
    <tr>
      <th scope="row">{{$sub->id}}</th>
      <td>{{$sub->precio_base}}</td>
      <td>{{$sub->precio_minimo}}</td>
      <td>{{$sub->  fecha_inicio}}</td>
      <td>{{$sub->fecha_fin}}</td>
      <td>{{$sub->estado}}</td>
      <td>{{$sub->user->name}}</td>
      <td>{{$sub->vehiculo->NSerie}}</td>

    </tr>
    @endforeach
  </tbody>
</table>
<h1>Pujas</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Precio</th>
      <th scope="col">Subasta</th>
      <th scope="col">vehiculo</th>
      <th scope="col">user</th>
      </th>

    </tr>
  </thead>
  <tbody>
    @foreach($pujas as $puj)
    <tr>
      <th scope="row">{{$puj->id}}</th>
        <td>{{$puj->precio}}</td>
        <td>{{$puj->id_subasta}}</td>  
      <td>{{$puj->vehiculo->NSerie}}</td>
      <td>{{$puj->user->name}}</td>

    </tr>
    @endforeach
  </tbody>
</table>


        </div>
@endsection