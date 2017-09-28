<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=all, initial-scale=1">
         <link rel="icon" type="image/png" href= './img/plane2.png' />
        <link rel="stylesheet" media="all" href="petite_resolution.css" />
        <title>Laravel</title>

        <!-- Fonts -->
        
        <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
        <!-- Styles -->
        <style>


            html, body {
                background-color: #333333;
                font-family: 'Raleway', sans-serif;
                width: 100vw;
                height: 100vh;
                margin: 0;
                position: relative;
            }

            
.logo{
    
    width: 25%;
    height: 7%;
    background-repeat: no-repeat;
    background-image: url('./img/logo.svg');
    position: absolute;
    top: 10%;
    left: 37%;
}

.blackbox{
   width: 60%;
   height: 63%;
   background: linear-gradient(black, grey);
   margin-top: 150px;
   position: absolute;
   margin-left: 300px;
   text-align: center;
   color: white;
   font-size: 25px;
   line-height: 3;
}

 /*Footer*/

            .footer {

                width: 100%;

                height: 7%;

                border-top: solid 0.2em #f5f5f5;

                display: inline-block;

                position: absolute;

                bottom: 0%

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

               position: absolute;

               bottom: 0%;

               left: 3%;

            }

            .twitter{

                background-image: url('./img/twitter.png');

                background-position: center;

                width: 3em;

                height: 3em;

                background-repeat: no-repeat;

                transform: scale(0.7);

                position: absolute;

                bottom: 0%;

                right: 13%;

                display: inline-block;

               

            }

            .facebook{

                background-image: url('./img/facebook.png');

                background-position: center;

                width: 3em;

                height: 3em;

                background-repeat: no-repeat;

                transform: scale(0.7);

                position: absolute;

                bottom: 0%;

                right: 10%;

               

               display: inline-block;

            }

            .linkedIn{

                background-image: url('./img/linkedIn.png');

                background-position: center;

                width: 3em;

                height: 3em;

                background-repeat: no-repeat;

                transform: scale(0.7);

                position: absolute;

                bottom: 0%;

                right: 7%;

                display: inline-block;

            }

</style>


 </head>


    <body>



<div class="logo"></div>

        
<div class="blackbox">
   <h1> Erreur!</br>
    La page demandée</br>
    n'existe pas.</h1>
</div>


    <!-- Footer -->
        <div class="footer">                    
            <div class="copy">
                <p>@copyright J-C, Romain, Alice</p></div>
            <div class="logo2"></div>
            <div class="facebook"></div>
            <div class="twitter"></div>
            <div class="linkedIn"></div>
            
        </div>
    <!--fin du footer  -->




</body>
</html>
