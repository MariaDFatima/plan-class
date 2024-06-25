<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

   
</head>
<body>
    <h1>Livros</h1>

    <a href="/dashboard">Voltar</a>
    <a href="{{route("cadastrar-livro")}}">Cadastrar</a>

    <table>
        <thead>
            <tr>
                <th>Autor</th>

                <th>Titulo</th>
                <th>Subtitulo</th>
                <th>Edição</th>
                <th>Editora</th>
                <th>Ano de Publicação</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($livros as $livro)
                <tr>
                    <th>{{ $livro->autor }}</th>
                    <th>{{ $livro->titulo }}</th>
                    <th>{{ $livro->subtitulo }}</th>
                    <th>{{ $livro->edicao }}</th>
                    <th>{{ $livro->editora }}</th>
                    <th>{{ $livro->ano_de_publicacao }}</th>
                    <th>
                        <a href="/editar/{{$livro->id}}">Editar</a>
                        <a href="/deletar/{{$livro->id}}">Apagar</a>
                    </th>
                </tr>
            @endforeach
        </tbody>
        
    </table>
</body>
</html>