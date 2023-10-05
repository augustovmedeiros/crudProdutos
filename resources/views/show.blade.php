<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver um produto</title>
</head>
<body>
    <form action="{{ route('alterar_produto', ['id' => $produto->id]) }}" method="POST">
        @csrf
        <label for="">Nome</label><br/>
        <input type="text" name="nome" value="{{ $produto->nome }}"><br/>
        <label for="">Descricao</label><br/>
        <input type="text" name="descricao" value="{{ $produto->descricao }}"><br/>
        <label for="">Preço</label><br/>
        <input type="number" name="preco" value="{{ $produto->preco }}"><br/>
        <button>Editar</button>
    </form>
</body>
</html>