<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Lugar Turístico</title>

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

    <h1 class="mb-4">
        Agregar Nuevo Lugar Turístico
    </h1>


    <div class="card shadow">

        <div class="card-body">

            <form action="{{ route('turismo.store') }}" method="POST">

                @csrf


                <div class="mb-3">
                    <label class="form-label">
                        Título
                    </label>

                    <input 
                        type="text"
                        name="titulo"
                        class="form-control"
                        value="{{ old('titulo') }}"
                    >

                    @error('titulo')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <div class="mb-3">

                    <label class="form-label">
                        Descripción
                    </label>

                    <textarea 
                        name="descripcion"
                        class="form-control"
                        rows="4">{{ old('descripcion') }}</textarea>


                    @error('descripcion')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror

                </div>



                <div class="mb-3">

                    <label class="form-label">
                        Categoría
                    </label>

                    <input 
                        type="text"
                        name="categoria"
                        class="form-control"
                        value="{{ old('categoria') }}"
                    >

                    @error('categoria')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror

                </div>



                <div class="mb-3">

                    <label class="form-label">
                        Precio
                    </label>

                    <input 
                        type="number"
                        step="0.01"
                        name="precio"
                        class="form-control"
                        value="{{ old('precio') }}"
                    >

                    @error('precio')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror

                </div>



                <div class="mb-3">

                    <label class="form-label">
                        Ubicación
                    </label>

                    <input 
                        type="text"
                        name="ubicacion"
                        class="form-control"
                        value="{{ old('ubicacion') }}"
                    >

                    @error('ubicacion')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror

                </div>



                <button class="btn btn-success">
                    Guardar Lugar
                </button>


                <a href="{{ route('turismo.index') }}" class="btn btn-secondary">
                    Cancelar
                </a>


            </form>

        </div>

    </div>


</div>

</body>
</html>