@extends('layout.layout')

@section('contenido')

<div class="fondo">
    <h4>Usuarios Registrados</h4>
</div>
@if (session('success'))
<div class="card blue-grey darken-1">
    <div class="card-content white-text " style="text-align: center; font-size:20px;">
        <p>{{session('success')}}</p>
    </div>
</div>
@endif
<div class="button-field">
    <a href="create">
        <button class="boton">
            Crear Usuario
        </button>
    </a>
</div>
<div class="users">
    <div class="usuarios_reg">

        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Creado</th>
                    <th>Modificado</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->updated_at}}</td>


                    <td><a href="{{ route('pages.edit', $user->id) }}"><img src="../img/edit.png"></a></td>
                    <td>
                        <form method="POST" action="{{ route('pages.destroy', $user->id) }}">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="destroy">
                            <button type="submit" class="hidden_btn" onclick="return eliminar_cont()"><img src="../img/trash.png"></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<script type="text/javascript">
    function eliminar_cont() {

        if (confirm('Esta seguro de eliminar el registro?') == true) {
            alert('El registro ha sido eliminado correctamente!');
            return true;
        } else {
            return false;
        }
    }
</script>

@endsection
