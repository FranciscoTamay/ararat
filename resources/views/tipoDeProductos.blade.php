@extends('layaout.master')
@section('contenido')
<!-- Aqui es donde se pondra todo el contenido de la pagina  -->
<div id="tipo_productos">
<div class="card">
  <h4 class="align-middle text-center">TIPO DE PRODUCTOS 
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
          <th></th>
        </tr>
      </thead>
      <tbody>
        <!-- El v-for es para que recorra la tabla y vue pueda insertar los datos que son traidos
              desde la api -->
              <tr v-for="tipo in tipo_productos">
              <td>
            <div class="d-flex px-2">
              
              <div class="my-auto">
                <h6 class="mb-0 text-xs">@{{tipo.id_tipoProducto}}</h6>
              </div>
            </div>
          </td>
          <td>
            <p class="text-xs font-weight-normal mb-0">@{{tipo.nombre}}</p>
          </td>

          
          <td class="align-middle">
           <button class="btn btn-success btn-sm" @click="editProducto(tipo.id_tipoProducto)">
           <span class="material-icons">
              edit
              </span>
           </button>
           <button class="btn btn-danger btn-sm" @click="deleteProducto(tipo.id_tipoProducto)">
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
  <div class="modal fade" id="modaltipoProducto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-normal" id="exampleModalLabel" v-if="editando==false">Registro de Tipo de Productos</h5>
        <h5 class="modal-title font-weight-normal" id="exampleModalLabel" v-if="editando==true">Editando Tipo de Productos</h5>
        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form>
          <div class="form-row">
            <div class="col">
                <label>TIPO DE PRODUCTO</label>
                <input type="text" class="form-control" placeholder="Ingrese el nombre del producto" v-model="nombre"><br>
        </form>

       

      </div>
      <div class="modal-footer">
        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn bg-gradient-primary" @click="addProducto()" v-if="editando==false">Save changes</button>
        <button type="button" class="btn bg-gradient-primary" @click="updateProducto()" v-if="editando==true">Save changes</button>
      </div>
    </div>
  </div>
</div>
  <!-- AQUI TERMINA EL MODAL -->



  <!-- fin vue -->
  </div>

@push('js')
<!-- AQUI PONEN LOS JS QUE USARAN SOLO EN ESTA VISTA -->
<!-- API PRODUCTO JS -->
<script type="text/javascript" src="{{asset('js/apis/Producto.js')}}"></script>
@endpush
@endsection