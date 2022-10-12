@extends('layout.layout')

@section('contenido')
<section class="login">
    <div class="formulario ">

        <form action="" method="POST" class="" class="col s12" autocomplete="off">
            @csrf
            <div class="row card-panel panel-body">
                <div class="nombre titulo_prod">
                    <?php
                    echo '<h2>Iniciar Sesión</h2>' ?></div><br>
                <div class="input-field col s12"><label for="email" class="text-form01">Ingrese su Email: </label>
                    <input autocomplete="off" type="email" name="email" value="{{ old('email') }}" id="email" class="validate" required autofocus>
                </div>

                <div class="input-field col s12"><label for="pass" class="text-form01">Ingrese su Contraseña: </label>
                    <input autocomplete="off" type="password" name="password" id="password" class="validate" required>
                </div>
                <div>
                    <label>
                        <input type="checkbox" name="remember" />
                        <span>Recordar mi Sesión</span>
                    </label>
                </div>


            </div>
            <div class="button-field">
                <input type="reset" value="Borrar" class="boton" />
                <input type="submit" value="Ingresar" class="boton" name="enviar" />
            </div>
        </form>

        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>
                {{ $error }}
            </li>
            @endforeach
        </ul>
        @endif
    </div>
</section>
@stop
