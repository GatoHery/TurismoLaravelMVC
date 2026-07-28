<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>

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

            <a class="nav-link active" href="{{ route('contacto.index') }}">
                Contacto
            </a>
        </div>

    </div>
</nav>

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card shadow">

                <div class="card-header bg-success text-white">
                    <h3 class="mb-0">Formulario de Contacto</h3>
                </div>

                <div class="card-body">

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('contacto.store') }}" method="POST">

                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Nombre</label>
                            <input type="text" name="nombre" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Correo electrónico</label>
                            <input type="email" name="correo" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Mensaje</label>
                            <textarea name="mensaje" rows="5" class="form-control"></textarea>
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-success">
                                Enviar solicitud
                            </button>
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>