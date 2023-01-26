@extends('layaout.master')
@section('contenido')
<!-- Aqui es donde se pondra todo el contenido de la pagina  -->
<div id="categorias">
<div class="card">
  <h4 class="align-middle text-center">CATEGORIAS 
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
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ACCIONES</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <!-- El v-for es para que recorra la tabla y vue pueda insertar los datos que son traidos
              desde la api -->
        <tr v-for="categoria in categorias">
          <td>
            <div class="d-flex px-2">
              <div class="my-auto">
                <h6 class="mb-0 text-xs">@{{categoria.id_categoria}}</h6>
              </div>
            </div>
          </td>
          <td>
            <p class="text-xs font-weight-normal mb-0">@{{categoria.nombre}}</p>
          </td>


          <td class="align-middle">
           <button class="btn btn-success btn-sm" @click="editProducto(categoria.id_categoria)">
           <span class="material-icons">
              edit
              </span>
           </button>
           <button class="btn btn-danger btn-sm" @click="deleteProducto(categoria.id_categoria)">
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
        <h5 class="modal-title font-weight-normal" id="exampleModalLabel" v-if="editando==false">Registro de Categorias</h5>
        <h5 class="modal-title font-weight-normal" id="exampleModalLabel" v-if="editando==true">Editando Categorias</h5>
        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form>
          <div class="form-row">
            <div class="col">
                <label>NOMBRE DE LA CATEGORIA</label>
                <input type="text" class="form-control" placeholder="Ingrese el nombre de la categoria" v-model="nombre"><br>
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
  </div>
  <!-- FIN DE VUE -->
@push('js')

<!-- API PRODUCTO JS -->
<script type="text/javascript" src="{{asset('js/apis/apiCategoria.js')}}"></script>
@endpush
@endsection