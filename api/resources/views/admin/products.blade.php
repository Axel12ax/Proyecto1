@extends('admin.layouts.main')

@section('contenido')
<div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Seeaders</h3></div>
              <div class="col-sm-6">
            
              </div>
            </div>
            <!--end::Row-->
          </div>
           <!--end::Container-->
        </div>
        
        <div class="app-content">
          <div class="row">
        <div class="col-4">
          <h1>Categorias</h1>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombres</th>
     </tr>
  </thead>
  @foreach($categorias as $CATE)
  <tbody>
    <tr>
      <th scope="row">{{$CATE->id}}</th>
      <td>{{$CATE->name}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
<div class="col-4">
  <h1>Marcas</h1>
<table class="table">
  
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombres</th>
     </tr>
  </thead>
  @foreach($Marca as $MARCA)
  <tbody>
    <tr>
      <th scope="row">{{$MARCA->id}}</th>
      <td>{{$MARCA->name}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
        </div>
@endsection