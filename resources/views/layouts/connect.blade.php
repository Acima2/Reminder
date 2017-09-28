<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Temp2</title>
        <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
        <link rel="icon" type="image/png" href= './img/plane2.png' />

    <style>
            html, body {
                background-color: #333333;
                width: 100vw;
                height: 100vh;
                margin: 0;
            }

            header {
                width: 100%;
                height: 10%;
                position: fixed;
                background-color: #333333;
                opacity: 0.9;
                top: 0%;
            }

/*Avatar et Croix*/
            .avatar{
                background: url('./img/avatar.svg') transparent center no-repeat;
                background-size: contain;
                background-color: transparent;
                border: 0px;
                display: inline-block;
                width: 2.2em;
                height: 2.2em;
                position: absolute;
                right: 9%;
                top: 22%;
                cursor: pointer;
            }

            .croix{
                background-image: url('./img/error.svg');
                background-position: center;
                background-repeat: no-repeat;
                background-color: transparent;
                background-size: contain;
                border: 0px;
                display: inline-block;
                width: 2.2em;
                height: 2.2em;
                position: absolute;
                right: 5%;
                top: 22%;
                cursor: pointer;
            }

            .trash{
                width: 1%;
                height: 1%;
                position: absolute;
                transform: scale(0.06);
                right: 3.5%;
                top:25%;
                background-color: transparent;
                border: 0px;
                background-size: contain;
                background-position: center;
            }

/*Barre de recherche  */
            #recherche {
                display: inline-block;
                width: 25%;
                height: 2em;
                background: #f5f5f5;
                border-radius: 2em;
                position: absolute;
                top: 22%;
                left: 40%;
            }
              
            #recherche .loupe {
                background:url(http://www.larevuedekenza.fr/wp-content/themes/quarter/images/sidebar/loupe.png) no-repeat;
                width: 1.7em;
                display: flex;
                margin-top: 15%
                border: 0px;
                float: right;
                margin-right: 3.5%;
                cursor: pointer;
            }
              
            #recherche input {
                outline: 0;
                border: 0;
                margin-top: 1%;
                height: 24px;
                float: left;
                margin-left: 5%;
                display: flex;
            }
              
            #recherche input[type=text] {
                font:300  HelveticaNeue-Light, "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
                background: none;
                width: 69%;
                padding: 0 9px;
            }

/* Logo*/
            .logo{               
                width: 25%;
                height: 95%;
                background-repeat: no-repeat;
                background-image: url('./img/logotype.svg');
                background-position: center;
                background-size: contain;
                position: absolute;
                top: 0%;
                left: 2%;
            }

/*Boutons creer et afficher*/
            .bouton1 {
                width: 12em;
                height: 7em;
                background-color: #EB5757;
                position: fixed;
                top: 31%;
                color: #f5f5f5;
                text-align: center;
                font-family: 'Monoton', cursive;
                font-size: 12px;
                cursor: pointer;
            }

            .bouton2 {
                width: 12em;
                height: 7em;
                background-color: #EB5757;
                position: fixed;
                top: 59%;
                color: #f5f5f5;
                text-align: center;
                font-family: 'Monoton', cursive;
                font-size: 12px;
                cursor: pointer;
            }

            .lien {
                text-decoration: none;
                color: #f5f5f5
            }

