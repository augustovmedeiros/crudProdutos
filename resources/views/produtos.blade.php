<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Itens</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>

<h1>Lista de Itens</h1>

<button onclick="redirecionarAdicionar()">Adicionar Item</button>
<br/>

<table id="tabelaItens">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Preço</th>
        <th>Ações</th>
    </tr>
    @foreach($produtos as $produto)
    <tr>
        <td>{{ $produto -> id }}</td>
        <td>{{ $produto -> nome }}</td>
        <td>{{ $produto -> descricao }}</td>
        <td>R$ {{ $produto -> preco }}</td>
        <td>
            <button onclick="redirecionarEditar({{ $produto -> id }})">Editar</button>
            <button onclick="redirecionarRemover({{ $produto -> id }})">Remover</button>
        </td>
    </tr>                   
    @endforeach
</table>

<script>
    function redirecionarAdicionar() {
        window.location.href = '/produtos/novo';
    }

    function redirecionarEditar(id) {
        window.location.href = '/produtos/ver/' + id;
    }

    function redirecionarRemover(id) {
        if (confirm("Tem certeza que deseja remover este item?")) {
            window.location.href = '/produtos/excluir/' + id;
        }
    }
</script>

</body>
</html>
