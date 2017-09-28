@extends('layouts.unconnect') @section('content')
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Accueil</title>
        <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">

        <style>

/*Boutons connexion & inscription*/

            .button1 {
                height: 50px;
                width: 185px;
                background-color: #f55c54;
                position: absolute;
                left: 45%;
                padding-bottom: 1%;
                margin-top: 27%;
            }

            .button2 {
                height: 50px;
                width: 185px;
                background-color: #f5f5f5;
                position: absolute;
                left: 65%;
                padding-bottom: 1%;
                margin-top: 27%;
            }

            .connexion {
                font-size: 20px;
                color: #f5f5f5;
                text-align: center;
                font-family: 'Monoton', cursive;
                text-decoration: none;
            }

            .inscription {
                font-size: 20px;
                color: #333333;
                text-align: center;
                font-family: 'Monoton', cursive;
                text-decoration: none;
            } 

        </style>
    </head>
    <body>
    
<!-- Boutons connexion & inscription-->

        <div class="button1">
                <h2 class="connexion"><a href="{{ route('login') }}" class="connexion">Se connecter</a></h2>
            </div>
            <div class="button2"> 
                <h2 class="inscription"><a href="{{ route('register') }}" class="inscription">S'inscrire</a>
                </h2> 
            </div>
    </body>
</html>

@endsection
