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
Route::get('action','PagesController@action')-> name('action');
Route::get('about','PagesController@about')-> name('about');
Route::get('join','PagesController@join')-> name('join');
Route::get('news','PagesController@news')-> name('news');
Route::get('contact','PagesController@contact')-> name('contact');

// practice to review route
// Route::get('/student/{name}','studentController@showStudent');
Route::get('subject','subjectController@showSubject')-> name('subject');
Route::get('post','postController@getPosts');
// Route::get('student','StudentController@getStudent');
// Route::post('addstudent','StudentController@insertStudent')-> name('addstudent');
// Route::get('editstudent/{id}','StudentController@showEdit')-> name('edit');
// Route::get('formadd','StudentController@showForm');
// Route::put('update/{id}','StudentController@updateStudent')-> name('update');
// // Route::get('saveStudent/{id}','StudentController@saveStudent')-> name('save');
// Route::get('delete/{id}','StudentController@deleteStudent')-> name('delete');


Route::resource('grud','StudentsController');
Route::resource('comment','CommentController');