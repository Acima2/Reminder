<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Reminder Post-it</title>
        <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
        <link rel="icon" type="image/png" href= './img/plane2.png' />

        <style>
/*Template non connecté*/

            html, body {
                background-color: #333333;
                height: 100vh;
                width: 100vw;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }           

/*Mode d'emploi*/

            .rules {
                height: 26.6em;
                width: 18em;
                background-color: transparent;
                border: solid 0.4em #f55c54;
                position: absolute;
                left: 7%;
                top: 12%;
                padding: 1%;
            }

            h3 {
                font-family: 'Monoton', cursive;
                color: #f5f5f5;
                text-align: left;
            }

            .description {
                color: #f5f5f5;
                text-align: left;
            }

/*Triangles & logo*/

            .triangle1 {
                border-left: 180px solid transparent; 
                border-right: 180px solid transparent; 
                border-bottom: 130px solid #f55c54;
                transform: rotate(41deg);
                position: absolute;
                top: 12%;
                left: 75%;
            }

            .triangle2 {
                border-left: 140px solid transparent; 
                border-right: 140px solid transparent; 
                border-bottom: 90px solid #333333;
                transform: rotate(41deg);
                position: absolute;
                top: 9%;
                left: 80.74%;
            }

            .triangle3 {
                border-left: 150px solid transparent; 
                border-right: 150px solid transparent; 
                border-bottom: 100px solid #f5f5f5;
                transform: rotate(41deg);
                position: absolute;
                top: 8%;
                left: 80%;
            }

            .logo {
                background-image: url("./img/logotype.svg");
                background-repeat: no-repeat;
                position: absolute;
                top: 22%;
                left: 64%;
                width: 27%;
                height: 3.8em;
            }

/*Footer*/
            footer {
                width: 100%;
                height: 7%;
                border-top: solid 0.2em #f5f5f5;
                background-color: #333333;
                opacity: 0.8;
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

            .logo2 {
               background-image: url('./img/plane2.png');
               background-position: center;
               background-repeat: no-repeat;
               width: 3em;
               height: 3em;
               transform: scale(0.8);
               display: inline-block;
               margin-left: 3%;
               cursor: pointer;
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
                margin-left: 75%;
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
                display: inline-block;
                cursor: pointer;
            }
            
        </style>
    </head>
<!-- Template non connecté  -->

    <body>

<!-- Triangles & logo-->

            <div class="triangle3"></div>
            <div class="triangle2"></div>
            <div class="triangle1"></div>
            <div class="logo"></div>

@yield('content')            

<!-- Mode d'emploi -->

            <div class="rules">
                <h3>Post-it</h3>
                <p class="description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit,  
                </p>
            </div>

<!-- Footer -->
        <footer>                   
            <div class="copy">
                <p>@copyright J-C, Romain, Alice</p>
            </div>
            <div class="logo2"></div>
            <div class="facebook"></div>
            <div class="twitter"></div>
            <div class="linkedIn"></div>           
        </footer>
    </body>
</html>
