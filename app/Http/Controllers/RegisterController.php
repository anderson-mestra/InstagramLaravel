<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // dd($request->get('username')); //Forma de acceder a un dato del request

        //Validacion
        $request->validate([ //Se le pasan los datos del fomulario que se quiere validar
            'name' =>        'required|max:30',
            'username' =>    'required|unique:users|min:3|max:30',
            'email' =>       'required|unique:users|email|max:60',
            'password' =>    'required',
        ]);

        dd($request->all());
    }
}
