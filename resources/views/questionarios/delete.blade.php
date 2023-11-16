<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar perguntas do questionário</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #3498db; /* Cor de fundo da sua página inicial */
            color: #FFF; /* Cor do texto da sua página inicial */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
            color: #333
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            background-color: #e74c3c; /* Cor vermelha para indicar exclusão */
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #c0392b; /* Cor mais escura ao passar o mouse */
        }
    </style>
</head>
<body>
    <form action="{{ route('deletar_pergunta', ['id' => $questionario->id]) }}" method="POST">
        @csrf
        <label for="pergunta">Tem certeza que deseja excluir a pergunta?</label> <br />
        <input type="text" name="pergunta" value="{{ $questionario->pergunta }}" readonly><br /><br />

        <label for="nomeAvaliador">A pergunta foi registrada pelo(a) avaliador(a):</label><br />
        <input type="text" name="nomeAvaliador" value="{{ $questionario->nomeAvaliador }}" readonly> <br /><br />
        
        <button>Excluir pergunta</button>
    </form>
</body>
</html>