/*Formulaire de création d'un post-it*/            
            .blackbox{
                width: 63%;
                height: 60%;
                background: linear-gradient(black, grey);
                margin-top: 150px;
                position: absolute;
                margin-left: 300px;
                border-radius: 1%;
            }

            .creation {
                text-align: center;
                font-family: 'Monoton';
                font-size: 1.5em;
                color: #f5f5f5;
                margin-bottom: 2%;
            }

            .envoi {
                width: 25.2%;
                height: 3em;
                background-color: #f55c54;
                border: none;
                position: absolute;
                top: 85%;
                left: 48%;
                cursor: pointer;
            }

            .swann {
                position: absolute;
                bottom: 22%;
                right: 40%;
                width: 2em;
                height: auto;
            }

            .titre {
                width: 22%;
                height: 2em;
                margin-left: 48%;
                position: absolute;
                border: none;
                padding-left: 1.5%;
                padding-right: 1.5%;
                color: #333333;
            }

            .texte {
                width: 22%;
                height: 12.8em;
                position: absolute;
                left: 48%;
                top: 32%;
                border: none;
                padding-left: 1.5%;
                padding-right: 1.5%;
                padding-top: 1.5%;
                font-family: 'Arial';
                font-size: 0.85em;
                color: #333333;
            }

            .couleur {
                width: 30%;
                height: 60%;
                position: absolute;
                margin-left: 15%;
            }

            .vert {
                width: 20%;
                height: 20%;
                border-radius: 100%;
                background-color: #28BF6E;
                margin-bottom: 20%;
                display: flex;
            }

            .orange {
                width: 20%;
                height: 20%;
                border-radius: 100%;
                background-color: #FF8830;
                margin-bottom: 20%;
                display: flex;
            }

            .rouge {
                width: 20%;
                height: 20%;
                border-radius: 100%;
                background-color: #DB2218;
                margin-bottom: 20%;
                display: flex;
            }

            .radio {
                width: 100%;
                height: 100%;
                border-radius: 100%;
                cursor: pointer;
                margin-bottom: 20%;
                opacity: 0;
                margin: auto;
            }

            label {
                color: #f5f5f5;
                text-transform: uppercase;
                float: right;
                width: 50%;
                padding-right: 12%;
                margin-top: -32%;
            }

/*Footer*/
            footer {
                width: 100%;
                height: 7%;
                border-top: solid 0.2em #f5f5f5;
                background-color: #333333;
                opacity: 0.8;
                display: inline-block;
                position: fixed;
                bottom: 0%;
            }

            .copy{
                position: absolute;
                display: inline-block;
                left: 42%;
                height: 3em;
                width: 20%;
                color: #f5f5f5;
                font-size: 0.8em;
            }

            .home {
                background-image: url('./img/home.svg');
                background-position: center;
                background-repeat: no-repeat;
                width: 3em;
                height: 3em;
                background-color: transparent;
                background-size: contain;
                border:none;
                transform: scale(0.6);
                display: inline-block;
                position: absolute;
                left: 3%;
            }

            .twitter{
                background-image: url('./img/twitter.png');
                background-position: center;
                width: 3em;
                height: 3em;
                background-repeat: no-repeat;
                transform: scale(0.7);
                display: inline-block;
                cursor: pointer;
            }      

            .facebook{
                background-image: url('./img/facebook.png');
                background-position: center;
                width: 3em;
                height: 3em;
                background-repeat: no-repeat;
                transform: scale(0.7);
                margin-left: 87%;
                display: inline-block;
                cursor: pointer;
            }

            .linkedIn{
                background-image: url('./img/linkedIn.png');
                background-position: center;
                width: 3em;
                height: 3em;
                background-repeat: no-repeat;
                transform: scale(0.7);
                right: 7%;
                display: inline-block;
                cursor: pointer;
            }


    </style>
</head>


<body>

    <header>
        <!-- Avatar -->
        <button class="avatar" type="button"></button>
        <!-- Croix -->
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="croix"></a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
       		{{ csrf_field() }}
        </form>
        <!-- Poubelle -->
        <a href="#" class="trash"  type="button"><img src="./img/trash.svg"></a>
        <!-- Barre de recherche -->
        <div class="search">
            <form id="recherche" class="input" method="post" action="{{ route('postit') }}"> {{ csrf_field()}}
                <input name="search" type="text" placeholder="Mots-Clefs..." required />
                <input class="loupe" type="submit" value="" />
            </form>
        </div>
        <!-- Logo -->
        <div class="logo"></div> 
    </header>        

<!-- Boutons Créer & Afficher  -->
        <div class="bouton1">
            <a href="{{ url('/home') }}" class="lien">
                <h2>Créer </br> Post-It </h2>
            </a>
        </div>
        <div class="bouton2">
            <a href="{{ url('/postit') }}" class="lien">
                <h2>Afficher<br>Post-it</h2>
            </a>
        </div>

@yield('content')

<!-- Footer -->

        <footer>                   
            <div class="copy">
                <p>@copyright J-C, Romain, Alice</p>
            </div>
            <a href="#" class="home" ></a>
            <div class="facebook"></div>
            <div class="twitter"></div>
            <div class="linkedIn"></div>           
        </footer>

    </body>
</html>
