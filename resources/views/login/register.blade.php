@extends('layout.index')


@section('content')
<section class="degradado">
  <div class="container min-vh-10 py-2">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-8">
        <div class="card bg-dark text-white" >
          <div class="card-body p-5">
            <h2 class="fw-bold  text-uppercase">Registro</h2>
            <form action="{{route('register.store')}}" method="POST">
                @csrf

                <div class="row">
                    <div class="col-6">
                        <div class="form-outline form-white mb-4">
                            <label class="form-label" for="nombre">Nombre</label>
                            <input type="text" id="nombre" class="form-control form-control-md" name="nombre" placeholder="Ingrese su nombre"/>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-outline form-white mb-4">
                            <label class="form-label" for="apellido">Apellido</label>
                            <input type="text" id="apellido" class="form-control form-control-md" name="apellido" placeholder="Ingrese su apellido"/>
                        </div>
                    </div>
                </div>
                <div class="form-outline form-white mb-4">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" id="email" class="form-control form-control-md" name="email" value="ldmorles@gmail.com"/>
                </div>

                <div class="form-outline form-white mb-4">
                    <label class="form-label" for="clave">Clave</label>
                    <input type="password" name="clave" id="clave" class="form-control form-control-md" value="admin" />
                </div>
                <div class="form-outline form-white mb-4">
                    <label class="form-label" for="clave2">Confirmar Clave</label>
                    <input type="password" name="clave2" id="clave2" class="form-control form-control-md" value="admin" />
                </div>

                <button class="btn btn-outline-light btn-md px-5 mb-3" type="submit">Registrar</button>
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
