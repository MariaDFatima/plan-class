<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">viewport
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    
</head>
<body>
    
    <form action="/editar/{{$livro->id}}" method="POST">
        @csrf
        <label for="">autor</label>
        <input value="{{$livro->autor}}" type="text" name="autor">
        <label for="">titulo</label>
        <input value="{{$livro->titulo}}" type="text" name="titulo">
        <label for="">subtitulo</label>
        <input value="{{$livro->subtitulo}}" type="text" name="subtitulo">
        <label for="">edicao</label>
        <input value="{{$livro->edicao}}" type="text" name="edicao">
        <label for="">editora</label>
        <input value="{{$livro->editora}}" type="text" name="editora">
        <label for="">ano de publicacao</label>
        <input value="{{$livro->ano_de_publicacao}}" type="number" name="ano_de_publicacao">

        <button type="submit">Editar</button>
    </form>

</body>
</html>