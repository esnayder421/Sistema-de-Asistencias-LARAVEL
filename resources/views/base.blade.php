<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <title>Escritorio - Admin</title>
</head>

<body>
    <div class="degradado">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('asistencia.index') }}">Control Asistencias</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                                href="{{ route('asistencia.index') }}">Asistencias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Instructores</a>
                        </li>

                    </ul>

                    <div class="d-flex">
                <form action="/asistencia" method="GET" class="d-flex">
                    @csrf
                    <input type="hidden" name="buscar" id="">
                    <input class="form-control me-2" name="fecha" type="date">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="navbar-item-dropdown">
                                <a href="#" class="navbar-link dropdown-toggle fw-bold"
                                    id="navbarDropdown" role="button" data-bs-toggler="dropdown" aria-expanded="false">
                                    <i class="fas fa-user me-2"></i> Samuel Mosquera
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a href="#" class="dropdown-item">Perfil</a></li>
                                    <li><a href="#" class="dropdown-item">Configuracion</a></li>
                                    <li><a href="#" class="dropdown-item">Cerrar sesion</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

        </nav>

        <div class="container-fluid px-4">
            <div class="row g-3 my-2 justify-content-center">
                <div class="col-md-3">
                    <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                        <div>
                            <h3 class="fs-2">{{@$cantidad_es}}</h3>
                            <p class="fs-5">Estudiantes</p>
                        </div>
                        <i class="fas fa-users fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                        <div>
                            <h3 class="fs-2">100</h3>
                            <p class="fs-5">Estudiantes</p>
                        </div>
                        <i class="fas fa-users fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                        <div>
                            <h3 class="fs-2">100</h3>
                            <p class="fs-5">Asistieron</p>
                        </div>
                        <i class="fas fa-users fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                    </div>
                </div>
            </div>

            @yield('tabla')
        </div>
    </div>
    </div>
</body>

</html>
