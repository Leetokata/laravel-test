@extends('layout.index')


@section('content')
<section class="degradado">
  <div class="container min-vh-10 py-2">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12">
        <div class="card bg-dark text-white" >
          <div class="card-body p-5">
            <h3 class="fw-bold  text-uppercase">Crear una nueva Orden</h3>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('order.store')}}" method="POST">
                @csrf
                <div class="row mt-5">
                    <div class="col-6">
                        <div class="form-outline form-white mb-4 ">
                            <label class="form-label">Articulo *</label>
                            <input type="text"
                            class="form-control form-control-md"
                            name="articulo"
                            required="required"
                            placeholder="Nombre del articulo"
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
                            />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-outline form-white pb-4">
                        <label class="form-label" for="fecha">Fecha *</label>
                        <input type="date" name="fecha" id="fecha" class="form-control form-control-md" required="required" />
                    </div>
                    </div>
                </div>

                <span class="mb-0">Regresar a la pagina principal <a href="{{route('home')}}" class="text-white-50 fw-bold">Inicio</a>
                </span>
                <button class="btn btn-outline-light btn-md px-5 mb-3 float-end" type="submit">Crear</button>
            </form>



          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
