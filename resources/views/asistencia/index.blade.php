@extends('base')

@section('tabla')
    <form action="/asistencia" method="POST">
        @csrf

        <div class="btn-group col-md-2 mx-3" role="group">
            <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                aria-expanded="false">
                Acciones
            </button>
            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                <li><button class="dropdown-item" type="submit" name="A_presente">Actualizar los registros vacios
                        como presente</button></li>
                <hr class="dropdown-divider">
                <li><button class="dropdown-item" type="submit" name="A_ausente">Actualizar los registros vacios
                        como ausente</button></li>
                <hr class="dropdown-divider">
                <li><button class="dropdown-item" name="todos_presente" type="submit">Marcar todos como
                        presente</button></li>
                <hr class="dropdown-divider">

                <li><button class="dropdown-item" type="submit">Marcar todos como ausente</button></li>
            </ul>
            

        </div>








        </div>


        <br>
        <div class="container">
            <h2 class="mb">Asistencia estudiantes</h2>
            <table class="table bg-white rounded shadow-sm table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>nombres</th>


                        <th>Fecha </th>

                        <th>Asistencia</th>


                        <input type="hidden" name="fecha_registro[]" value="{{ $fecha_actual }}">

                    </tr>
                </thead>
                <tbody>
                    @foreach ($estudiantes as $datos)
                        <tr>

                            <td>
                                <input type="hidden" name="id_estudiante[]" value="{{ $datos->id_es }}">
                                {{ $datos->id_es }}
                            </td>

                            <td>
                                {{ $datos->nombres }}
                            </td>


                            <td>{{ $fecha_actual }} </td>
                            <td>
                                <div class="form-check">

                                    @if ($cantidad == 0)
                                        <input class="form-check-input" name="id_asis[]" value="{{ $datos->id_es }}"
                                            type="checkbox" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1"></label>
                                    @elseif ($asistencia[$loop->index])
                                        <input disabled checked class="form-check-input" name="id_asis[]"
                                            value="{{ $datos->id_es }}" type="checkbox" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1"></label>
                                    @else
                                        <input title="Aun puedes tomar asistencia" class="form-check-input" name="id_asis[]"
                                            value="{{ $datos->id_es }}" type="checkbox" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1"></label>
                                    @endif



                                </div>

                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

    </form>
@endsection
