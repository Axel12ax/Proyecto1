@extends('admin.layouts.main')

@section('contenido')
<div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Vehiculos</h3></div>
              <div class="col-sm-6">
              <button type="submit" class="btn btn-primary "  data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              Agregar Vehiculo
              </button>


              </div>
            </div>
            <!--end::Row-->
          </div>
           <!--end::Container-->
        </div>
        <div class="app-content m-4">
          <!-- Button trigger modal -->
           


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Agregar Vehiculo</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="row g-3" action="{{url('admin/vehiculo')}}" enctype="multipart/form-data" method="POST">
        @csrf
  <div class="col-md-6">
    <label for="" class="form-label">Modelo</label>
    <input  name="modelo" type="text" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="" class="form-label">Numero de Serie</label>
    <input name="NSerie" type="text" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="" class="form-label">Año</label>
    <input name="año" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-12">
    <label for="" class="form-label">color</label>
    <input name="color" type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <label for="" class="form-label">Imagen</label>
  <div class="input-group">
  <input name="imagen" type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
  <button nclass="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Button</button>
</div>
  <div class="col-md-6">
    <label for="" class="form-label">Kilometros</label>
    <input name="kilometros" type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4">
   
    <label for="" class="form-label">Marcas</label>
    <select name="id_categoria" id="" class="form-select">
    @foreach ($CATEGORIA as $Categoria)
      <option value="{{$Categoria->id}}" >{{$Categoria->name}}</option>
      @endforeach
      <option>...</option>
    </select>
  </div>
  <div class="col-md-4">
   
    <label for="" class="form-label">Marcas</label>
    <select name="id_marca" id="" class="form-select">
    @foreach ($MARCA as $marca)
      <option value="{{$marca->id}}" >{{$marca->name}}</option>
      @endforeach
      <option>...</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="" class="form-label">Precio</label>
    <input name="precio" type="text" class="form-control" id="inputZip">
  </div>

  <div class="col-12">
    <label for="" class="form-label">Descripcion</label>
    <input  name="descripcion" type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="col-12">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Agregar Vehiculo</button>
  </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>
         
        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Usuario</th>
      <th scope="col">Numero de Serie</th>
      <th scope="col">Marca</th>
      <th scope="col">Modelo</th>
      <th scope="col">Categoria</th>
      <th scope="col">Color</th>
      <th scope="col">Año</th>
      <th scope="col">Imagen</th>
      <th scope="col">Precio</th>
      <th scope="col">Kilometros</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Modificar</th>
    </tr>
  </thead>
  <tbody>
   @foreach($vehiculos as $ve)
    <tr>
      <td>{{$ve->id}}</td>
      <td>{{$ve->user->name}}</td>
      <td>{{$ve->NSerie}}
        
      <td>{{$ve->marca->name}}</td>
      <td>{{$ve->modelo}}</td>
      <td>{{$ve->categoria->name}}</td>
     
      <td>{{$ve->color}}</td>
      <td>{{$ve->año}}</td>
      <td>
        <img src="{{asset('img_V/'.$ve->img)}}" width="70px" alt="">
      </td>
      <td>$ {{$ve->precio}}</td>
      <td>{{$ve->kilometros}} Km</td>
      <td>{{$ve->descripcion}}</td>
      <td>
      
                <button type="submit" class="btn btn-outline-secondary "  data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
                Editar
              </button>
                          
  <form action="{{url('admin/vehiculo/'.$ve->id)}}" method="POST" style="display:inline;" onsubmit="return confirm('¿Estás seguro de eliminar este vehículo?');">
            @csrf
            @method('DELETE')
  <button class="btn btn-outline-danger" type="submit">Eliminar</button>
  </form>  
</div></td>  
    </tr>
    @endforeach
  </tbody>
</table>

<div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="row g-3" action="{{url('admin/vehiculo/'.$ve->id)}}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('POST')
  <div class="col-md-6">
    <label for="" class="form-label">Modelo</label>
    <input  name="modelo" type="text" value="{{$ve->modelo}}" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="" class="form-label">Numero de Serie</label>
    <input name="NSerie" type="text" value="{{$ve->NSerie}}" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="" class="form-label">Año</label>
    <input name="año" type="text" value="{{$ve->año}}" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-12">
    <label for="" class="form-label">color</label>
    <input name="color" type="text" value="{{$ve->color}}" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <label for="" class="form-label">Imagen</label>
  <div class="input-group">
  <input name="imagen" value="{{$ve->imagen}}" type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
</div>
  <div class="col-md-6">
    <label for="" class="form-label">Kilometros</label>
    <input name="kilometros" value="{{$ve->kilometros}}" type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4">
   
    <label for="" class="form-label">Marcas</label>
    <select name="id_categoria" id="" class="form-select">
    @foreach ($CATEGORIA as $Categoria)
      <option value="{{$Categoria->id}}" >{{$Categoria->name}}</option>
      @endforeach
      <option>...</option>
    </select>
  </div>
  <div class="col-md-4">
   
    <label for="" class="form-label">Marcas</label>
    <select name="id_marca" id="" class="form-select">
    @foreach ($MARCA as $marca)
      <option value="{{$marca->id}}" >{{$marca->name}}</option>
      @endforeach
      <option>...</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="" class="form-label">Precio</label>
    <input name="precio" value="{{$ve->precio}}" type="text" class="form-control" id="inputZip">
  </div>

  <div class="col-12">
    <label for="" class="form-label">Descripcion</label>
    <input  name="descripcion" value="{{$ve->descripcion}}" type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="col-12">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Editar Vehiculo</button>
  </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

        </div>
@endsection