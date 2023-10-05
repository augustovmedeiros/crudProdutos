<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar um produto</title>
</head>
<body>
    <form action="{{ route('registrar_produto') }}" method="POST">
        @csrf
        <label for="">Nome</label><br/>
        <input type="text" name="nome"><br/>
        <label for="">Descricao</label><br/>
        <input type="text" name="descricao"><br/>
        <label for="">Preço</label><br/>
        <input type="number" name="preco"><br/>
        <button>Adicionar</button>
    </form>
</body>
</html>