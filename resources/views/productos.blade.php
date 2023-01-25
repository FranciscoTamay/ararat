@extends('layaout.master')
@section('contenido')

<div class="card">
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
        <tr>
          <td>
            <div class="d-flex px-2">
              
              <div class="my-auto">
                <h6 class="mb-0 text-xs">1</h6>
              </div>
            </div>
          </td>
          <td>
            <p class="text-xs font-weight-normal mb-0">Pantalon Geraldino</p>
          </td>
          <td>
            <span class="badge badge-dot me-4">
              <i class="bg-info"></i>
              <span class="text-dark text-xs">$250</span>
            </span>
          </td>
          <td class="align-middle text-center">
            <div class="d-flex align-items-center">
              <span class="me-2 text-xs">60</span>
            </div>
          </td>

          <td class="align-middle text-center">
            <div class="d-flex align-items-center">
              <span class="me-2 text-xs">Caballero</span>
            </div>
          </td>

          <td class="align-middle text-center">
            <div class="d-flex align-items-center">
              <span class="me-2 text-xs">Pantalon</span>
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


@endsection