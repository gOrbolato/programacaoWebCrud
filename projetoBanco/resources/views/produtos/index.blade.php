<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body class="container">
    <h1>Produtos</h1>

    <a class="btn btn-primary" href="/produtos/create">Novo Produto</a>

    @if (session('erro'))
        <div class="alert alert-danger">
            {{session('erro')}}
        </div>
    @endif
    @if (session('sucesso'))
        <div class="alert alert-sucess">
            {{session('sucesso')}}
        </div>
    @endif

    /*
    copiar a table
    */

    <tbody>
        @foreach ($produtos as $p)
            <tr>
                <td>{{$p->id}}</td>
                <td>{{$p->nome}}</td>
                <td>{{$p->categoria->nome}}</td>
                <td>
                    <a href="#" class="btn btn-warning">Editar</a>
                    <a href="#" class="btn btn-info">Consultar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</body>
</html>