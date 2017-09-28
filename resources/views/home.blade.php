@extends('layouts.connect') @section('content')

<!-- Formulaire de création d'un post-it -->

@isset($message)
	<div class="message">
		{{ $message }}
	</div>
@endisset
    <div class="blackbox">
        <h3 class="creation">Créer votre post-it</h3>
        <div class="formulaire">
            <form class="form" method="POST" action="{{ route('home') }}">{{ csrf_field() }}
                <div class="couleur">

                    <div class="vert"> 
                        <input type="radio" name="radioset" value="todo" class="radio">        
                    </div>
                    <label for="todo">A Faire</label>

                    <div class="orange">
                        <input type="radio" name="radioset" value="important" class="radio">
                    </div>
                    <label for="important">Important</label>

                    <div class="rouge">
                        <input type="radio" name="radioset" value="urgent" class="radio">
                    </div>
                    <label for="urgent">Urgent</label>
                </div><!-- fin de div couleur -->

                <button type="submit" class="envoi" id="submit"><img src="./img/swann.svg" class="swann">
                </button>

                <div class="form-group">
                    <input id="title" type="text" class="titre" name="title" placeholder="Titre" value="{{ old('title') }}" required autofocus>
                    <textarea id="contenu" type="text" class="texte" name="contenu" required>
                    </textarea>
                </div>
                
            </form>
        </div>
    </div>
                           
@endsection





