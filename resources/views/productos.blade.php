@extends('layaout.master')
@section('contenido')
<div id="productos">
<div class="card">
  <h4 class="align-middle text-center">PRODUCTOS 
    <button class="btn btn-info btn-sm" @click="showModal()">
      <span class="material-icons">
        add
      </span>
    </button></h4><br>
  <div class="table-responsive">
    <table class="table align-items-center mb-0">
      <thead>
        <tr>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">NOMBRE</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">PRECIO</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">CANTIDAD</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">CATEGORIA</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">TIPO</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ACCIONES</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <!-- El v-for es para que recorra la tabla y vue pueda insertar los datos que son traidos
              desde la api -->
        <tr v-for="producto in productos">
          <td>
            <div class="d-flex px-2">
              
              <div class="my-auto">
                <h6 class="mb-0 text-xs">@{{producto.id}}</h6>
              </div>
            </div>
          </td>
          <td>
            <p class="text-xs font-weight-normal mb-0">@{{producto.nombre}}</p>
          </td>
          <td>
            <span class="badge badge-dot me-4">
              <i class="bg-info"></i>
              <span class="text-dark text-xs">@{{producto.precio}}</span>
            </span>
          </td>
          <td class="align-middle text-center">
            <div class="d-flex align-items-center">
              <span class="me-2 text-xs">@{{producto.cantidad}}</span>
            </div>
          </td>

          <td class="align-middle text-center">
            <div class="d-flex align-items-center">
              <span class="me-2 text-xs"></span>
            </div>
          </td>

          <td class="align-middle text-center">
            <div class="d-flex align-items-center">
              <span class="me-2 text-xs"></span>
            </div>
          </td>


          <td class="align-middle">
           <button class="btn btn-success btn-sm">
           <span class="material-icons">
              edit
              </span>
           </button>
           <button class="btn btn-danger btn-sm">
           <span class="material-icons">
              delete
              </span>
           </button>
          </td>
          
        </tr>
      </tbody>
    </table>
  </div>
  </div>
  <!-- FIN DE LA TABLA DE LOS PRODUCTOS -->
  <!-- AQUI ES DONDE EMPIEZA EL MODAL  -->
  <!-- Modal -->
<div class="modal fade" id="modalProducto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Asistente de Productos</h5>
        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form>
          <div class="form-row">
            <div class="col">
                <label>NOMBRE DEL PRODUCTO</label>
                <input type="text" class="form-control" placeholder="Ingrese el nombre del producto" ><br>
        </form>

        <form>
          <div class="form-row">
            <div class="col">
                <label>PRECIO DEL PRODUCTO</label>
                <input type="number" class="form-control" placeholder="Ingrese el precio del producto" ><br>
        </form>

        <form>
          <div class="form-row">
            <div class="col">
                <label>CANTIDAD DEL PRODUCTO</label>
                <input type="number" class="form-control" placeholder="Ingrese la cantidad del producto" ><br>
        </form>

        <form>
          <div class="form-row">
            <div class="col">
                <label>CATEGORIA DEL PRODUCTO</label>
                <select name="" id=""></select>
                <!-- Primo si puedes usar aqui el para que seleccione la categoria seria god -->
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn bg-gradient-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
  <!-- AQUI TERMINA EL MODAL -->
  </div>
  <!-- FIN DE VUE -->
@push('js')

<!-- API PRODUCTO JS -->
<script type="text/javascript" src="{{asset('js/apis/apiProducto.js')}}"></script>
@endpush

@endsection