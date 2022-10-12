@extends('layout.layout')

@section('contenido')


<div class="fondo">
    <h4>Usuarios Registrados</h4>
</div>
<div class="users">
    <div class="usuarios_reg">
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Fecha de Alta</th>
                    <th>Ultima Modificacion</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </tr>
            </thead>

                <tbody>
                    
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

@stop
