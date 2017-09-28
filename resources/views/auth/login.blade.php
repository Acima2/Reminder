@extends('layouts.unconnect') @section('content')
        <style>

/*Formulaire de Connexion*/

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
            .connexion { 
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
                height: 3em;
                border: solid 0.25em #333333;
                margin-left: 6em;
                margin-bottom: 1.5em;
                padding-left: 0.7em; 
            }

            .rappeler {
                color: #333333;
                margin-left: 5.2em;
            }

            .oubli {
                width: 29%;
                height: 1.8em;
                margin-left: 4.4em;
                border: none; 
                text-decoration: none;
                color: #333333;
            }

            .envoi {
                width: 25%;
                height: 2.5em;
                background-color: #f55c54;
                margin-left: 16em;
                margin-top: 1.8em;
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

<!-- Formulaire de Connexion -->

    <body>            
        <div class="formulaire">
            <h3 class="connexion">Se connecter</h3>
            <form id="connexion" method="POST" action="{{ route('login') }}">
		{{ csrf_field() }}
                <div class="form-group">
                    <input type="text" class="champs" id="name" placeholder="E-mail ou Nom" name="name" value="{{ old('name') }}" required autofocus>
                </div>
                <div class="form-group">
                    <input id="password" type="password" class="champs" name="password" placeholder="Mot de passe" required autofocus>
                </div>
                <label class="rappeler">
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Se rappeler de moi
                </label>
                <a class="oubli"href="{{ route('password.request') }}">Forgot Your Password?</a>
                <button type="submit" class="envoi"><img src="./img/swann.svg" class="swann">
                </button>  
            </form>        
        </div>
    </body>
</html>
@endsection
