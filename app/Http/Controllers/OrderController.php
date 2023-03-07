<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;

use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        if(!Auth::check()){
            $request->session()->flash('mensaje', 'Primero debe iniciar Sesion.');

            return redirect()->route('login');

        }
        return view('order.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'articulo' => 'required',
            'fecha' => 'required',
            'precio' => 'required',
            'cantidad' => 'required',
        ]);

        $order =  new Order;
        // $order->monto = $request->monto;
        $order->fecha = $request->fecha;
        $order->estado = 0;
        $order->id_usuario = Auth::id();
        $order->orden = $this->getNumberOrder();

        //dd($order);
        if($order->save()){

            $detail = new OrderDetail();
            $detail->articulo = $request->articulo;
            $detail->precio = $request->precio;
            $detail->cantidad = $request->cantidad;
            $detail->total = $request->precio * $request->cantidad;
            $detail->id_order = $order->id;

            if($detail->save()){
                return redirect()->route('home');
            }


        }

        return redirect()->route('order.create');
    }

    public function getNumberOrder()
    {
        $orders = Order::orderBy('id','desc')->first();
        $number = 1;

        if($orders){
            $number = $orders->orden + 1;
        }

        return $number;


    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $order = Order::find($id);


        return view('order.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'monto' => 'required',
            'articulo' => 'required',
            'fecha' => 'required',
            'precio' => 'required',
            'cantidad' => 'required',
        ]);

        if($request->monto < ($request->precio * $request->cantidad)){
            $request->session()->flash('msj_order', 'El monto debe ser mayor o igual al Total');
            return back();
        }

        $order = Order::find($id);
        $order->monto = $request->monto;
        $order->fecha = $request->fecha;
        $order->estado = 1;
        $order->id_usuario = Auth::id();

        if($order->save())
        {
            $detail = $order->OrderDetail;
            $detail->articulo = $request->articulo;
            $detail->precio = $request->precio;
            $detail->cantidad = $request->cantidad;
            $detail->total = $request->precio * $request->cantidad;
            $detail->save();

            return redirect()->route('home');
        }


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

      $order = Order::find($id);

      if( $order->OrderDetail->delete()){
          if($order->delete()){
              return redirect()->route('home');
          }
      }
        return 'ocurrio un error';
    }
}
