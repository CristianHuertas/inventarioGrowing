<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <h1>Detalles Producto: </h1>
    <form action="{{ route('productos-index') }}" method="GET">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $producto->nombre }}" disabled>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripcion</label>
            <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{ $producto->descripcion }}" disabled>
        </div>
        <div class="form-group">
            <label for="precio">Precio</label>
            <input type="number" name="precio" id="precio" class="form-control" value="{{ $producto->precio }}" disabled>
        </div>
        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="number" name="stock" id="stock" class="form-control" value="{{ $producto->stock }}" disabled>
        </div>
        <button type="submit" class="btn btn-primary">Regresar</button>
    </form>
</body>
</html>