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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

//Route::get('/users/{id}', function () {
  //  return view('users');
//});

Auth::routes();

// users
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users', 'UsersController@index')->name('users.index');
Route::get('/users/create', 'UsersController@create')->name('users.create');
Route::post('/users/store', 'UsersController@store')->name('users.store');
Route::get('/users/edit/{id}', 'UsersController@edit')->name('users.edit');
Route::post('/users/{id}', 'UsersController@update')->name('users.update');
Route::get('/users/destroy/{id}', 'UsersController@destroy')->name('users.destroy');

//systems
Route::get('/systems/edit/{id}', 'SystemsController@edit')->name('systems.edit');
Route::post('/systems/{id}', 'SystemsController@update')->name('systems.update');

//plant types
Route::get('/planttypes', 'PlantTypeController@index')->name('planttypes.index');
Route::get('/planttypes/create', 'PlantTypeController@create')->name('planttypes.create');
Route::post('/planttypes/store', 'PlantTypeController@store')->name('planttypes.store');
Route::get('/planttypes/edit/{id}', 'PlantTypeController@edit')->name('planttypes.edit');
Route::post('/planttypes/{id}', 'PlantTypeController@update')->name('planttypes.update');
Route::get('/planttypes/destroy/{id}', 'PlantTypeController@destroy')->name('planttypes.destroy');

//rooms 
Route::get('/rooms', 'RoomsController@index')->name('rooms.index');
Route::get('/rooms/create', 'RoomsController@create')->name('rooms.create');
Route::post('/rooms/store', 'RoomsController@store')->name('rooms.store');
Route::get('/rooms/edit/{id}', 'RoomsController@edit')->name('rooms.edit');
Route::post('/rooms/{id}', 'RoomsController@update')->name('rooms.update');
Route::get('/rooms/destroy/{id}', 'RoomsController@destroy')->name('rooms.destroy');

//plants
Route::get('/plants', 'PlantsController@index')->name('plants.index');
Route::get('/plants/create', 'PlantsController@create')->name('plants.create');
Route::get('/plants/edit/{id}', 'PlantsController@edit')->name('plants.edit');
Route::post('/plants/store', 'PlantsController@store')->name('plants.store');
Route::post('/plants/{id}', 'PlantsController@update')->name('plants.update');
Route::get('/plants/destroy/{id}', 'PlantsController@destroy')->name('plants.destroy');

//notes
Route::get('/notes/{entity}/{entityID}', 'NotesController@index')->name('notes.index');
Route::get('/notes/{entity}/{entityID}/create', 'NotesController@create')->name('notes.create');
Route::get('/note/edit/{id}', 'NotesController@edit')->name('note.edit'); // needed to call this note not notes - notes causes an issue
Route::post('/notes/store', 'NotesController@store')->name('notes.store');
Route::post('/notes/{id}', 'NotesController@update')->name('notes.update');
Route::get('/note/{entity}/{entityID}/destroy/{id}', 'NotesController@destroy')->name('note.destroy');