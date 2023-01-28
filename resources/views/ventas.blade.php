@extends('layaout.master')
@section('contenido')
<!-- Aqui es donde se pondra todo el contenido de la pagina  -->
<div class="venta">

    <div class="card">

        <h4 class="align-middle text-center">VENTAS
        </h4><br>
        <form >
            <div class="row">
                <div class="w-2"></div>
                <div class="col-md-4 ">
                <div class="input-group input-group-outline my-3">
                    <label class="form-label">Ingrese el código del producto</label>
                    <input type="number" class="form-control">
                </div>
                </div>
            </div>
        </form>
        
        <div class="table-responsive">

            <table class="table align-items-center mb-0">
                <thead>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">NOMBRE</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">PRECIO</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">CANTIDAD</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">TOTAL</th>

                <tbody>
                    <tr v-for="">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>

            </table>

        </div>

    </div>


    <hr>


    <div class="row">
        <div class="col-md-8"></div>

        <div class="col-md-4">

            <div class="card">

                <div class="card-body">
                    <table class="table align-items-center mb-0">
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Subtotal</th>
                            <td>DINEROS</td>
                        </tr>

                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">IVA</th>
                            <td>DINEROS</td>
                        </tr>

                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">TOTAL</th>
                            <td><b>DINEROS</b></td>
                        </tr>

                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Articulos</th>
                            <td>DINEROS</td>
                        </tr>

                    </table>
                </div>
                <button class="btn btn-gren">cobrar</button>
            </div>

        </div>

    </div>

</div>

@push('js')
<!-- AQUI PONEN LOS JS QUE USARAN SOLO EN ESTA VISTA -->
@endpush
@endsection