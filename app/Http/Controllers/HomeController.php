<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $usuarios = User::take(10)->get();
        $orders = Order::take(10)->get();

        return view('home', compact('usuarios','orders'));
    }

    public function download()
    {
        $sql = "SELECT O.fecha, O.orden AS numero_de_orden, O.monto, O.estado, D.articulo, D.cantidad, D.precio, D.total, CONCAT(U.nombre, ' ', U.apellido) AS Usuario FROM orders AS O INNER JOIN orders_detail AS D ON O.id = D.id_order INNER JOIN users AS U ON U.id = O.id_usuario;";
        return response($sql)
                ->withHeaders([
                    'Content-Type' => 'text/plain',
                    'Cache-Control' => 'no-store, no-cache',
                    'Content-Disposition' => 'attachment; filename="Sentencia-SQL-InnerJoin.txt',
                ]);
    }



    public function front()
    {
        $response = Http::get('https://rickandmortyapi.com/api/character')->json();


        shuffle($response['results']);
        $data = $response['results'];


        $personaje1 = $data[0];
        $personaje2 = $data[1];
        $personaje3 = $data[2];
        $personaje4= $data[3];


       return view('front', compact('personaje1','personaje2','personaje3','personaje4'));
    }
}
