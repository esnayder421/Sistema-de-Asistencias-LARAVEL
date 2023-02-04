@extends('base')


@section('tabla')
<h1>LISTADO DE ASISTENCIA SEGUN LA FECHA</h1>
<table class="table bg-white rounded shadow-sm table-hover">
    <thead>
        <tr>
            <th>Id Registro</th>
            <th>Estudiante</th>
            <th>Fecha</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($asistencia as $a )
        <tr>

            <td>{{$a->id_registro}}</td>
            <td>{{$a->id_estudiante}}</td>
            <td>{{$a->fecha_registro}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
