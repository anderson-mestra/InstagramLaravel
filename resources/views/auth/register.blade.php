@extends('layouts.app')

@section('titulo')
    Crea una cuenta
@endsection

@section('contenido')
    {{-- **:aplica media query  --}}
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5">
            <img src="{{ asset('/public/img/registrar.jpg') }}" alt="Imagen registro" class="rounded-lg">
        </div>

        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{ route('register') }}" method="POST">
                {{-- se evitan ataques csft con el metodo @csrf --}}
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Nombre</label>
                    <input id="name" name="name" type="text" placeholder="Tu nombre"
                        class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                        value="{{ old('name') }}"> {{-- old toma el ultimo valor que ingreso en el input y lo reasigna en caso de recargar el formulario por un error --}}
                    @error('name')
                        {{-- En caso que haya un error en el parametro que se mando el controllador genera lo que este dentro de la directiva --}}
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">Username</label>
                    <input id="username" name="username" type="text" placeholder="Tu nombre de usuario"
                        class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror"
                        value="{{ old('username') }}">
                        @error('username')
                            {{-- En caso que haya un error en el parametro que se mando el controllador generera lo que este dentro de la directiva --}}
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                                {{ $message }}
                            </p>
                        @enderror
                </div>

                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Email</label>
                    <input id="email" name="email" type="text" placeholder="Tu email de registro"
                        class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror"
                        value="{{ old('email') }}">
                        @error('email')
                            {{-- En caso que haya un error en el parametro que se mando el controllador generera lo que este dentro de la directiva --}}
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                                {{ $message }}
                            </p>
                        @enderror
                </div>

                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Contraseña</label>
                    <input id="password" name="password" type="password" placeholder="Escribe tu contraseña"
                        class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror">
                        @error('password')
                            {{-- En caso que haya un error en el parametro que se mando el controllador generera lo que este dentro de la directiva --}}
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                                {{ $message }}
                            </p>
                        @enderror
                </div>

                <div class="mb-5">
                    {{-- Al agregar confirmation al password Laravel se encarga de las validaciones --}}
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">Repite tu
                        contraseña</label>
                    <input id="password_confirmation" name="password_confirmation" type="password"
                        placeholder="Repite tu contraseña" class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror">
                </div>

                <input type="submit" value="Crear Cuenta"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">

            </form>
        </div>
    </div>
@endsection
