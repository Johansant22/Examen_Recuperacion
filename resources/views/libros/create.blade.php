<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Añade libro</title>
</head>
<body>
    <form action="{{ route('libros.store') }}" method="POST">
        @csrf
        <label for="codigo">
            Codigo de libro
            <br>
            <input type="text" name="codigo" id="codigo" value="{{ old('codigo') }}">
        </label>
        <br>

        <label for="titulo">
            Titulo
            <br>
            <input type="text" name="titulo" id="titulo" value="{{ old('titulo') }}">
        </label>
        <br>

        <label for="ISBN">
            ISBN
            <br>
            <input type="text" name="ISBN" id="ISBN" value="{{ old('ISBN') }}">
        </label>
        <br>
        <label for="editorial">
            Editorial de libro
            <br>
            <input type="text" name="editorial" id="editorial" value="{{ old('editorial') }}">
        </label>
        <br>
        <label for="paginas">
            Paginas
            <br>
            <input type="text" name="paginas" id="paginas" value="{{ old('paginas') }}">
        </label>

        <button type="submit">Guardar</button>
    </form>
</body>
</html>
