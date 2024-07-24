<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Novo Eixo</title>
</head>
<body>
    <h1>Novo Eixo</h1>
    <hr>
    <a href="{{route('eixo.index')}}">Voltar</a>
    <hr>
    <form action="{{route('eixo.store')}}" method="post">
        @csrf
        <input type="text" name="nome" >
        <textarea cols="15" rows="6" name="descricao"></textarea>
        <input type="submit" value="Salvar">
    </form>
</body>
</html>