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
         @foreach ($todo as $postit_green)
            <div class="postit1">
            <a class="delete" href='{{ url("/delete/$postit_green->id")}}'>____</a>
              <h3>{{ $postit_green->titre}}</h3>
              <p>{{ $postit_green->contenu}}</p>
            </div>
          @endforeach
         </div>
         <!--  orange  -->
         <div class="col-perso">
         @foreach ($important as $postit_important)
            <div class="postit2">
            <a class="delete" href='{{ url("/delete/$postit_important->id")}}'> ____</a>
            <h3>{{ $postit_important->titre}}</h3>
            <p>{{ $postit_important->contenu}}</p>
            </div>
          @endforeach
         </div>
         <!-- rouge -->
         <div class="col-perso">
         @foreach ($urgent as $postit_urgent)
            <div class="postit3">
            <a class="delete" href='{{ url("/delete/$postit_urgent->id")}}'> ____</a>
            <h3>{{ $postit_urgent->titre}}</h3>
            <p>{{ $postit_urgent->contenu}}</p>
            </div>
          @endforeach
         </div>
      </center>                          
    </body>
</html>
@endsection

