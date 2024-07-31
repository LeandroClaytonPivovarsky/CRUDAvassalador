<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eixo Deletado</title>
</head>
<body>
    <h1>Deletar Eixo</h1>
    <hr>
    <a href="{{route('eixo.index')}}">Voltar</a>
    <hr>

    <h2>Eixo "{{$eixoDeletado->nome}}" deletado com sucesso!!</h2>
    <p>Informações do eixo Deletado:</p>
    <ul>
        <li><b>ID: </b> {{$eixoDeletado->id}}</li>
        <li><b>NOME: </b> {{$eixoDeletado->nome}}</li>
        <li><b>DESCRICAO: </b> {{$eixoDeletado->descricao}}</li>
        
    </ul>
</body>
</html>