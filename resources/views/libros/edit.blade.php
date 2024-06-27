<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edita informacion de libro</title>
</head>
<body>
    <h1>Edita libro</h1>
    <form action="{{ route('libros.update', $book) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="codigo">
            Codigo de libro
            <br>
            <input type="text" name="codigo" id="codigo" value="{{ old('codigo',$book->codigo)}}">
        </label>
        <br>

        <label for="titulo">
            Titulo
            <br>
            <input type="text" name="titulo" id="titulo" value="{{ old('titulo',$book->titulo) }}">
        </label>
        <br>

        <label for="ISBN">
            ISBN
            <br>
            <input type="text" name="ISBN" id="ISBN" value="{{ old('ISBN', $book->ISBN) }}">
        </label>
        <br>
        <label for="editorial">
            Editorial de libro
            <br>
            <input type="text" name="editorial" id="editorial" value="{{ old('editorial', $book->editorial) }}">
        </label>
        <br>
        <label for="paginas">
            Paginas
            <br>
            <input type="text" name="paginas" id="paginas" value="{{ old('paginas', $book->paginas) }}">
        </label>

        <button type="submit">Guardar</button>
    </form>
</body>
</html>
