<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar uma pergunta</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #3498db; /* Cor de fundo da sua página inicial */
            color: #fff; /* Cor do texto da sua página inicial */
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
            background-color: #3498db;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2980b9; /* Cor mais escura ao passar o mouse */
        }
    </style>
</head>
<body>
    <form>
        <label for="nomeAvaliador">Nome do Avaliador</label> <br />
        <input type="text" name="nomeAvaliador" value="{{ $questionario->nomeAvaliador }}" readonly> <br />

        <label for="pergunta">Pergunta</label> <br />
        <input type="text" name="pergunta" value="{{ $questionario->pergunta }}" readonly> <br />

        <label for="peso">Peso</label> <br />
        <input type="integer" name="peso" value="{{ $questionario->peso }}" readonly> <br /> <br />
        
        <a href="{{ route('pagina_inicial') }}">
            <button type="button">Voltar para página inicial</button>
        </a>
    </form>
</body>
</html>