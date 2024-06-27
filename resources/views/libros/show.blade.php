<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalle de libros</title>
</head>
<body>
    <h1>Detalles del libros</h1>
    <ul>
        <li><strong>titulo de lirbo:</strong> {{ $book->titulo }}</li>
        <li><strong>Código del libro:</strong> {{ $book->codigo }}</li>
        <li><strong>ISBN del libro:</strong> {{ $book->ISBN }}</li>
        <li><strong>paginas del libro:</strong> {{ $book->paginas }}</li>
        <li><strong>editorial del libro:</strong> {{ $book->editorial }}</li>
    </ul>

    <form action="{{ route('libros.destroy', $book->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <br>
        <a href="{{ route('libros.index') }}">Ir al inicio</a>

        <br>

        <br>
        <a href="{{ route('libros.edit', $book->id) }}">Editar</a>
        <br><br>
        <button type="submit">Borrar</button>
    </form>
</body>
</html>
