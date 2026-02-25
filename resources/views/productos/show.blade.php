<!DOCTYPE html>
<html>
    <head>
        <title>Detalle del Producto</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="bg-light">

        <div class="container mt-5">

            <div class="card shadow-sm">
                <div class="card-body">

                    <h3 class="mb-4">Detalle del Producto</h3>

                    <div class="mb-3">
                        <strong>Nombre:</strong>
                        <p class="mb-0">{{ $producto->nombre }}</p>
                    </div>

                    <div class="mb-3">
                        <strong>Descripción:</strong>
                        <p class="mb-0">{{ $producto->descripcion }}</p>
                    </div>

                    <div class="mb-3">
                        <strong>Precio:</strong>
                        <p class="mb-0">${{ number_format($producto->precio, 2) }}</p>
                    </div>

                    <div class="mb-3">
                        <strong>Stock:</strong>
                        <p class="mb-0">{{ $producto->stock }}</p>
                    </div>

                    <div class="mb-3">
                        <strong>Estado:</strong>
                        <span class="badge 
                            {{ $producto->estado == 'activo' ? 'bg-success' : 'bg-danger' }}">
                            {{ ucfirst($producto->estado) }}
                        </span>
                    </div>

                    <div class="mt-4">
                        <a href="{{ route('productos.index') }}" 
                        class="btn btn-secondary">
                            Volver
                        </a>

                        <a href="{{ route('productos.edit', $producto->id) }}" 
                        class="btn btn-warning">
                            Editar
                        </a>
                    </div>

                </div>
            </div>

        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>