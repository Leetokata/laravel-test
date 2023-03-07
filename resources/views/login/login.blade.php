@extends('layout.index')


@section('content')
<section class="degradado">
  <div class="container min-vh-10 py-2">
    <div class="row d-flex justify-content-center align-items-center h-100 mt-4">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" >
          <div class="card-body p-5 text-center">

            <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
            <p class="text-white-50">Por favor introduzca el Email y Clave</p>
            @if(Session::has('mensaje'))
                <p class="text-danger text-capitalize fs-4">{{ Session('mensaje')}}</p>

            @endif

            <form action="{{route('authenticate')}}" method="POST">
                @csrf
                <div class="form-outline form-white mb-4">
                    <input type="email" id="email" class="form-control form-control-lg" name="email" value="ldmorles@gmail.com"/>
                    <label class="form-label" for="email">Email</label>
                </div>

                <div class="form-outline form-white mb-4">
                    <input type="password" name="clave" id="clave" class="form-control form-control-lg" value="admin" />
                    <label class="form-label" for="clave">Clave</label>
                </div>

                <button class="btn btn-outline-light btn-md px-5 mb-3" type="submit">Login</button>
            </form>

            <div>
              <p class="mb-0">Regresar a la pagina principal <a href="{{route('home')}}" class="text-white-50 fw-bold">Inicio</a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
