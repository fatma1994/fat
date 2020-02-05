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
    return view('index');
});

Route::get('/administration', function () {
    return view('administration');
})->middleware('auth');

Route::get('/pedagogique', function () {
    return view('pedagogique');
})->middleware('auth');

Route::get('/infos', function () {
    return view('infos');
});

Route::get('/contact', function () {
    return view('contact');
});

//Route::view('/', 'welcome');
  


/*Route::get('/eleve', function () {
   return view('eleve');
});*/



/*Route::get('/', function () {
   return view('administration');
})
Route::get('/administration', 'HomeController@index');*/

//Route::get("/elev","ElevesController@create");


//Route::get('/administration', 'AdministrationController@index')->middleware('auth');
//Route::get('/home', 'HomeController@index')->middleware('auth');

//Auth::routes();

Route::resource('classe','ClassesController');
Route::get('/classe/edit/{id}','ClassesController@edit')->name('classes_edit');
Route::get('/classe/create','ClassesController@create')->name('classes_create');
Route::patch("/classe/edit/{id}","ClassesController@update")->name('classes_update');


Route::resource('niveau','NiveauxController');
Route::get('/niveau/edit/{id}','NiveauxController@edit')->name('niveaux_edit');
Route::get('/niveau/create','NiveauxController@create')->name('niveaux_create');
Route::patch("/niveau/edit/{id}","NiveauxController@update")->name('niveaux_update');

Route::resource('serie','SeriesController');
Route::get('/serie/edit/{id}','SeriesController@edit')->name('series_edit');
Route::get('/serie/create','SeriesController@create')->name('series_create');
Route::patch("/serie/edit/{id}","SeriesController@update")->name('series_update');

Route::resource('eleve','ElevesController');
Route::get('/eleve/edit/{id}','ElevesController@edit')->name('eleves_edit');
Route::get('/eleve/create','ElevesController@create')->name('eleves_create');
Route::patch("/eleve/edit/{id}","ElevesController@update")->name('eleves_update');
Route::patch("/eleve/destory","ElevesController@destory")->name('eleves_destory');
Route::any('/eleve/show','ElevesController@show')->name('eleves_show');
Route::any('/eleve/recherche/','ElevesController@recherche')->name('eleves_recherche');


Route::resource('cours','CoursController');
Route::get('/cours/edit/{id}','CoursController@edit')->name('cours_edit');
Route::get('/cours/create','CoursController@create')->name('cours_create');
Route::patch("/cours/edit/{id}","CoursController@update")->name('cours_update');

Route::resource('matiere','MatieresController');
Route::get('/matiere/edit/{id}','MatieresController@edit')->name('matieres_edit');
Route::get('/matiere/create','MatieresController@create')->name('matieres_create');
Route::patch("/matiere/edit/{id}","MatieresController@update")->name('matieres_update');

Route::resource('teacher','TeachersController');
Route::get('/teacher/edit/{id}','TeachersController@edit')->name('teachers_edit');
Route::get('/teacher/create','TeachersController@create')->name('teachers_create');
Route::patch("/teacher/edit/{id}","TeachersController@update")->name('teachers_update');


Route::resource('inscription','InscriptionsController');
Route::get('/inscription/edit/{id}','InscriptionsController@edit')->name('inscriptions_edit');
Route::get('/inscription/create','InscriptionsController@create')->name('inscriptions_create');
Route::patch('/inscription/edit/{id}','InscriptionsController@update')->name('inscriptions_update');
Route::patch("/inscription/destory/{id}","InscriptionsController@destory")->name('inscriptions_destory');


Route::resource('note','NoteController');
Route::get('/note/edit/{id}','NoteController@edit')->name('notes_edit');
Route::get('/note/create','NoteController@create')->name('notes_create');
Route::patch("/note/edit/{id}","NoteController@update")->name('notes_update');
Route::patch("/note/destory/{id}","NoteController@destory")->name('notes_destory');
Route::any('/note/show','NoteController@show')->name('notes_show');
Route::any('/note/recherche/','NoteController@recherche')->name('notes_recherche');



//Auth::routes();

//Route::get('/eleve', 'ElevesController@index')->name('eleve');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin','AdminController@admin')
          ->middleware('is_admin')
           ->name('admin');
//Route::get('/administration', '	AdministrationController@index')->name('administration');
