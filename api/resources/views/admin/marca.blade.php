@extends('admin.layouts.main')

@section('contenido')
<div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Seeaders</h3>

              <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#editarC">Agregar</button>
            </div>
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

<!-- Modal -->
<div class="modal fade" id="editarC" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar marca</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3">
        <form class="form-floating mb-3" enctype="multipart/form-data" method="post" action="{{url('admin/marca')}}">
@csrf
@method('POST')
  <label for="formGroupExampleInput" class="form-label">Marcas</label>
  <input type="text" class="form-control" name="nombre" id="formGroupExampleInput" placeholder="Example input placeholder">
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit " class="btn btn-primary">Save changes</button>
      </form>
      </div>
    </div>
  </div>
</div>

        </div>
@endsection