<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EIXO</title>
</head>
<body>
    <h1>Tabela de Eixos</h1>
    <hr>
    <a href="{{route('eixo.create')}}">Cadastrar</a>
    <hr>
    <table>
        <thead>
            <th>id</th>
            <th>nome</th>
            <th>descricao</th>
            <th>Ações</th>
        </thead>
        <tbody>
            @foreach ($data as $item)
                
           
                <tr>
                    <td>
                        {{$item->id}}
                    </td>
                    <td>
                        {{$item->nome}}
                    </td>
                    <td>
                        {{$item->descricao}}
                    </td>
                    <td>
                        <a href="{{route('eixo.show', $item->id)}}">+Info</a>
                    </td>
                    <td>
                        <a href="{{route('eixo.show', $item->id)}}">+Info</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>