<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
</head>
<body>
    <h1>Bienvenido a la pagina principal de libros</h1>

    <a href="{{ route('libros.create') }}">Añade libros</a>
    <ul>
        @foreach ($libros as $book)
        <li>
            <a href="{{ route('libros.show', $book->id) }}">{{ $book->titulo}}</a>
        </li>
        @endforeach
    </ul>
    {{ $libros->links() }}
</body>
</html>
