<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Editar Producto</title>
</head>

<body>
    <h1>Editar Producto</h1>

    <form action="{{ route('productos-update') }}" method="POST">
        @csrf
        <div class="form-group">
            {{-- <input type="text" name="id" id="id" value="{{ $producto->id }}"> --}}
            <input type="hidden" name="id" value="{{ $producto->id }}">
        </div>

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $producto->nombre }}"
                required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripcion</label>
            <input type="text" name="descripcion" id="descripcion" class="form-control"
                value="{{ $producto->descripcion }}">
        </div>
        <div class="form-group">
            <label for="precio">Precio</label>
            <input type="number" name="precio" id="precio" class="form-control" value="{{ $producto->precio }}"
                required>
        </div>
        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="number" name="stock" id="stock" class="form-control" value="{{ $producto->stock }}"
                required>
        </div>
        @role('admin')
        <button type="submit" class="btn btn-primary">Guardar</button>
        @else
        <h4>Usted no tiene permisos para editar el producto, comuniquese con el administrador</h4>
        @endrole
    </form>



</body>

</html>
