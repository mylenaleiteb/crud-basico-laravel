<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passaporte Industrial</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: url("{{ asset('images/passaporteindustrial.jpeg') }}"); /* Substitua 'background-image.jpg' pelo caminho da sua imagem de fundo */
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            font-family: Arial, sans-serif;
            color: #fff;
            position: relative;
        }

        #overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 255, 0.1); /* Azul claro com 30% de opacidade */
        }

        #content {
            text-align: center;
            z-index: 1;
        }

        #phone-image {
            max-width: 100%;
            height: auto;
            margin-top: 20px;
        }

        #entrar-btn {
            background-color: #3498db; /* Azul claro */
            color: #fff;
            padding: 10px 20px;
            font-size: 16px;
            text-decoration: none;
            margin-top: 50px;
            position: relative;
            top: 200px;
            display: inline-block;
            border-radius: 5px;
        }

        #entrar-btn:hover {
            background-color: #2980b9; /* Azul mais escuro ao passar o mouse */
        }
    </style>
</head>
<body>
    <div id="overlay"></div>
    <div id="content">
        
        <a href="{{ route('pagina_inicial') }}" id="entrar-btn">Entrar no Módulo Auditoria</a>
    </div>
</body>
</html>