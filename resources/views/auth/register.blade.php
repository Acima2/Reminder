@extends('layouts.unconnect') @section('content')
        <style>

/*Formulaire d'Inscription*/

            html, body {
                width: 100vw;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .formulaire {
                width: 48%;
                height: 53%;
                background-color: #f5f5f5;
                position: absolute;
                top: 33%;
                left: 42%;
            }

            /*h3*/
            .inscription { 
                color: #333333;
                font-family: 'Roboto';
                text-transform: uppercase;
                font-weight: bold;
                font-size: 1.8em;
                margin-bottom: 0.5em;
                margin-top: 0.9em;
                text-align: center;
            }

            .champs {
                width: 68%;
                height: 2em;
                border: solid 0.25em #333333;
                margin-left: 6em;
                margin-bottom: 1em;
                padding-left: 0.7em; 
            }



            .envoi {
                width: 25%;
                height: 2.5em;
                background-color: #f55c54;
                margin-left: 16em;
                margin-top: 0.2em;
                border: none;
                position: relative;
                cursor: pointer;
            }

            .swann {
                position: absolute;
                width: 5em;
                height: auto;
                transform: scale(0.35);
                top: -52%;
                left: 27%; 
            }
            
        </style>
    </head>

<!-- Formulaire d'Inscription -->

    <body>
        <div class="formulaire">
            <h3 class="inscription">S'inscrire</h3>
            <form method="post" action="{{ route('register') }}">
            {{ csrf_field() }}
              <div class="form-group">
                <input type="name" class="champs" id="name" placeholder="Name" name="name">
              </div>
              <div class="form-group">
                <input type="email" class="champs" id="email" placeholder="E-mail" name="email">
              </div>
              <div class="form-group">
                <input type="password" class="champs" id="pwd" placeholder="Mot de passe" name="password">
              </div>
              <div class="form-group">
                <input type="password" class="champs" id="pwd" placeholder="Confirmer mot de passe" name="password_confirmation">
              </div>
              <button type="submit" class="envoi" id="submit"><img src="./img/swann.svg" class="swann"></button>  
            </form>        
        </div> 

    </body>
</html>
@endsection
