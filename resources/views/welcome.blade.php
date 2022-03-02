<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Inventário NM</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

            <style>
                body {
                    font-family: 'Nunito', sans-serif;
                    background-color: #040491;
                    color: white;
                }

                .imagem {
                    margin-top: 50px;
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

                .manual {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    margin-top: 50px;
                }
              
                .ambiente {
                  display: flex;
                  flex-direction: column;
                  align-items: center;
                  color: red;
                  margin-top: 10px;
                }
        </style>   

    </head>
    <body class="padrao">
        <h1 class="ambiente">HOMOLOGAÇÃO</h1>
        <div class="imagem">
            <img src="/assets/Logo_inventario.png"></img>
        </div>
        <div class="info">
            <h3>Aplicativo InventarioNM.com V1.1.1</h3>
            <a href="/assets/inventario_nm.apk">Baixe o app aqui</a>
        </div>
        <div class="manual">
            <h3>Instrução de trabalho do aplicativo</h3>
            <a href="/assets/IT_Inventário_NM.pdf" target="_blank">Baixe o manual aqui</a>
        </div>

    </body>
</html>
