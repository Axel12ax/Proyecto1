@extends('admin.layouts.main')

@section('contenido')
<div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Ventas</h3></div>
              <div class="col-sm-6">
                
              </div>
            </div>
            <!--end::Row-->
          </div>
           <!--end::Container-->
        </div>

        
        <div class="app-content">
        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Numero de Serie</th>
      <th scope="col">Precio</th>
      <th scope="col">Usuario</th>
    </tr>
  </thead>
  <tbody>
    @foreach($ventas as $venta)
    <tr>
      <td>{{$venta->id}}</td>
      <td>{{$venta->id_vehiculo}}</td>
      <td>{{$venta->precio}}</td>
      <td>{{$venta->id_user}}</td>
    </tr>
    @endforeach
  </tbody>
</table>     
        </div>
@endsection