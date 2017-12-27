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

Route::get('/about', function() {
    return view('about');
});


//*** Students administration routes
/*
 *
 *
 */

 //*** students routes

Route::resource('students', 'StudentsController');

Route::get('/uploadstudents','StudentsController@uploadlist');

 //*** teachers routes

Route::resource('teachers', 'TeachersController'); 

Route::get('/uploadteachers','TeachersController@uploadlist');

//*** classes routes

Route::resource('classes','ClassesController');

//*** sections routes

Route::resource('sections','SectionsController');
/*
 *
 *
 */


//*** Authentication routes
/*
 *
 *
 */
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/register', function () {
//     return view('auth.login');
// });

/*
 *
 *
 */
