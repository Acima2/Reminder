<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use \App\PostIt;
use Illuminate\Support\Facades\Auth;
class PostItController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function displayPostIt(){
        $id = Auth::user()->id;
        $postit1 = PostIt::where([
            ["user_id", "=", "$id"],
            ["couleur", "=", "postit1"]
        ])->get();
        $postit2 = PostIt::where([
            ["user_id", "=", "$id"],
            ["couleur", "=", "postit2"]
        ])->get();
        $postit3 = PostIt::where([
            ["user_id", "=", "$id"],
            ["couleur", "=", "postit3"]
        ])->get();
        return view('postit', [
            'todo' => $postit1,
            'important' => $postit2,
            'urgent' => $postit3,
            ]);
    }
    public function addPostIt(){
        switch ($_POST['radioset']){
            case 'todo': 
                $couleur = 'postit1';
            break;
            case 'important' :
                $couleur = 'postit2';
                break;
            case 'urgent' :
                $couleur = 'postit3';
                break;
        }
        $id = Auth::user()->id;
        $postit = PostIt::where("user_id", "=", "$id")->insert(array(
            'user_id' => $id,
            'titre' => $_POST['title'],
            'contenu' => $_POST['contenu'],
            'couleur' => $couleur,            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ));
        $message = "Vous avez bien ajouté le postit";
        return view('home', [
            'message' => $message
        ]);
    }
    public function deletePostIt($postit_id){
        $delete = PostIt::where('id', '=', "$postit_id")->delete();
        $note = "Post-it Supprimé.";
        $id = Auth::user()->id;
        $postit = PostIt::where("user_id", "=", "$id")->get();
        return redirect('postit');
    }
    public function deleteAllPostIt(){
        $id = Auth::user()->id;
        $postit = PostIt::where("user_id", "=" , "$id")->delete();
        return redirect('postit');
   }
}