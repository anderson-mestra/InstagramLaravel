<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
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

        $request->request->add(['username' => Str::slug($request->username)]); //Formateamos el request antes de hacer la validacion para poder que se envie a la vista el aviso

        //Validacion //Se le pasan los datos del formulario que se quiere validar
        $request->validate([ //'name_en_formulario' => 'validaciones a aplicar'
            'name' =>        'required|max:30',
            'username' =>    'required|unique:users|min:3|max:30',
            'email' =>       'required|unique:users|email|max:60',
            'password' =>    'required|confirmed',
        ]); 

        // dd('Creando el usuario');

        User::create([
            'name' => $request->name,
            'username' => $request->username, //La clase str tiene funciones de formateo, slug convierte la cadena a formato valido para una URL 
            'email' => $request->email,
            'password' => $request->password
            //Para una columna password, laravel hashea automaticamente pero para hacerlo
            //manual, lo hacemos importando la clase Hash y accedemos a ::make()
        ]);

        return redirect()->route('post.index');
    }
}
