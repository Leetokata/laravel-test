@extends('layout.index')


@section('content')
<section class="degradado">
  <div class="container min-vh-10 py-2">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12">
        <div class="card bg-dark text-white" >
          <div class="card-body p-5">
            <h3 class="fw-bold  text-uppercase">Subir Archivos PDF</h3>
            <form action="{{route('file.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mt-5">
                    <div class="col-6">
                        <div class="form-outline form-white mb-4 ">
                            <label class="form-label">Selecciona varios archivos PDF</label>
                            <input type="file"
                            class="form-control form-control-md"
                            name="files[]"
                            required="required"
                            multiple
                            />
                        </div>
                    </div>
                    <div class="col-6">
                    <button class="btn btn-outline-light btn-md px-5 mt-4 float-end" type="submit">Guardar</button>
                    </div>
                </div>


                <span class="mb-0">Regresar a la pagina principal <a href="{{route('home')}}" class="text-white-50 fw-bold">Inicio</a>
                </span>

            </form>
          </div>
            @if ($errors->any())
              <div class="row">
                <div class="col-6 offset-3">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
              </div>
            @endif
            <div class="row">
                <div class="col-12">
                    <table class="table table-bordered table-dark table-bordered text-center">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Path</th>
                                <th>Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($files))
                                @foreach($files as $file)
                                    <tr>
                                        <td>{{$file->id}}</td>
                                        <td>{{$file->path}}</td>
                                        <td>
                                            <form action="{{route('file.destroy', $file->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                                <button class="btn btn-sm btn-danger">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            @endif
                        </tbody>
                    </table>
                </div>
            </div>



        </div>


    </div>




    </div>
  </div>
</section>
@endsection
