<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('book.create') }}" method="POST" enctype="multipart/form-data" >
        @csrf 
        <label  class="form-label">
            Codigo:
            <br>
            <input class="form-control" type="text" name="codigo"  class="form-control" required>
        </label>
        <br>
        <label  class="form-label">
            Titulo:
            <br>
            <input class="form-control"  type="text" name="titulo" required>
        </label>
        <br>
        <label  class="form-label">
            ISBN:
            <br>
            <input class="form-control"  type="text" name="isbn" required>
        </label>
        <br>
        <label  class="form-label">
            Editorial:
            <br>
            <input class="form-control"  type="text" name="editorial" required>
        </label>
        <br><br>
        <label  class="form-label">
            Paginas:
            <br>
            <input class="form-control"  type="text" name="paginas" required>
        </label>
        <br><br>
        <button class="btn btn-primary" type="submit" >Enviar Formulario:</button>
    </form>
</body>
</html>