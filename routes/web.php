<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/about', function () {
//     $name = 'Thalal Atha Nabil';
//     $aliasname = 'Ryzntx';

//     return view('about', ['name' => $name, 'aliasname' => $aliasname]);
// });

// Route::get('/contacts', function () {
//     $ig = 'https://www.instagram.com/thanbl';
//     $fb = 'https://www.instagram.com/thanbl';
//     $git = 'https://www.instagram.com/thanbl';

//     return view('contacts', ['ig' => $ig, 'fb' => $fb, 'git' => $git]);
// });

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

Route::get('/pelajar', 'PelajarController@index');
Route::delete('/pelajar/{students}', 'PelajarController@destroy');



// Route::get('/students', 'StudentsController@index');
// Route::get('/students/create', 'StudentsController@create');
// Route::get('/students/{student}', 'StudentsController@show');
// Route::post('/students', 'StudentsController@store');
// Route::delete('/students/{student}', 'StudentsController@destroy');
// Route::get('/students/{student}/edit', 'StudentsController@edit');
// Route::patch('/students/{student}', 'StudentsController@update');

Route::resource('students', 'StudentsController');
