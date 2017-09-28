<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
Route::get('/', 'LinkController@index');
/* Home route */
Route::get('/home', [
    'middleware' => 'auth',
    'uses' => 'LinkController@home'
])->name('home');
Route::post('/home','PostItController@addPostIt')->name('home');
/* Post-it view routing */
Route::get('/postit', 'PostItController@displayPostIt')->name('postit');
Route::post('/postit', 'SearchController@searchPostIt')->name('postit');
/* Delete one post-it */
Route::get('/delete/{id}', 'PostItController@deletePostIt')->name('deleteOne');
/* Delete all post-it*/
Route::get('/deleteall','PostItController@deleteAllPostIt')->name('deleteAll');
/* User Gestion */
Route::get('/profil','UserAccountController@displayProfil');
Route::get('/currentUserDelete', 'UserAccountController@deleteCurrentUser');


Route::get('/404',function(){
	return abort(404);
});