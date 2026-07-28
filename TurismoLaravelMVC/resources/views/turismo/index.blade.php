<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo Turístico de El Salvador</title>

    <!-- Bootstrap -->
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

    <h1 class="text-center mb-4">
        Catálogo de Lugares Turísticos de El Salvador
    </h1>

    <div class="row">

        @forelse($lugares as $lugar)

            <div class="col-md-4 mb-4">

                <div class="card h-100 shadow">

                    <div class="card-body">

                        <h4 class="card-title">
                            {{ $lugar['titulo'] }}
                        </h4>

                        <p class="card-text">
                            {{ Str::limit($lugar['descripcion'],100) }}
                        </p>

                        <p>
                            <strong>Categoría:</strong>
                            {{ $lugar['categoria'] }}
                        </p>

                        <p>
                            <strong>Ubicación:</strong>
                            {{ $lugar['ubicacion'] }}
                        </p>

                        <p class="text-success fw-bold">
                            ${{ number_format($lugar['precio'],2) }}
                        </p>

                    </div>

                    <div class="card-footer">

                        <a href="{{ route('turismo.show',$lugar['id']) }}"
                           class="btn btn-primary w-100">
                            Ver detalles
                        </a>

                    </div>

                </div>

            </div>

        @empty

            <div class="col">

                <div class="alert alert-warning">
                    No existen lugares turísticos registrados.
                </div>

            </div>

        @endforelse

    </div>

</div>

</body>
</html>