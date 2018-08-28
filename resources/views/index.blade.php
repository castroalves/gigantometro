<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gigantômetro | Contador de sócios do Clube de Regatas Vasco da Gama</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #000;
                color: #fff;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .sitename {
                font-size: 64px;
                
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #fff;
                padding: 15px 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                border: 2px solid #fff;
            }

            .links > a:hover {
                color: #000;
                background-color: #fff;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .m-b-md > p {
                margin: 0 0 60px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <img src="https://upload.wikimedia.org/wikipedia/pt/8/89/Club_de_Regatas_Vasco_da_Gama.png" width="100" alt="Vasco da Gama" class="escudo">
                <h1 class="sitename">Gigantômetro</h1>
                <div class="title m-b-md">
                    <p><strong id="counter">{{ $counter }}</strong> sócios</p>
                </div>
                <p class="links"><a href="http://socio-vasco.futebolcard.com/?utm_source=gigantometro&amp;utm_medium=link&amp;utm_campaign=gigantometro" class="btn btn-default">Seja um Gigante!</a></p>
            </div>
        </div>
    </body>
    <script type="text/javascript" src="{{ asset('js/gigantometro.js') }}"></script>
    <script>
        var options = {
          useEasing: true, 
          useGrouping: true, 
          separator: '.', 
          decimal: ',', 
        };
        var endVal = {{ $counter }};
        var demo = new CountUp('counter', 0, endVal, 0, 2.5, options);
        if (!demo.error) {
          demo.start();
        }
    </script>
</html>
