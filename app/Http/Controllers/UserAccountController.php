<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \App\User;
class UserAccountController extends Controller
{
    public function displayProfil(){
        $user_id = Auth::user()->id;
        $profil = User::where('id', '=', "$user_id")->get();
        return view('/profil', [
            'datas' => $profil
        ]);
    }
    public function deleteCurrentUser(){
		$user_id = Auth::user()->id;
		$delete = User::where("id",'=',"$user_id")->delete();
		return redirect('/');
	}
}