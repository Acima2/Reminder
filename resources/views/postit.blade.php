@extends('layouts.connect') @section('content')

<style>

  html, body {
                         
    width: 100vw;
    height: 100vh;
    margin: 0;
  }

/*Div contenant les post-it*/
  .post {
    width: 100%;
    margin-top: 10%; 
    margin-left: 5%; 
  }
/*post it*/

  p {
    margin: 0;
    padding: 0;
    line-height: 2;
  }

  h3 {   
    margin: 0;
    padding-top: 0%;
    font-size: 1.5em;
    border-bottom-style: dotted;
  }

  .postit1,.postit2,.postit3 {

    width: 90%;
  	padding: 1em;
  	display: inline-block;
    margin-bottom: 15%;
    margin-right: 5%;
  }

  .postit1 {
    background: #28BF6E;
  }

  .postit2 {
    background: #FF8830;
  }

  .postit3 {
    background: #DB2218;
  }

  .delete{
    width: 1.5em;
    height:1.5em;
    background-image: url('./img/croix.png');
    background-position: center;
    background-color: transparent;
    border: none;
    background-size: contain;
    margin-left: 90%;
    cursor: pointer;
  }

  .col-perso {
    width: 20%;
    display: inline-block;
    margin-right: 3%;
  }

</style>


 </head>
    <body>
      <center class="post">
         <!-- vert -->   
         <div class="col-perso">
         @foreach ($datas as $postit)
            <div class="postit1">
              <button class="delete"></button>
              <h3>{{ $postit->titre}}</h3>
              <p>{{ $postit->contenu}}</p>
            </div>
          @endforeach
         </div>
         <!--  orange  -->
         <div class="col-perso">
         @foreach ($datas as $postit)
            <div class="postit2">
              <button class="delete"></button>
              <h3>{{ $postit->titre}}</h3>
              <p>{{ $postit->contenu}}</p>
            </div>
          @endforeach
         </div>
         <!-- rouge -->
         <div class="col-perso">
         @foreach ($datas as $postit)
            <div class="postit3">
              <button class="delete"></button>
              <h3>{{ $postit->titre}}</h3>
              <p>{{ $postit->contenu}}</p>
            </div>
          @endforeach
         </div>
      </center>                          
    </body>
</html>
@endsection

