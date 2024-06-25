<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('edit.update', $paq) }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('put')
        <label>
            Codigo:
            <br>
            <input type="text" name="codigo" value="{{ old('codigo', $books->codigo) }}">
        </label>
        <br>
        <label>
            titulo:
            <br>
            <input type="text" name="titulo" value="{{ old('titulo', $bookd->titulo) }}">
        </label>
        <br>_
        <label>
            isbn:
            <br>
            <input type="text" name="isbn" value="{{ old('isbn', $books->isbn) }}">
        </label>
        
        <br>
        <label>
            editorial:
            <br>
            <input type="text" name="editorial" value="{{ old('editorial', $books->editorial) }}">
        </label>
        <br>
        <br>
        <label>
            paginas:
            <br>
            <input type="text" name="paginas" value="{{ old('paginas', $books->paginas) }}">
        </label>
        <br>
        <br>
        
        <button type="submit">Enviar Formulario:</button>
        </form>
</body>
</html>