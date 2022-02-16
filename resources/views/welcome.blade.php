<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background-color: #040491;
                color: white;
            }

            .imagem {
                margin-top: 80px;
                display: flex;
                justify-content: center;
            }

            a {
                color: white;
                font-family: 'Nunito', sans-serif;
            }

            .info {
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .info h3 {
                font-family: 'Nunito', sans-serif;
            }
        </style>   

    </head>
    <body class="padrao">
        <div class="imagem">
            <img src="{{ asset('../assets/Logo_inventario.png') }}"></img>
        </div>
        <div class="info">
            <h3>Aplicativo InventarioNM.com</h3>
            <a href="{{ asset('../assets/inventario.apk') }}">Baixe aqui</a>
        </div>
    
    </body>
</html>
