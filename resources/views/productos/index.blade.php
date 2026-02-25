<!DOCTYPE html>
<html>
    <head>
        <title>Productos</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="bg-light">
        <div class="container mt-5">

            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="mb-0">Lista de Productos</h2>
                <a href="{{ route('productos.create') }}" class="btn btn-primary">
                    + Nuevo Producto
                </a>
            </div>

            <div class="card shadow-sm">
                <div class="card-body">

                    <table class="table table-hover align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Stock</th>
                                <th class="text-end">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($productos as $producto)
                                <tr>
                                    <td>{{ $producto->nombre }}</td>
                                    <td>${{ number_format($producto->precio, 2) }}</td>
                                    <td>{{ $producto->stock }}</td>
                                    <td class="text-end">
                                        <a href="#" 
                                        class="btn btn-sm btn-info text-white">
                                            Ver
                                        </a>

                                        <a href="#" class="btn btn-sm btn-warning">
                                            Editar
                                        </a>

                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center text-muted">
                                        No hay productos registrados.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </body>
</html>