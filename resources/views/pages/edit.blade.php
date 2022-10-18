@extends('layout.layout')

@section('contenido')

<section class="login">
    <div class="formulario ">
        <form method="POST" class="col s12" autocomplete="off" action="{{ route('pages.update', $user->id)}}">
        @csrf
        @method ('PUT')
        

            <div class="row card-panel panel-body">
                <div class="nombre titulo_prod">
                    <h2>Editar Usuario </h2>
                </div><br>

                <div class="input-field col s12"><label for="name" class="text-form01">Ingrese un Usuario: </label>
                    <input autocomplete="off" type="text" value="{{$user->name}}" name="name" id="name" class="validate" required>
                </div>
                <div class="input-field col s12"><label for="email" class="text-form01">Ingrese un Email: </label>
                    <input autocomplete="off" type="email" value="{{$user->email}}" name="email" id="email" class="validate" required>
                </div>
                <div class="input-field col s12"><label for="password" class="text-form01">Ingrese una Contraseña: </label>
                    <input autocomplete="off" type="password"  value="{{$user->password}}" name="password" id="password" class="validate" required>
                </div>
            </div>
            <div class="button-field">
                <input type="reset" value="Borrar" class="boton" />
                <input type="submit" value="Guardar" class="boton" name="enviar" />
            </div>
        </form>

    </div>
</section>
@stop
