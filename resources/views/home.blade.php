@extends('layout.index')

@section('content')
<div class=" background">
    <div class="banner d-flex justify-content-end mx-2">
        @if(auth()->check())

         <form action="{{ route('logout') }}" method="POST">
         @csrf
         <button type="submit" class="btn btn-outline-info">Cerrar Sesion</button>

         </form>
        @else
         <span><i class='bx bx-user'></i> Usuario no Autenticado</span>
        @endif
    </div>


    <div class="flex-container">

            <div class="contenedor col-12 col-md-5">
                <h1 class='titulo mb-5'>Bienvenidos</h1>
                <div class="button-content">
                    <a class="btn btn-outline-default mx-3" href="{{url('/login')}}">Login</a>
                    <a class="btn btn-outline-default mx-3" href="{{url('/register')}}">Register</a>
                </div>


            </div>

        <div class="col-12 col-md-7">
            <h2>Seccion 1 <span class="fs-5 ms-5">Validar Conocimientos API con Laravel</span></h2>
            <h4>Lista de Usuarios</h4>
            @if(isset($usuarios))

            <div class="col-10">
                <table class="table table-dark table-bordered text-center">
                    <thead>
                        <tr >
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($usuarios as $user)
                            <tr>
                                <td>{{$user->nombre}}</td>
                                <td>{{$user->apellido}}</td>
                                <td>{{$user->email}}</td>
                            </tr>
                         @endforeach
                    </tbody>
                </table>

            </div>


            @endif

        </div>
    </div>
</div>

<div class="section-2 pt-4">
    <section class="container set-margin bg-dark">
        <div class="row">
            <div class="col-9 text-center">
                <h2 class="py-3">Seccion 2 <span class='fs-6 text'>CRUD Orders y Orders_Detail</span></h2>
            </div>
            <div class="col-3 text-center">

                <a href="{{route('order.create')}}" class="btn btn-outline-primary mt-3">Crear Orden</a>
            </div>
            @if(isset($orders))
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-dark table-bordered text-center mt-2">
                       <thead>
                           <tr >
                               <th># Orden</th>
                               <th>Articulo</th>
                               <th>Precio</th>
                               <th>Cantidad</th>
                               <th>Total</th>
                               <th>Fecha</th>
                               <th>Monto</th>
                               <th>Estado</th>
                               <th>Usuario</th>
                               <th>Accion</th>
                           </tr>
                       </thead>
                       <tbody>
                           @foreach($orders as $order)
                               <tr>
                                   <td>{{$order->orden}}</td>
                                   <td>{{$order->orderDetail->articulo}}</td>
                                   <td>{{$order->orderDetail->precio}}</td>
                                   <td>{{$order->orderDetail->cantidad}}</td>
                                   <td>{{$order->orderDetail->total}}</td>

                                   <td>
                                       {{
                                           \Carbon\Carbon::parse($order->fecha)->format('d/m/Y')
                                       }}
                                   </td>
                                   <td>
                                       @if($order->monto)
                                       <span class="text-success">{{ $order->monto}}</span>

                                       @else
                                           <span class="text-danger">No Asignado</span>
                                       @endif
                                   </td>
                                   <td>
                                       @if($order->estado)
                                           <span class="text-success">Procesado</span>
                                       @else
                                           <span class="text-danger">Pendiente</span>
                                       @endif
                                   </td>
                                   <td>
                                       {{ $order->user->nombre }}&nbsp;{{ $order->user->apellido }}
                                   </td>
                                   <td class="d-flex justify-content-around">

                                       <a href="{{ route('order.edit', $order->id) }}" class="btn btn-sm btn-info"><i class='bx bxs-edit'></i></a>
                                       <form action="{{ route('order.destroy', $order->id) }}" method="POST">
                                       @csrf
                                       @method('DELETE')
                                           <button class="btn btn-sm btn-danger"
                                               onclick="return confirm('Esta seguro que quiere Eliminar esta orden?');"
                                           >
                                           <i class='bx bxs-trash-alt'></i>
                                           </button>
                                       </form>
                                   </td>
                               </tr>
                            @endforeach
                       </tbody>
                   </table>

                </div>
            </div>

            @endif
        </div>
    </section>
</div>

<div class="min-vh-100 d-flex justify-content-center align-items-center section-3">
    <div class="titulo-content">
        <h2>Seccion 3</h2>
        <p>Validar Conocimientos con bases de datos</p>
    </div>
    <div class="code-content">
        <div class="bloc-content">
            <pre><code>
                SELECT
                    O.fecha,
                    O.orden AS numero_de_orden,
                    O.monto,
                    O.estado,
                    D.articulo,
                    D.cantidad,
                    D.precio,
                    D.total,
                CONCAT(U.nombre, ' ', U.apellido) AS Usuario
                FROM orders AS O
                INNER JOIN orders_detail AS D ON O.id = D.id_order
                INNER JOIN users AS U ON U.id = O.id_usuario;
            </code></pre>
        </div>
        <div class="link mt-4">
            <a href="{{route('download')}}" class="btn btn-primary">Descargar .txt</a>
        </div>
    </div>
</div>

<div class="section-4 min-vh-100 d-flex justify-content-center align-items-center">
    <div class="titulo-content-2">
        <h2>Seccion 4</h2>
        <p>Subir Archivo con FILES de Laravel</p>
        <a href="{{route('files')}}" class="btn btn-primary">Ir a Vista</a>

    </div>
    <div class="titulo-content-2">
        <h2>Seccion 5</h2>
        <p>Validar conocimientos FRONT</p>
        <a href="{{route('front')}}" class="btn btn-primary">Ir a Sitio Front</a>

    </div>
</div>



@endsection


@section('javascript')
<script>

</script>
@endsection


