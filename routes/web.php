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

//Route::get('/', function () {
//    return view('welcome');
//});
/*
Route::get('/', function () {
    return view('Home');
});

Route::get('/about', function () {
    return view('About');
});
Route::get('/sports', function () {
    return view('sports');
});
Route::get('/contact', function () {
    return view('contact');
});
?>
*/

route::get('/','PagesController@getHomePage');
route::get('/about','PagesController@getAboutPage');
route::get('/sports','PagesController@getSportsPage');
route::get('/contact','PagesController@getContactPage');
route::post('/contact/submit', 'MessagesController');
