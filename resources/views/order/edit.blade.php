@extends('layout.index')


@section('content')
<section class="degradado">
  <div class="container min-vh-10 py-2">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-10">
        <div class="card bg-dark text-white" >
          <div class="card-body p-5">
            <h3 class="fw-bold  text-uppercase">Editar Order</h3>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @elseif(Session::has('msj_order'))
                <div class="alert alert-danger">
                    {{session('msj_order')}}
                </div>
            @endif
            <form action="{{route('order.update', $order->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row mt-5">
                    <div class="col-6">
                        <div class="form-outline form-white mb-4 ">
                            <label class="form-label">Articulo *</label>
                            <input type="text"
                            class="form-control form-control-md"
                            name="articulo"
                            required="required"
                            placeholder="Nombre del articulo"
                            value="{{ $order->OrderDetail->articulo}}"
                            />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-outline form-white mb-4 ">
                            <label class="form-label">Precio *</label>
                            <input type="number"
                            step="0.01"
                            min="0.01"
                            class="form-control form-control-md"
                            name="precio"
                            required="required"
                            placeholder="Precio del articulo"
                            value="{{ $order->OrderDetail->precio}}"
                            />
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-outline form-white mb-4 ">
                            <label class="form-label">Cantidad *</label>
                            <input type="number"
                            class="form-control form-control-md"
                            name="cantidad"
                            required="required"
                            placeholder="Cuantos articulos"
                            value="{{ $order->OrderDetail->cantidad}}"
                            />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-outline form-white pb-4">
                        <label class="form-label" for="fecha">Fecha *</label>
                        <input type="date"
                            name="fecha"
                            id="fecha"
                            class="form-control form-control-md"
                            required="required"
                            value="{{ $order->fecha }}"
                            />
                    </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <div class="form-outline form-white mb-4 ">
                            <label class="form-label">Total *</label>
                            <input type="number"
                            class="form-control form-control-md"
                            name="total"
                            required="required"

                            value="{{ $order->OrderDetail->total}}"
                            disabled
                            />
                        </div>
                    </div>
                    <div class="col-6 offset-2">
                        <div class="form-outline form-white mb-4 ">
                            <label class="form-label">Monto *</label>
                            <input type="number"
                            step="0.01"
                            min="0.01"
                            class="form-control form-control-md"
                            name="monto"
                            required="required"
                            placeholder="Debe ser mayor al total"
                            value="{{ $order->OrderDetail->total}}"
                            />
                        </div>
                    </div>
                </div>


                <!-- <div class="form-outline form-white pb-5">
                    <label class="form-label" for="estado">Estado</label>
                    <select name="estado" id="estado" class="form-control">
                        @if($order->estado === 0)
                        <option value="0" selected>Pendiente</option>
                        <option value="1">Procesado</option>

                        @else
                        <option value="0">Pendiente</option>
                        <option value="1" selected>Procesado</option>
                        @endif
                    </select>
                </div> -->

                <span class="mb-0">Regresar a la pagina principal <a href="{{route('home')}}" class="text-white-50 fw-bold">Inicio</a>
                </span>
                <button class="btn btn-outline-light btn-md px-5 mb-3 float-end" type="submit">Guardar</button>
            </form>



          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
