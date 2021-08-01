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


// Route::get('/contact', function () {
//     return view('pages.contact');
// });


// Route::get('/', function () {
//     return view('pages.index');
// });

// Route::get('/about', function () {
//     return view('pages.about');
// });


// Route::get('/services', function () {
//     return view('pages.services');
// });


Route::get('/','PageController@index');

Route::get('/about','PageController@about');

Route::get('/services','PageController@services');



Route::resource('/blogs','PostController');


 Route::get('/create', function () {
     return view('posts.create');
 });

//  Route::get('/blogs/create', function () {
//     return view('pages.login');
// });

// Route::get('/blogs/create/registration', function () {
//     return view('pages.registration');
// });








Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
