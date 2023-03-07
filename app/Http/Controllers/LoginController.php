<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;
// use Illuminate\Foundation\Auth\User as Authenticatable;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // if(Auth::check()) return back();


        return view('login.login');
    }

    public function register()
    {
        return view('login.register');
    }

    public function authenticate(Request $request){

       $user = User::where('email',$request->email)->first();

       if($user){
            if(Hash::check($request->clave, $user->clave)){

                Auth::login($user);

                $request->session()->regenerate();

                $request->session()->flash('mensaje', 'Bienvenido: '.$user->nombre);

                return redirect()->route('home');
            }

            $request->session()->flash('mensaje', 'Datos incorrectos, verifique.');


       }


    }
    /**
     * Show the form for creating a new resource.
     */


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('home');
    }

    public function create()
    {
        //
    }


    public function getUsers()
    {
        $users = User::all();

        return response()->json([
            'usuarios'=> $users
        ]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        if($request->clave !== $request->clave2) return back();
        User::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'email' => $request->email,
            'clave' => Hash::make($request->clave),
        ]);

        return redirect()->route('home');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
