@extends('layout.layout')

@section('contenido')
<section class="body_contacto">
    <div class="form" id="contacto">
        <div class="section-container">
            @if (session('success'))
            <div class="card blue-grey darken-1">
                <div class="card-content white-text " style="text-align: center; font-size:20px;">
                    <p>{{session('success')}}</p>
                </div>
            </div>
            @endif
            <div class="row">
                <form action="{{ route('pages.contacto')}}" method="POST" class="formulario" class="col s12">
                @csrf
                    <div class="row card-panel formulario">
                        <div class="input-field col s12"><label for="nombre" class="text-form01">Nombre/s:</label>
                            <input type="text" name="nombre" id="nombre" class="validate" required>
                        </div>
                        <div class="input-field col s6"><label for="apellido" class="text-form01">Apellido/s:</label>
                            <input type="text" name="apellido" id="apellido" class="validate" required>
                        </div>
                        <div class="input-field col s6"><label for="telefono" class="text-form01">Teléfono:</label>
                            <input type="tel" name="telefono" id="telefono" class="validate" required>
                        </div>
                        <div class="input-field col s12"><label for="email" class="text-form01">Correo electrónico:</label>
                            <input type="email" name="email" id="email" class="validate" required>
                        </div>
                        <div class="input-field col s12">
                            <label for="mesaje" class="text-form01"></label>
                            <textarea class="mensaje-area" placeholder="Mensaje:" name="mensaje" id="mensaje" cols="30" rows="30" class="validate" required></textarea>
                        </div>
                    </div>


                    <div class="button-field">
                        <input type="reset" value="Borrar" class="boton" />
                        <input type="submit" value="Enviar" class="boton" />
                    </div>
                </form>
            </div>
        </div>
        </form>
    </div>
</section>
@stop
