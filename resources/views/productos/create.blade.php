<!DOCTYPE html>
<html>
    <head>
        <title>Nuevo Producto</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="bg-light">

        <div class="container mt-5">
            <div class="card shadow-sm">
                <div class="card-body">

                    <h3 class="mb-4">Crear Nuevo Producto</h3>

                    <form action="{{ route('productos.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Nombre</label>
                            <input type="text" name="nombre" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Descripción</label>
                            <textarea name="descripcion" class="form-control"></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Precio</label>
                            <input type="number" step="0.01" name="precio" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Stock</label>
                            <input type="number" name="stock" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-success">
                            Guardar
                        </button>

                        <a href="{{ route('productos.index') }}" class="btn btn-secondary">
                            Cancelar
                        </a>

                    </form>

                </div>
            </div>
        </div>

    </body>
</html>