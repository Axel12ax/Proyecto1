@extends('admin.layouts.main')

@section('contenido')
<div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Usuarios</h3></div>
              <div class="col-sm-6">
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Agregar Usuario
</button>

              </div>
            </div>
            <!--end::Row-->
          </div>
           <!--end::Container-->
        </div>

        <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Usuario</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="row g-3" action="{{url('admin/users')}}" enctype="multipart/form-data" method="POST">
        @csrf
      <div class="modal-body">
      <div class="form-floating mb-3" enctype="multipart/form-data" method="post" action="{{url('admin/users')}}">
  <input name="name" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInput">Nombres</label>
</div>
      <div class="form-floating mb-3">
  <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInput">Email address</label>
</div>
<div class="form-floating mb-3">
  <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
  <label for="floatingPassword">Password</label>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </form>
      </div>
    </div>
  </div>
</div>
        <div class="app-content">
        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">nombre</th>
      <th scope="col">Correo</th>
      <th scope="col">Modificar</th>
    
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <td>{{$user->id}}</td>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>
        <div class="d-grid gap-2 d-md-block">
   

        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
  Editar Usuario
</button>

  <form action="{{url('admin/users/'.$user->id)}}" method="POST"  style="display:inline;" onsubmit="return confirm('¿Estás seguro de eliminar este Usuario?');">
  @csrf
  @method('DELETE')
  
  <button class="btn btn-outline-danger" type="submit">Eliminar</button>
</div>
</form>
</td>  
    </tr>
    @endforeach
  </tbody>
</table>
<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Titulo</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="row g-3" action="{{url('admin/users/'.$user->id)}}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('POST')
      <div class="modal-body">
      <div class="form-floating mb-3" enctype="multipart/form-data" method="post" action="{{url('admin/users')}}">
  <input name="name" type="text" value="{{$user->name}}" class="form-control" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInput">Nombres</label>
</div>
      <div class="form-floating mb-3">
  <input name="email" type="email" value="{{$user->email}}" class="form-control" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInput">Email address</label>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
      </form>
      </div>
    </div>
  </div>
</div>

        </div>
@endsection