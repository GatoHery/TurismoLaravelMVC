<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $lugar['titulo'] }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">

        <a class="navbar-brand" href="{{ route('turismo.index') }}">
            Turismo El Salvador
        </a>

        <div class="navbar-nav ms-auto">

            <a class="nav-link" href="{{ route('turismo.index') }}">
                Inicio
            </a>

            <a class="nav-link" href="{{ route('contacto.index') }}">
                Contacto
            </a>

        </div>

    </div>
</nav>

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header">
            <h2>{{ $lugar['titulo'] }}</h2>
        </div>

        <div class="card-body">

            <p>
                <strong>Descripción:</strong><br>
                {{ $lugar['descripcion'] }}
            </p>

            <hr>

            <p>
                <strong>Categoría:</strong>
                {{ $lugar['categoria'] }}
            </p>

            <p>
                <strong>Ubicación:</strong>
                {{ $lugar['ubicacion'] }}
            </p>

            <p>
                <strong>Precio:</strong>
                ${{ number_format($lugar['precio'],2) }}
            </p>

        </div>

        <div class="card-footer">

            <a href="{{ route('turismo.index') }}" class="btn btn-secondary">
                Regresar
            </a>

        </div>

    </div>

</div>

</body>
</html>