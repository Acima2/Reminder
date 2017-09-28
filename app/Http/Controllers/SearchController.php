<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use \App\PostIt;
use Illuminate\Support\Facades\Auth;
class SearchController extends Controller
{
    public function searchPostIt(){
        $id = Auth::user()->id;
        $search = $_POST['search'];
        $green = PostIt::where([
            ['user_id', '=', "$id"],
            ['titre', '=', "$search"],
            ["couleur", "=", "postit1"]
        ])->get();
        $orange = PostIt::where([
            ['user_id', '=', "$id"],
            ['titre', '=', "$search"],
            ["couleur", "=", "postit2"]
        ])->get();
        $red = PostIt::where([
            ['user_id', '=', "$id"],
            ['titre', '=', "$search"],
            ["couleur", "=", "postit3"]
        ])->get();
        return view('postit', [
            'todo' => $green,
            'important' => $orange,
            'urgent' => $red
        ]);
    }
}